<?php

require_once dirname(__FILE__)."./../config/database.php";

try {
    //on récupére les données
    $sql = "SELECT `clients`.`firstName`, `clients`.`lastName`, DATE_FORMAT(`clients`.`birthDate`, '%d%m%Y') AS `birthDate`,
IF (`cards`.`cardTypesId` = 1, 'Oui', 'Non') AS `fidelity`,
IF (`cards`.`cardTypesId` = 1, `clients`.`cardNumber`, '') AS `cardFidelity`
FROM `clients`
LEFT JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`;";
    //on execute la requête
    $request = $pdo->query($sql);
    //on récupere les données
    $users = $request->fetchAll();
} catch (PDOException $e) {
    $errorMessage = 'Error !';
}


include(dirname(__FILE__).'/../views/menu.php');

include(dirname(__FILE__).'/../views/header.php');

include(dirname(__FILE__).'/../views/exo7.php');

include(dirname(__FILE__).'/../views/footer.php');

