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
            <input type="password" class="form-control" name="nom" required>
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
          <button type="submit" class="btn btn-primary index-btn">Comnexion</button>
        <?php
        if (isset($_POST['nom']) && isset($_POST['mdp'])) {
            $_nom = $_POST['nom'];
            $_mdp = $_POST['mdp'];
            $db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8', 'root', '');
            $stmt = $db->prepare("SELECT * FROM user WHERE nom = :nom AND mdp = :mdp");
            $stmt->bindParam(':nom', $_nom);
            $stmt->bindParam(':mdp', $_mdp);
            $stmt->execute();
            foreach ($stmt as $row) {
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['mdp'] = $row['mdp'];
                $_SESSION['roles'] = $row['roles'];
                if ($_SESSION['nom'] == $_nom && $_SESSION['mdp'] == $_mdp) {
                    if ($_SESSION['roles'] == 1) {
                        header('Location: admin.php');
                    } elseif ($_SESSION['roles'] == 2) {
                        header('Location: commercial.php');
                    } elseif ($_SESSION['roles'] == 3) {
                        header('Location: comptable.php');
                    }
                    else {
                        echo 'Erreur';
                    }
                }
            }
        }   
        ?>
        </form>
        
      </div>
    </div>
  </body>
</html>
