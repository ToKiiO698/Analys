<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $ticket_id = $_GET['id'];

    // Supprimer le ticket de la base de données
    $sql = "DELETE FROM Tickets WHERE ticket_id = $ticket_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Ticket supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du ticket: " . $conn->error;
    }
} else {
    echo "ID du ticket non spécifié.";
}

$conn->close();
?>
