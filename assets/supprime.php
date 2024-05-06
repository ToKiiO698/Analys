<?php
     
    $id=$_GET['id'];
     
    $db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8mb4', 'root', '');
     
     
    $sql = "DELETE FROM user WHERE id = $id";
     
    if (($db && $sql)){
        ($db);
        header('Location: g-utilisateur.php');
        exit;
    }
    else{
        echo "Erreur delete ";
    }
?>