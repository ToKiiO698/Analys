<?php
// Inclusion du fichier de connexion à la base de données
require './bdd.php';

// Vérifie si le editeur est présent dans la requête GET
if (isset($_GET['editeur'])) {
    $editeur = intval($_GET['editeur']);

    // Requête pour récupérer la facture du client
    $query = "SELECT * FROM facture WHERE editeur = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$editeur]);
    $facture = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($facture) {
        // Afficher le nom de la facture (ou l'URL si c'est un fichier)
        echo '<h2>Facture de ' . $facture['editeur'] . '</h2>';
        // Vous pouvez afficher d'autres détails de la facture ici
    } else {
        echo 'Aucune facture trouvée pour ce client.';
    }
} else {
    echo 'Paramètre client manquant.';
}
?>
