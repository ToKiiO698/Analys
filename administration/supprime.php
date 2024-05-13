<?php
// Supprimer l'utilisateur
if(isset($_POST['id'])) {
    $id = $_POST['id'];

    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8', 'qcrxdvrj', '5nKa4$54f@a7w');

    // Requête pour supprimer l'utilisateur
    $stmt = $db->prepare('DELETE FROM user WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo 'Utilisateur supprimé';
    exit;
}
?>