<?php

// constantes d'environnement
define("DSN", 'mysql:host=127.0.0.1;dbname=colyseum;charset=utf8');
define("DBUSER", "admin-colyseum");
define("DBPASS", "Gary37@60A");


//connexion à la base
try{
//on instancie PDO
    $pdo = new PDO(DSN, DBUSER, DBPASS);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "on est connecté";
}catch(PDOException $e){
    ("Non connecté !".$e->getMessage());
}
