<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=analys;charset=utf8', 'root', '');
}catch(PDOException $e){
    die('Erreur connexion : '.$e->getMessage());
}