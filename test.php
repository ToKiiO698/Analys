<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téléchargement de fichiers</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Télécharger">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Le fichier " . basename($_FILES["fileToUpload"]["name"]) . " a été téléchargé.";
    } else {
        echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
    }
}
?>

</body>
</html>