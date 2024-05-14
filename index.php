<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Analys</title>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/theme.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <?php
      session_start();
    ?>
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <img src="assets/icon/analys.png" alt="logo" class="logo tailleimg" />
      <h1 class="text-center">Connexion</h1>
      <div id="formContent">
        <div class="fadeIn first">
          <img
            src="assets/icon/AdobeStock_65772719.svg"
            id="icon"
            alt="User Icon"
          />
        </div>
        <form action="index.php" method="post">
          <div class="row">
            <div class="col-md-12">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label index-f">Identifiant :</label>
            <input type="mail" class="form-control" name="nom" required>
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-md-12">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label index-f">Mot de passe :</label>
            <input type="password" class="form-control" name="mdp" required></br>
          </div>
          </div>
        </div>
          <button type="submit" class="btn btn-primary index-btn">Connexion</button>
        <?php

if (isset($_POST['nom']) && isset($_POST['mdp'])) {
    $_nom = $_POST['nom'];
    $_mdp = $_POST['mdp'];

    $db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8', 'qcrxdvrj', '5nKa4$54f@a7w');

    // Préparez une requête pour sélectionner l'utilisateur en fonction de son nom
    $stmt = $db->prepare("SELECT * FROM user WHERE nom = :nom");
    $stmt->bindParam(':nom', $_nom);
    $stmt->execute();

    // Récupérez la première ligne de résultat
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifiez si l'utilisateur existe et si le mot de passe correspond
    if ($row && password_verify($_mdp, $row['mdp'])) {
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['roles'] = $row['roles'];

        // Redirection en fonction du rôle de l'utilisateur
        if ($_SESSION['roles'] == 1) {
            header('Location: admin.php');
            exit(); // Assurez-vous de terminer le script après une redirection
        } elseif ($_SESSION['roles'] == 2) {
            header('Location: commercial.php');
            exit();
        } elseif ($_SESSION['roles'] == 3) {
            header('Location: comptable.php');
            exit();
        } else {
            echo 'Erreur';
        }
    } else {
        echo 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}
?>

        </form>
        
      </div>
    </div>
  </body>
</html>
