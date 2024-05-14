<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $subject = $_POST['sujet'];
    $message = $_POST['message'];
    $user_id = 1; // Remplacez par la façon dont vous obtenez l'ID de l'utilisateur

    // Vérifier si l'utilisateur existe
    $user_check_sql = "SELECT * FROM user WHERE id = $user_id";
    $user_check_result = $conn->query($user_check_sql);

    if ($user_check_result->num_rows > 0) {
        // Insérer le nouveau ticket dans la base de données
        $insert_sql = "INSERT INTO Tickets (editeur, Sujet, message) VALUES ($user_id, '$subject', '$message')";

        if ($conn->query($insert_sql) === TRUE) {
            echo "Ticket créé avec succès.";
        } else {
            echo "Erreur lors de la création du ticket: " . $conn->error;
        }
    } else {
        echo "Utilisateur non trouvé. Veuillez vous connecter pour créer un ticket.";
    }
}

$conn->close();
?>
