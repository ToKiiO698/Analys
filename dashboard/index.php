<?php
include 'config.php';

// Afficher la liste des tickets
$sql = "SELECT * FROM Tickets";
$result = $conn->query($sql);

echo "<h1>Liste des Tickets</h1>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['sujet'] . "</h3>";
        echo "<p>Status: " . $row['Status'] . "</p>";
        echo "<p><a href='ticket.php?id=" . $row['id'] . "'>Voir le ticket</a></p>";
        echo "</div>";
    }
} else {
    echo "Aucun ticket trouvé.";
}

// Formulaire de création de ticket
echo "<h2>Créer un Nouveau Ticket</h2>";
echo "<form action='create_ticket.php' method='post'>";
echo "<input type='text' name='sujet' placeholder='Sujet' required><br>";
echo "<textarea name='message' placeholder='Message' required></textarea><br>";
echo "<input type='submit' value='Soumettre'>";
echo "</form>";

$conn->close();
?>
