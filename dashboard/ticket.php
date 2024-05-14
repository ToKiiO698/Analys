<?php
include 'config.php';

// Vérifier si l'ID du ticket est passé dans l'URL
if (isset($_GET['id'])) {
    $ticket_id = $_GET['id'];

    // Récupérer les détails du ticket depuis la base de données
    $sql = "SELECT * FROM Tickets WHERE ticket_id = $ticket_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>" . $row['subject'] . "</h1>";
        echo "<p>Status: " . $row['status'] . "</p>";
        echo "<p>Créé le: " . $row['created_at'] . "</p>";
        echo "<p>Message: " . $row['message'] . "</p>";

        // Formulaire pour mettre à jour le statut du ticket
        echo "<form action='update_ticket.php' method='post'>";
        echo "<input type='hidden' name='ticket_id' value='$ticket_id'>";
        echo "<select name='status'>";
        echo "<option value='open' " . ($row['status'] == 'open' ? 'selected' : '') . ">Ouvert</option>";
        echo "<option value='closed' " . ($row['status'] == 'closed' ? 'selected' : '') . ">Fermé</option>";
        echo "<option value='pending' " . ($row['status'] == 'pending' ? 'selected' : '') . ">En Attente</option>";
        echo "</select>";
        echo "<input type='submit' value='Mettre à Jour'>";
        echo "</form>";
    } else {
        echo "Ticket non trouvé.";
    }
} else {
    echo "ID du ticket non spécifié.";
}

$conn->close();
?>
