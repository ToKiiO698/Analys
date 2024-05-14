<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket_id = $_POST['ticket_id'];
    $new_status = $_POST['status'];

    // Mettre à jour le statut du ticket dans la base de données
    $sql = "UPDATE Tickets SET status = '$new_status' WHERE ticket_id = $ticket_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Statut du ticket mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour du statut du ticket: " . $conn->error;
    }
}

$conn->close();
?>
