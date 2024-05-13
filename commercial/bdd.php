<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "analys";

// Créer une connexion à la base de données
try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurer PDO pour générer des exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit(); // Arrêter le script en cas d'échec de la connexion
}
?>
