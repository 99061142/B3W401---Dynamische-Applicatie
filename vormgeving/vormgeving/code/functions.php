<?php
    include('connection.php');

    // Get the amount of the characters
    function characterAmount(){
        $db_connection = databaseConnection();
        $query = $db_connection->prepare("SELECT count(id) AS amount FROM characters");
        $query->execute();
        $characterAmount = $query->fetch();
        return $characterAmount['amount'];
    }

    // Get all the information of the characters
    function allCharacterInformation(){
        $db_connection = databaseConnection();
        $query = $db_connection->prepare("SELECT * FROM characters ORDER BY name");
        $query->execute();
        $all_Character_Information = $query->fetchAll();
        return $all_Character_Information;
    }

    // Get the information of the character the user is looking at
    function onecharacterInformation($id){
        $db_connection = databaseConnection();
        $query = $db_connection->prepare("SELECT * FROM characters WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        $one_character_Information = $query->fetch();
        return $one_character_Information;
    }
?>