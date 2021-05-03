<?php
    include('code/functions.php');
    $characterAmount = characterAmount();
    $all_Character_Information = allCharacterInformation();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>All Characters</title>
        <?php include('include/styling_links.php'); ?>
    </head>
    <body>
        <header>
            <h1>Alle <?= $characterAmount ?> characters uit de database</h1>
        </header>
        <div id="container">
            <?php foreach($all_Character_Information as $character){ ?>
                <a class="item" href="character.php?id=<?= $character['id'] ?>">
                    <div class="left">
                        <img class="avatar" alt="Image of <?= $character['name'] ?>" src="resources/images/<?= $character['avatar'] ?>">
                    </div>
                    <div class="right">
                        <h2><?= $character['name'] ?></h2>
                        <div class="stats">
                            <ul class="fa-ul">
                                <li>
                                    <span class="fa-li"><i class="fas fa-heart"></i></span><?= $character['health'] ?>
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $character['attack'] ?>
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $character['defense'] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detailButton">
                        <i class="fas fa-search"></i> bekijk
                    </div>
                </a>
            <?php } ?>
        </div>
        <?php include('include/footer.php'); ?>
    </body>
</html>