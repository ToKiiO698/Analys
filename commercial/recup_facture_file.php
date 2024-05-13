<?php
// Vérifie si l'editeur est présent dans la requête GET
if (isset($_GET['editeur'])) {
    $editeur = intval($_GET['editeur']);

    // Connexion à la base de données
    require './bdd.php';

    // Requête pour récupérer le nom du fichier de la facture du client
    $query = "SELECT name FROM file WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$editeur]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $nom_facture = $result['name'];
        $path_to_file = '../assets/facture/' . $nom_facture;

        // Afficher le lecteur PDF intégré dans une nouvelle fenêtre
        echo '<iframe src="' . $path_to_file . '" width="100%" height="600px"></iframe>';
    } else {
        echo 'Fichier de facture introuvable.';
    }
} else {
    echo 'Paramètre editeur manquant.';
}
?>
