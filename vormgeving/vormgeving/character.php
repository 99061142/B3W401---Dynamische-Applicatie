<?php
    include('code/functions.php');

    $character_id = 0;
    if(isset($_GET['id'])){
        $character_id = $_GET['id'];
    }

    $one_character_Information = onecharacterInformation($character_id);
    if(!$one_character_Information){
        header('location: index.php');
    }
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Character - <?= $one_character_Information['name'] ?></title>
        <?php include('include/styling_links.php'); ?>
    </head>
    <body>
        <header>
            <h1><?= $one_character_Information['name'] ?></h1>
            <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
        </header>
        <div id="container">
            <div class="detail">
                <div class="left">
                    <img class="avatar" alt="Image of <?= $one_character_Information['name'] ?>" src="resources/images/<?= $one_character_Information['avatar'] ?>">
                    <div class="stats" style="background-color: <?= $one_character_Information['color'] ?>">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $one_character_Information['health'] ?></li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $one_character_Information['attack'] ?></li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $one_character_Information['defense'] ?></li>
                        </ul>
                        <ul class="gear">
                            <?php if($one_character_Information['weapon'] !== NULL){ ?>
                                <li><b>Weapon</b>: <?= $one_character_Information['weapon'] ?></li>
                            <?php }
                            if($one_character_Information['armor'] !== NULL){ ?>
                                <li><b>Armor</b>: <?= $one_character_Information['armor'] ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <p>
                        <?= nl2br($one_character_Information['bio']) ?>       
                    </p>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
        <?php include('include/footer.php'); ?>
    </body>
</html>