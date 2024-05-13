<?php
// Vérifier si le paramètre editeur est présent
if (isset($_GET['editeur'])) {
    $editeur = intval($_GET['editeur']);

    // Connexion à la base de données
    $db = new mysqli('localhost', 'root', '', 'analys');

    // Requête pour récupérer la facture du client avec l'URL de l'image
    $query = "SELECT * FROM facture WHERE editeur = $editeur";
    $result = $db->query($query);

    // Affichage de l'image de la facture
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $url_image = $row['justificatif'];

        echo '<h2>Facture de ' . $row['date'] . '</h2>';
        echo '<p>Montant: ' . $row['montant'] . '</p>';
        
        // Afficher l'image de la facture
        echo '<img src="' . $justificatif . '" alt="Facture">';

        // Afficher d'autres détails de la facture selon vos besoins
    } else {
        echo 'Aucune facture trouvée pour ce client.';
    }

    $db->close();
} else {
    echo 'Paramètre client_id (editeur) manquant.';
}
?>