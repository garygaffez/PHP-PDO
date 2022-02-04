<?php

require_once dirname(__FILE__)."./../config/database.php";

try {
    //on récupére les données
    $sql = "SELECT `title` , `performer`, DATE_FORMAT(`date`, '%d/%m/%Y') AS `date`, `startTime` FROM `shows` ORDER BY `title`";
    //on execute la requête
    $request = $pdo->query($sql);
    //on récupere les données
    $shows = $request->fetchAll();
} catch (PDOException $e) {
    $errorMessage = 'Error !';
}

include(dirname(__FILE__).'/../views/menu.php');

include(dirname(__FILE__).'/../views/header.php');

include(dirname(__FILE__).'/../views/exo6.php');

include(dirname(__FILE__).'/../views/footer.php');

