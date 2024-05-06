<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Modification utilisateur - Analys</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../assets/js/config.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>

<?php
    session_start();
    if ($_SESSION['roles'] != 1) {
        header('Location: ../index.php');
    }
    ?> 

  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
              <button
                class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                title="Toggle Navigation"
              >
                <span class="navbar-toggle-icon"
                  ><span class="toggle-line"></span
                ></span>
              </button>
            </div>
            <a class="navbar-brand" href="../admin.html">
              <div class="d-flex align-items-center py-3">
                <img
                  class="me-2"
                  src="../assets/icon/analys.png"
                  alt=""
                  width="40"
                /><span class="font-sans-serif text-primary">nalys</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a
                    class="nav-link dropdown-indicator"
                    href="#dashboard"
                    role="button"
                    data-bs-toggle="collapse"
                    aria-expanded="true"
                    aria-controls="dashboard"
                  >
                    <div class="d-flex align-items-center">
                      <span class="nav-link-icon"
                        ><span class="fas fa-chart-pie"></span></span
                      ><span class="nav-link-text ps-1">Dashboard</span>
                    </div>
                  </a>
                  <ul class="nav collapse show" id="dashboard">
                    <li class="nav-item">
                      <a class="nav-link" href="../admin.php">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Acceuil</span>
                        </div> </a
                      ><!-- more inner pages-->
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../dashboard/support.php">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Support</span>
                        </div> </a
                      ><!-- more inner pages-->
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="utilisateur.php">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Utilisateurs</span>
                        </div> </a>

                        <ul class="nav collapse show navbar-vertical-content" id="dashboard">
                          <li class="nav-item">
                            <a class="nav-link" href="g-utilisateur.php">
                              <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Gestion utilisateurs</span>
                              </div> </a>
                            
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="n-utilisateur.php">
                              <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Nouveaux utilisateurs</span>
                              </div> </a>
                            
                          </li>

                          <li class="nav-item">
                            <a class="nav-link active" href="m-utilisateur.php">
                              <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Modifier utilisateur</span>
                              </div> </a>
                            
                          </li>
                        </ul>
                    </li>
                    
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <nav
            class="navbar navbar-light navbar-glass navbar-top navbar-expand"
            style="display: none"
          >
            <button
              class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarVerticalCollapse"
              aria-controls="navbarVerticalCollapse"
              aria-expanded="false"
              aria-label="Toggle Navigation"
            >
              <span class="navbar-toggle-icon"
                ><span class="toggle-line"></span
              ></span>
            </button>
            <a class="navbar-brand me-1 me-sm-3" href="admin.html">
              <div class="d-flex align-items-center">
                <img
                  class="me-2"
                  src="assets/img/icons/spot-illustrations/falcon.png"
                  alt=""
                  width="40"
                /><span class="font-sans-serif text-primary">falcon</span>
              </div>
            </a>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem("navbarPosition");
            var navbarVertical = document.querySelector(".navbar-vertical");
            var navbarTopVertical = document.querySelector(
              ".content .navbar-top"
            );
            var navbarTop = document.querySelector(
              "[data-layout] .navbar-top:not([data-double-top-nav"
            );
            var navbarDoubleTop = document.querySelector(
              "[data-double-top-nav]"
            );
            var navbarTopCombo = document.querySelector(
              '.content [data-navbar-top="combo"]'
            );

            if (localStorage.getItem("navbarPosition") === "double-top") {
              document.documentElement.classList.toggle(
                "double-top-nav-layout"
              );
            }

            if (navbarPosition === "top") {
              navbarTop.removeAttribute("style");
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
              navbarDoubleTop.remove(navbarDoubleTop);
            } else if (navbarPosition === "combo") {
              navbarVertical.removeAttribute("style");
              navbarTopCombo.removeAttribute("style");
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
              navbarDoubleTop.remove(navbarDoubleTop);
            } else if (navbarPosition === "double-top") {
              navbarDoubleTop.removeAttribute("style");
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            } else {
              navbarVertical.removeAttribute("style");
              navbarTopVertical.removeAttribute("style");
              navbarTop.remove(navbarTop);
              navbarDoubleTop.remove(navbarDoubleTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
      </div>
    </div>

    <h1 class="menu-admin text-center">Bienvenue dans la modification utilisateur !</h1>

    <form class="form-admin" method="POST" action="n-utilisateur.php">
                  <div class="mb-3 ">
                    <label for="id" class="form-label">Identifiant</label>
                    <input type="id" class="form-control" id="id" aria-describedby="id" name="id">
                  </div>

                  <div class="mb-3">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="mdp" class="form-control" id="mdp" name="mdp">
                  </div>

                  <div class="mb-3">
                  <label for="tva" class="form-label">Rôle</label>
                    <select class="form-select form-select-sm" id="role" name="role">
                      <?php
                          $db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8mb4', 'root', '');
                          $data = $db->query('SELECT * FROM roles');
                            while($row = $data->fetch()){
                              echo '<option value="'.$row['id_roles'].'">'.$row['nom_roles'].'</option>';
                            }
                          ?>
                    </select>
                  </div>
    </form>

    <footer class="footer">
      <div class="text-center">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">
            © COPYRIGHT 2022-2024
            <span class="d-none d-sm-inline-block">| </span
            ><br class="d-sm-none" />
            2024 &copy; <a href="index.html">Analys</a>
          </p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v1.0</p>
        </div>
      </div>
    </footer>
    </main>
    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/chart/chart.umd.js"></script>
    <script src="../vendors/countup/countUp.umd.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.20.0/dashboard/e-commerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2024 23:07:58 GMT -->
</html>