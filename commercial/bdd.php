<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=facture;charset=utf8', 'root', '');
}catch(PDOException $e){
    die('Erreur connexion : '.$e->getMessage());
}