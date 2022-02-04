<?php

require_once dirname(__FILE__)."./../config/database.php";

try {
    //on récupére les données
    $sql = "SELECT * FROM `clients` WHERE `lastName` LIKE 'M%' ORDER BY `lastName`";
    //on execute la requête
    $request = $pdo->query($sql);
    //on récupere les données
    $users = $request->fetchAll();
} catch (PDOException $e) {
    $errorMessage = 'Error !';
}

include(dirname(__FILE__).'/../views/menu.php');

include(dirname(__FILE__).'/../views/header.php');

include(dirname(__FILE__).'/../views/exo5.php');

include(dirname(__FILE__).'/../views/footer.php');

