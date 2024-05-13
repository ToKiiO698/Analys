<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<meta
    http-equiv="content-type"
    content="text/html;charset=utf-8"
  />
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Administrateur | Analys</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/img/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/img/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/img/favicons/favicon-16x16.png"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicons/favicon.ico"
    />
    <link rel="manifest" href="assets/img/favicons/manifest.json" />
    <meta
      name="msapplication-TileImage"
      content="assets/img/favicons/mstile-150x150.png"
    />
    <meta name="theme-color" content="#ffffff" />
    <script src="assets/js/config.js"></script>
    <script src="vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
      rel="stylesheet"
    />
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet" />
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl" />
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default" />
    <link
      href="assets/css/user-rtl.min.css"
      rel="stylesheet"
      id="user-style-rtl"
    />
    <link
      href="assets/css/user.min.css"
      rel="stylesheet"
      id="user-style-default"
    />
    <script>
      var isRTL = JSON.parse(localStorage.getItem("isRTL"));
      if (isRTL) {
        var linkDefault = document.getElementById("style-default");
        var userLinkDefault = document.getElementById("user-style-default");
        linkDefault.setAttribute("disabled", true);
        userLinkDefault.setAttribute("disabled", true);
        document.querySelector("html").setAttribute("dir", "rtl");
      } else {
        var linkRTL = document.getElementById("style-rtl");
        var userLinkRTL = document.getElementById("user-style-rtl");
        linkRTL.setAttribute("disabled", true);
        userLinkRTL.setAttribute("disabled", true);
      }
    </script>

<?php
    session_start();
    if ($_SESSION['roles'] != 1) {
        header('Location: index.php');
    }
    ?>
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem("isFluid"));
          if (isFluid) {
            var container = document.querySelector("[data-layout]");
            container.classList.remove("container");
            container.classList.add("container-fluid");
          }
        </script>
        <nav
          class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg"
          data-double-top-nav="data-double-top-nav"
          style="display: none"
        >
          <div class="w-100">
            <div class="d-flex flex-between-center">
              <button
                class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarDoubleTop"
                aria-controls="navbarDoubleTop"
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
              <ul class="navbar-nav align-items-center d-none d-lg-block">
                <li class="nav-item">
                  <div class="search-box" data-list='{"valueNames":["title"]}'>
                    <form
                      class="position-relative"
                      data-bs-toggle="search"
                      data-bs-display="static"
                    >
                      <input
                        class="form-control search-input fuzzy-search"
                        type="search"
                        placeholder="Search..."
                        aria-label="Search"
                      />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                    <div
                      class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                      data-bs-dismiss="search"
                    >
                      <button
                        class="btn btn-link btn-close-falcon p-0"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div
                      class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100"
                    >
                      <div
                        class="scrollbar list py-3"
                        style="max-height: 24rem"
                      >
                        <h6
                          class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2"
                        >
                          Recently Browsed
                        </h6>
                        <a
                          class="dropdown-item fs-10 px-x1 py-1 hover-primary"
                          href="app/events/event-detail.html"
                        >
                          <div class="d-flex align-items-center">
                            <span
                              class="fas fa-circle me-2 text-300 fs-11"
                            ></span>
                            <div class="fw-normal title">
                              Pages
                              <span
                                class="fas fa-chevron-right mx-1 text-500 fs-11"
                                data-fa-transform="shrink-2"
                              ></span>
                              Events
                            </div>
                          </div>
                        </a>
                        <a
                          class="dropdown-item fs-10 px-x1 py-1 hover-primary"
                          href="app/e-commerce/customers.html"
                        >
                          <div class="d-flex align-items-center">
                            <span
                              class="fas fa-circle me-2 text-300 fs-11"
                            ></span>
                            <div class="fw-normal title">
                              E-commerce
                              <span
                                class="fas fa-chevron-right mx-1 text-500 fs-11"
                                data-fa-transform="shrink-2"
                              ></span>
                              Customers
                            </div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6
                          class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2"
                        >
                          Suggested Filter
                        </h6>
                        <a
                          class="dropdown-item px-x1 py-1 fs-9"
                          href="app/e-commerce/customers.html"
                        >
                          <div class="d-flex align-items-center">
                            <span
                              class="badge fw-medium text-decoration-none me-2 badge-subtle-warning"
                              >customers:</span
                            >
                            <div class="flex-1 fs-10 title">
                              All customers list
                            </div>
                          </div>
                        </a>
                        <a
                          class="dropdown-item px-x1 py-1 fs-9"
                          href="app/events/event-detail.html"
                        >
                          <div class="d-flex align-items-center">
                            <span
                              class="badge fw-medium text-decoration-none me-2 badge-subtle-success"
                              >events:</span
                            >
                            <div class="flex-1 fs-10 title">
                              Latest events in current month
                            </div>
                          </div>
                        </a>
                        <a
                          class="dropdown-item px-x1 py-1 fs-9"
                          href="app/e-commerce/product/product-grid.html"
                        >
                          <div class="d-flex align-items-center">
                            <span
                              class="badge fw-medium text-decoration-none me-2 badge-subtle-info"
                              >products:</span
                            >
                            <div class="flex-1 fs-10 title">
                              Most popular products
                            </div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6
                          class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2"
                        >
                          Files
                        </h6>
                        <a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2">
                              <img
                                class="border h-100 w-100 object-fit-cover rounded-3"
                                src="assets/img/products/3-thumb.png"
                                alt=""
                              />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">iPhone</h6>
                              <p class="fs-11 mb-0 d-flex">
                                <span class="fw-semi-bold">Antony</span
                                ><span class="fw-medium text-600 ms-2"
                                  >27 Sep at 10:30 AM</span
                                >
                              </p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2">
                              <img
                                class="img-fluid"
                                src="assets/img/icons/zip.png"
                                alt=""
                              />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Falcon v1.8.2</h6>
                              <p class="fs-11 mb-0 d-flex">
                                <span class="fw-semi-bold">John</span
                                ><span class="fw-medium text-600 ms-2"
                                  >30 Sep at 12:30 PM</span
                                >
                              </p>
                            </div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6
                          class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2"
                        >
                          Members
                        </h6>
                        <a
                          class="dropdown-item px-x1 py-2"
                          href="pages/user/profile.html"
                        >
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l status-online me-2">
                              <img
                                class="rounded-circle"
                                src="assets/img/team/1.jpg"
                                alt=""
                              />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Anna Karinina</h6>
                              <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                            </div>
                          </div>
                        </a>
                        <a
                          class="dropdown-item px-x1 py-2"
                          href="pages/user/profile.html"
                        >
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img
                                class="rounded-circle"
                                src="assets/img/team/2.jpg"
                                alt=""
                              />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Antony Hopkins</h6>
                              <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                            </div>
                          </div>
                        </a>
                        <a
                          class="dropdown-item px-x1 py-2"
                          href="pages/user/profile.html"
                        >
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img
                                class="rounded-circle"
                                src="assets/img/team/3.jpg"
                                alt=""
                              />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Emma Watson</h6>
                              <p class="fs-11 mb-0 d-flex">Google</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="text-center mt-n3">
                        <p class="fallback fw-bold fs-8 d-none">
                          No Result Found.
                        </p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <ul
                class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center"
              >
                <li class="nav-item ps-2 pe-0">
                  <div class="dropdown theme-control-dropdown">
                    <a
                      class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                      href="#"
                      role="button"
                      id="themeSwitchDropdown"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                      ><span
                        class="fas fa-sun fs-7"
                        data-fa-transform="shrink-2"
                        data-theme-dropdown-toggle-icon="light"
                      ></span
                      ><span
                        class="fas fa-moon fs-7"
                        data-fa-transform="shrink-3"
                        data-theme-dropdown-toggle-icon="dark"
                      ></span
                      ><span
                        class="fas fa-adjust fs-7"
                        data-fa-transform="shrink-2"
                        data-theme-dropdown-toggle-icon="auto"
                      ></span
                    ></a>
                    <div
                      class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                      aria-labelledby="themeSwitchDropdown"
                    >
                      <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <button
                          class="dropdown-item d-flex align-items-center gap-2"
                          type="button"
                          value="light"
                          data-theme-control="theme"
                        >
                          <span class="fas fa-sun"></span>Light<span
                            class="fas fa-check dropdown-check-icon ms-auto text-600"
                          ></span></button
                        ><button
                          class="dropdown-item d-flex align-items-center gap-2"
                          type="button"
                          value="dark"
                          data-theme-control="theme"
                        >
                          <span class="fas fa-moon" data-fa-transform=""></span
                          >Dark<span
                            class="fas fa-check dropdown-check-icon ms-auto text-600"
                          ></span></button
                        ><button
                          class="dropdown-item d-flex align-items-center gap-2"
                          type="button"
                          value="auto"
                          data-theme-control="theme"
                        >
                          <span
                            class="fas fa-adjust"
                            data-fa-transform=""
                          ></span
                          >Auto<span
                            class="fas fa-check dropdown-check-icon ms-auto text-600"
                          ></span>
                        </button>
                      </div>
                    </div>
                  </div>
                </li>
                
                  </a>
                  <div
                    class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                    aria-labelledby="navbarDropdownNotification"
                  >
                 
                  </div>
                </li>
               
                
              </ul>
            </div>
            <hr class="my-2 d-none d-lg-block" />
            
          </div>
        </nav>
        <nav
          class="navbar navbar-light navbar-vertical navbar-expand-xl"
          style="display: none"
        >
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== "transparent") {
              document
                .querySelector(".navbar-vertical")
                .classList.add(`navbar-${navbarStyle}`);
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
            <a class="navbar-brand" href="admin.php">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="assets/icon/analys.png" alt="" width="40" /><span class="font-sans-serif text-primary">nalys</span></div>
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
                      <a class="nav-link active" href="admin.php">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Acceuil</span>
                        </div> </a>
                     
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="dashboard/support.php">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Support</span>
                        </div> </a>
                      
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="administration/utilisateur.php">
                        <div class="d-flex align-items-center">
                          <span class="nav-link-text ps-1">Utilisateurs</span>
                        </div> </a>

                        <ul class="nav collapse show navbar-vertical-content" id="dashboard">
                          <li class="nav-item">
                            <a class="nav-link" href="administration/g-utilisateur.php">
                              <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Gestion utilisateurs</span>
                              </div> </a>
                            
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="administration/n-utilisateur.php">
                              <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1">Nouveaux utilisateurs</span>
                              </div> </a>
                            
                          </li>

                       
                        </ul>
                        <li class="nav-item">
                        <button type="submit" name="logout12"><div class="d-flex align-items-center">
                        <span class="nav-link-text ps-1">Déconnexion</span>
                        </div> </button>
                    <?php
                      

                      if (isset($_POST['logout12'])) {
                          
                          // Détruire la session
                          session_destroy();

                          // Rediriger vers la page de connexion ou d'accueil
                          header("Location: index.php");
                          exit;
                      }
                    ?>
                    </li>
                  </ul>
                </li>
              </ul>

              
                    
                      
            </div>
          </div>
        </nav>
        <nav
          class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg"
          style="display: none"
        >
          <button
            class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarStandard"
            aria-controls="navbarStandard"
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
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul
              class="navbar-nav"
              data-top-nav-dropdowns="data-top-nav-dropdowns"
            >
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  id="dashboards"
                  >Dashboard</a
                >
                <div
                  class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                  aria-labelledby="dashboards"
                >
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a
                      class="dropdown-item link-600 fw-medium"
                      href="admin.html"
                      >Default</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/analytics.html"
                      >Analytics</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/crm.html"
                      >CRM</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/e-commerce.html"
                      >E commerce</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/lms.html"
                      >LMS<span
                        class="badge rounded-pill ms-2 badge-subtle-success"
                        >New</span
                      ></a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/project-management.html"
                      >Management</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/saas.html"
                      >SaaS</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="dashboard/support-desk.html"
                      >Support desk<span
                        class="badge rounded-pill ms-2 badge-subtle-success"
                        >New</span
                      ></a
                    >
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  id="apps"
                  >App</a
                >
                <div
                  class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                  aria-labelledby="apps"
                >
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown">
                      <img
                        class="img-dropdown"
                        src="assets/img/icons/spot-illustrations/authentication-corner.png"
                        width="130"
                        alt=""
                      />
                      <div class="row">
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/calendar.html"
                              >Calendar</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/chat.html"
                              >Chat</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/kanban.html"
                              >Kanban</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/social/feed.html"
                              >Feed</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/social/activity-log.html"
                              >Activity log</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/social/notifications.html"
                              >Notifications</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/social/followers.html"
                              >Followers</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Support Desk
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/support-desk/table-view.html"
                              >Table view</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/support-desk/card-view.html"
                              >Card view</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/support-desk/contacts.html"
                              >Contacts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/support-desk/contact-details.html"
                              >Contact details</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/support-desk/tickets-preview.html"
                              >Tickets preview</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/support-desk/quick-links.html"
                              >Quick links</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              E-Learning
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-learning/course/course-list.html"
                              >Course list</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-learning/course/course-grid.html"
                              >Course grid</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-learning/course/course-details.html"
                              >Course details</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-learning/course/create-a-course.html"
                              >Create a course</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-learning/student-overview.html"
                              >Student overview</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-learning/trainer-profile.html"
                              >Trainer profile</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/events/create-an-event.html"
                              >Create an event</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/events/event-detail.html"
                              >Event detail</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/events/event-list.html"
                              >Event list</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/email/inbox.html"
                              >Inbox</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/email/email-detail.html"
                              >Email detail</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/email/compose.html"
                              >Compose</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              E-Commerce
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/product/product-list.html"
                              >Product list</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/product/product-grid.html"
                              >Product grid</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/product/product-details.html"
                              >Product details</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/product/add-product.html"
                              >Add product</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/orders/order-list.html"
                              >Order list</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/orders/order-details.html"
                              >Order details</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/customers.html"
                              >Customers</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/customer-details.html"
                              >Customer details</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/shopping-cart.html"
                              >Shopping cart</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/checkout.html"
                              >Checkout</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/billing.html"
                              >Billing</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="app/e-commerce/invoice.html"
                              >Invoice</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  id="pagess"
                  >Pages</a
                >
                <div
                  class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                  aria-labelledby="pagess"
                >
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown">
                      <img
                        class="img-dropdown"
                        src="assets/img/icons/spot-illustrations/authentication-corner.png"
                        width="130"
                        alt=""
                      />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Simple Auth
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/login.html"
                              >Login</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/logout.html"
                              >Logout</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/register.html"
                              >Register</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/forgot-password.html"
                              >Forgot password</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/confirm-mail.html"
                              >Confirm mail</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/reset-password.html"
                              >Reset password</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/simple/lock-screen.html"
                              >Lock screen</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Card Auth
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/login.html"
                              >Login</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/logout.html"
                              >Logout</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/register.html"
                              >Register</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/forgot-password.html"
                              >Forgot password</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/confirm-mail.html"
                              >Confirm mail</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/reset-password.html"
                              >Reset password</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/card/lock-screen.html"
                              >Lock screen</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Split Auth
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/login.html"
                              >Login</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/logout.html"
                              >Logout</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/register.html"
                              >Register</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/forgot-password.html"
                              >Forgot password</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/confirm-mail.html"
                              >Confirm mail</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/reset-password.html"
                              >Reset password</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/split/lock-screen.html"
                              >Lock screen</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Layouts
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="demo/navbar-vertical.html"
                              >Navbar vertical</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="demo/navbar-top.html"
                              >Top nav</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="demo/navbar-double-top.html"
                              >Double top<span
                                class="badge rounded-pill ms-2 badge-subtle-success"
                                >New</span
                              ></a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="demo/combo-nav.html"
                              >Combo nav</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/starter.html"
                              >Starter</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/landing.html"
                              >Landing</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/user/profile.html"
                              >Profile</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/user/settings.html"
                              >Settings</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Pricing
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/pricing/pricing-default.html"
                              >Pricing default</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/pricing/pricing-alt.html"
                              >Pricing alt</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/errors/404.html"
                              >404</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/errors/500.html"
                              >500</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Miscellaneous
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/miscellaneous/associations.html"
                              >Associations</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/miscellaneous/invite-people.html"
                              >Invite people</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/miscellaneous/privacy-policy.html"
                              >Privacy policy</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">FAQ</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/faq/faq-basic.html"
                              >Faq basic</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/faq/faq-alt.html"
                              >Faq alt</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/faq/faq-accordion.html"
                              >Faq accordion</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Other Auth
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="pages/authentication/wizard.html"
                              >Wizard</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="#authentication-modal"
                              data-bs-toggle="modal"
                              >Modal</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  id="moduless"
                  >Modules</a
                >
                <div
                  class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                  aria-labelledby="moduless"
                >
                  <div
                    class="card navbar-card-components shadow-none dark__bg-1000"
                  >
                    <div class="card-body scrollbar max-h-dropdown">
                      <img
                        class="img-dropdown"
                        src="assets/img/icons/spot-illustrations/authentication-corner.png"
                        width="130"
                        alt=""
                      />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Components
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/accordion.html"
                              >Accordion</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/alerts.html"
                              >Alerts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/anchor.html"
                              >Anchor</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/animated-icons.html"
                              >Animated icons</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/background.html"
                              >Background</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/badges.html"
                              >Badges</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/bottom-bar.html"
                              >Bottom bar<span
                                class="badge rounded-pill ms-2 badge-subtle-success"
                                >New</span
                              ></a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/breadcrumbs.html"
                              >Breadcrumbs</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/buttons.html"
                              >Buttons</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/calendar.html"
                              >Calendar</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/cards.html"
                              >Cards</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/carousel/bootstrap.html"
                              >Bootstrap carousel</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1">
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/carousel/swiper.html"
                              >Swiper</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/collapse.html"
                              >Collapse</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/cookie-notice.html"
                              >Cookie notice</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/countup.html"
                              >Countup</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/dropdowns.html"
                              >Dropdowns</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/jquery-components.html"
                              >Jquery<span
                                class="badge rounded-pill ms-2 badge-subtle-success"
                                >New</span
                              ></a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/list-group.html"
                              >List group</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/modals.html"
                              >Modals</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/navs.html"
                              >Navs</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/navbar.html"
                              >Navbar</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/vertical-navbar.html"
                              >Navbar vertical</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/top-navbar.html"
                              >Top nav</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1">
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/double-top-navbar.html"
                              >Double top<span
                                class="badge rounded-pill ms-2 badge-subtle-success"
                                >New</span
                              ></a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/combo-navbar.html"
                              >Combo nav</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/navs-and-tabs/tabs.html"
                              >Tabs</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/offcanvas.html"
                              >Offcanvas</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/pictures/avatar.html"
                              >Avatar</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/pictures/images.html"
                              >Images</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/pictures/figures.html"
                              >Figures</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/pictures/hoverbox.html"
                              >Hoverbox</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/pictures/lightbox.html"
                              >Lightbox</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/progress-bar.html"
                              >Progress bar</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/placeholder.html"
                              >Placeholder</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/pagination.html"
                              >Pagination</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1">
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/popovers.html"
                              >Popovers</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/scrollspy.html"
                              >Scrollspy</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/search.html"
                              >Search</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/sortable.html"
                              >Sortable</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/spinners.html"
                              >Spinners</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/timeline.html"
                              >Timeline</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/toasts.html"
                              >Toasts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/tooltips.html"
                              >Tooltips</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/treeview.html"
                              >Treeview</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/typed-text.html"
                              >Typed text</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/videos/embed.html"
                              >Embed</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/components/videos/plyr.html"
                              >Plyr</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">
                              Utilities
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/background.html"
                              >Background</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/borders.html"
                              >Borders</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/clearfix.html"
                              >Clearfix</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/colors.html"
                              >Colors</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/colored-links.html"
                              >Colored links</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/display.html"
                              >Display</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/flex.html"
                              >Flex</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/float.html"
                              >Float</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/focus-ring.html"
                              >Focus ring</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/grid.html"
                              >Grid</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/icon-link.html"
                              >Icon link</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/overlayscrollbar.html"
                              >Overlay scrollbar</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/position.html"
                              >Position</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/ratio.html"
                              >Ratio</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/spacing.html"
                              >Spacing</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/sizing.html"
                              >Sizing</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/stretched-link.html"
                              >Stretched link</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/text-truncation.html"
                              >Text truncation</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/typography.html"
                              >Typography</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/vertical-align.html"
                              >Vertical align</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/vertical-rule.html"
                              >Vertical rule</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/utilities/visibility.html"
                              >Visibility</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/tables/basic-tables.html"
                              >Basic tables</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/tables/advance-tables.html"
                              >Advance tables</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/tables/bulk-select.html"
                              >Bulk select</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/chartjs.html"
                              >Chartjs</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/d3js.html"
                              >D3js<span
                                class="badge rounded-pill ms-2 badge-subtle-success"
                                >New</span
                              ></a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">
                              ECharts
                            </p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/line-charts.html"
                              >Line charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/bar-charts.html"
                              >Bar charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/candlestick-charts.html"
                              >Candlestick charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/geo-map.html"
                              >Geo map</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/scatter-charts.html"
                              >Scatter charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/pie-charts.html"
                              >Pie charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/gauge-charts.html"
                              >Gauge charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/radar-charts.html"
                              >Radar charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/heatmap-charts.html"
                              >Heatmap charts</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/charts/echarts/how-to-use.html"
                              >How to use</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/basic/form-control.html"
                              >Form control</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/basic/input-group.html"
                              >Input group</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/basic/select.html"
                              >Select</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/basic/checks.html"
                              >Checks</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/basic/range.html"
                              >Range</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/basic/layout.html"
                              >Layout</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/advance-select.html"
                              >Advance select</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/date-picker.html"
                              >Date picker</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/editor.html"
                              >Editor</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/emoji-button.html"
                              >Emoji button</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/file-uploader.html"
                              >File uploader</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/input-mask.html"
                              >Input mask</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/range-slider.html"
                              >Range slider</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/advance/rating.html"
                              >Rating</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/floating-labels.html"
                              >Floating labels</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/wizard.html"
                              >Wizard</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/forms/validation.html"
                              >Validation</a
                            >
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/icons/font-awesome.html"
                              >Font awesome</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/icons/bootstrap-icons.html"
                              >Bootstrap icons</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/icons/feather.html"
                              >Feather</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/icons/material-icons.html"
                              >Material icons</a
                            >
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p>
                            <a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/maps/google-map.html"
                              >Google map</a
                            ><a
                              class="nav-link py-1 link-600 fw-medium"
                              href="modules/maps/leaflet-map.html"
                              >Leaflet map</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  id="documentations"
                  >Documentation</a
                >
                <div
                  class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                  aria-labelledby="documentations"
                >
                  <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/getting-started.html"
                      >Getting started</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/customization/configuration.html"
                      >Configuration</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/customization/styling.html"
                      >Styling<span
                        class="badge rounded-pill ms-2 badge-subtle-success"
                        >Updated</span
                      ></a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/customization/dark-mode.html"
                      >Dark mode</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/customization/plugin.html"
                      >Plugin</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/faq.html"
                      >Faq</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/gulp.html"
                      >Gulp</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="documentation/design-file.html"
                      >Design file</a
                    ><a
                      class="dropdown-item link-600 fw-medium"
                      href="changelog.html"
                      >Changelog</a
                    >
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <ul
            class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center"
          >
            <li class="nav-item ps-2 pe-0">
              <div class="dropdown theme-control-dropdown">
                <a
                  class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                  href="#"
                  role="button"
                  id="themeSwitchDropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><span
                    class="fas fa-sun fs-7"
                    data-fa-transform="shrink-2"
                    data-theme-dropdown-toggle-icon="light"
                  ></span
                  ><span
                    class="fas fa-moon fs-7"
                    data-fa-transform="shrink-3"
                    data-theme-dropdown-toggle-icon="dark"
                  ></span
                  ><span
                    class="fas fa-adjust fs-7"
                    data-fa-transform="shrink-2"
                    data-theme-dropdown-toggle-icon="auto"
                  ></span
                ></a>
                <div
                  class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                  aria-labelledby="themeSwitchDropdown"
                >
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <button
                      class="dropdown-item d-flex align-items-center gap-2"
                      type="button"
                      value="light"
                      data-theme-control="theme"
                    >
                      <span class="fas fa-sun"></span>Light<span
                        class="fas fa-check dropdown-check-icon ms-auto text-600"
                      ></span></button
                    ><button
                      class="dropdown-item d-flex align-items-center gap-2"
                      type="button"
                      value="dark"
                      data-theme-control="theme"
                    >
                      <span class="fas fa-moon" data-fa-transform=""></span
                      >Dark<span
                        class="fas fa-check dropdown-check-icon ms-auto text-600"
                      ></span></button
                    ><button
                      class="dropdown-item d-flex align-items-center gap-2"
                      type="button"
                      value="auto"
                      data-theme-control="theme"
                    >
                      <span class="fas fa-adjust" data-fa-transform=""></span
                      >Auto<span
                        class="fas fa-check dropdown-check-icon ms-auto text-600"
                      ></span>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item d-none d-sm-block">
              <a
                class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                href="app/e-commerce/shopping-cart.html"
                ><span
                  class="fas fa-shopping-cart"
                  data-fa-transform="shrink-7"
                  style="font-size: 33px"
                ></span
                ><span class="notification-indicator-number">1</span></a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                data-hide-on-body-scroll="data-hide-on-body-scroll"
                ><span
                  class="fas fa-bell"
                  data-fa-transform="shrink-6"
                  style="font-size: 33px"
                ></span
              ></a>
              <div
                class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                aria-labelledby="navbarDropdownNotification"
              >
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3">
                        <a class="card-link fw-normal" href="#"
                          >Mark all as read</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height: 19rem">
                    <div class="list-group list-group-flush fw-normal fs-10">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a
                          class="notification notification-flush notification-unread"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img
                                class="rounded-circle"
                                src="assets/img/team/1-thumb.png"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>Emma Watson</strong> replied to your
                              comment : "Hello world 😍"
                            </p>
                            <span class="notification-time"
                              ><span class="me-2" role="img" aria-label="Emoji"
                                >💬</span
                              >Just now</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a
                          class="notification notification-flush notification-unread"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle">
                                <span>AB</span>
                              </div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>Albert Brooks</strong> reacted to
                              <strong>Mia Khalifa's</strong> status
                            </p>
                            <span class="notification-time"
                              ><span
                                class="me-2 fab fa-gratipay text-danger"
                              ></span
                              >9hr</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img
                                class="rounded-circle"
                                src="assets/img/icons/weather-sm.jpg"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              The forecast today shows a low of 20&#8451; in
                              California. See today's weather.
                            </p>
                            <span class="notification-time"
                              ><span class="me-2" role="img" aria-label="Emoji"
                                >🌤️</span
                              >1d</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a
                          class="border-bottom-0 notification-unread notification notification-flush"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img
                                class="rounded-circle"
                                src="assets/img/logos/oxford.png"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>University of Oxford</strong> created an
                              event : "Causal Inference Hilary 2019"
                            </p>
                            <span class="notification-time"
                              ><span class="me-2" role="img" aria-label="Emoji"
                                >✌️</span
                              >1w</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a
                          class="border-bottom-0 notification notification-flush"
                          href="#!"
                        >
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img
                                class="rounded-circle"
                                src="assets/img/team/10.jpg"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">
                              <strong>James Cameron</strong> invited to join the
                              group: United Nations International Children's
                              Fund
                            </p>
                            <span class="notification-time"
                              ><span class="me-2" role="img" aria-label="Emoji"
                                >🙋‍</span
                              >2d</span
                            >
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top">
                    <a
                      class="card-link d-block"
                      href="app/social/notifications.html"
                      >View all</a
                    >
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown px-1">
              <a
                class="nav-link fa-icon-wait nine-dots p-1"
                id="navbarDropdownMenu"
                role="button"
                data-hide-on-body-scroll="data-hide-on-body-scroll"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="43"
                  viewBox="0 0 16 16"
                  fill="none"
                >
                  <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg>
                ></a
              >
              <div
                class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                aria-labelledby="navbarDropdownMenu"
              >
                <div class="card shadow-none">
                  <div class="scrollbar-overlay nine-dots-dropdown">
                    <div class="card-body px-3">
                      <div class="row text-center gx-0 gy-0">
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="pages/user/profile.html"
                            target="_blank"
                          >
                            <div class="avatar avatar-2xl">
                              <img
                                class="rounded-circle"
                                src="assets/img/team/3.jpg"
                                alt=""
                              />
                            </div>
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11"
                            >
                              Account
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="https://themewagon.com/"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/themewagon.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Themewagon
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="https://mailbluster.com/"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/mailbluster.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Mailbluster
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/google.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Google
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/spotify.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Spotify
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/steam.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Steam
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/github-light.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Github
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/discord.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Discord
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/xbox.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              xbox
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/trello.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Kanban
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/hp.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Hp
                            </p>
                          </a>
                        </div>
                        <div class="col-12">
                          <hr class="my-3 mx-n3 bg-200" />
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/linkedin.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Linkedin
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/twitter.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Twitter
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/facebook.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Facebook
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/instagram.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Instagram
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/pinterest.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Pinterest
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/slack.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Slack
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="#!"
                            target="_blank"
                            ><img
                              class="rounded"
                              src="assets/img/nav-icons/deviantart.png"
                              alt=""
                              width="40"
                              height="40"
                            />
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1"
                            >
                              Deviantart
                            </p>
                          </a>
                        </div>
                        <div class="col-4">
                          <a
                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                            href="app/events/event-detail.html"
                            target="_blank"
                          >
                            <div class="avatar avatar-2xl">
                              <div
                                class="avatar-name rounded-circle bg-primary-subtle text-primary"
                              >
                                <span class="fs-7">E</span>
                              </div>
                            </div>
                            <p
                              class="mb-0 fw-medium text-800 text-truncate fs-11"
                            >
                              Events
                            </p>
                          </a>
                        </div>
                        <div class="col-12">
                          <a
                            class="btn btn-outline-primary btn-sm mt-4"
                            href="#!"
                            >Show more</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link pe-0 ps-2"
                id="navbarDropdownUser"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <div class="avatar avatar-xl">
                  <img
                    class="rounded-circle"
                    src="assets/img/team/3-thumb.png"
                    alt=""
                  />
                </div>
              </a>
              <div
                class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                aria-labelledby="navbarDropdownUser"
              >
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"
                    ><span class="fas fa-crown me-1"></span
                    ><span>Go Pro</span></a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="pages/user/profile.html"
                    >Profile &amp; account</a
                  >
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages/user/settings.html"
                    >Settings</a
                  >
                  <a
                    class="dropdown-item"
                    href="pages/authentication/card/logout.html"
                    >Logout</a
                  >
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content"> 
          <!-- ===============================================--><!--    Header--><!-- ===============================================-->
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
            <h1 class="menu-admin text-center">Bienvenue dans le menu Administrateur !</h1>
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
          <!-- ===============================================--><!--    Main ADMIN--><!-- ===============================================-->
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2 mb-6 ">
              <div class="card h-lg-100 overflow-hidden facture-compta-comm">
                

                <div class="card mb-3">
          <div class="card-body px-xxl-0 pt-4">
            <div class="row g-0">
            <div
                class="col-xxl-4 col-md-6 px-4 text-center border-end-md border-bottom border-bottom-xxl-0 pb-4 p-xxl-0 ps-md-0"
              >
              <div class="icon-circle icon-circle-success">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE4AAABOCAYAAACOqiAdAAAACXBIWXMAAAsTAAALEwEAmpwYAAAJNklEQVR4nO1bB5Ac1RFtskkCLJtsZIINmJwRVZRNLqJVhWWSjYkiIwuku+meg6HI0ZTLIKAoomzAZ5cEiGgwAhtE0Olu/p+VgEMgsJCAQxICEYQQnKv7/53d293ZnR0d2tm7eVVbgpuwf9/v37/7dX+ADBkyZMiQIUOGDBkyZGgezHSGQq+3cqOH0Vzw6WTQtAwUPQ85b51GD6c5oOk0UPgtaOqVj8KXoNsb0uhhpRuKxglpChdb0uy/9BpMH7dpo4eXPuS81UHR3ZaktyBwDrUWdwsovMz+91wInL0aPdT0wHd+LhZlSHsOtLMB+O6W1uL+Ivdo51TQtBQ0fQkKz4NeWAkGLXq9lUHRuaDxC1D0HWi8VSyPUUocI8ADQOE8a31PQhdtBoMOXbQ3KJpqSegB5RzT53ol4uQ5b33Q9KB5jgnHy2DqmDVhwEM7w0HRJLEw2TnxTujEH5fdx38zO+tVFd/j4/GgaY5d3u+BxgvAv3htGFDo9oaAcv4Ail4sCjGmgHb2qPocX3993LqR15kohZeDwk8tgfNB47Xg447QtMg524DCM0Fjuzh0QxaHGRPBd/bp1+8yyxdB0QeFiSElpLJfnO39AFILn44GTX8CRf8qcuCFHxE4Y2M7c9WyOSgcI8tU42+hfeQqsZ7rGLUaBM5R1geayTIT9hVo6gBF90ucyLt2KsDLSYWR/jJQOBMUTZAMYIY7rK53aTpfnH4x8Ro1aNyurvfwhqHdg0HRNaDxBdD4SdE7L4FUoMP7kZ3ZiYmXRYe3liXbOHuFvwHVthMovMEscfoMfDp2ucbJRJpxXg2pIk7TvYmez7VuAQqnWdKeB40b9bmu6HBQuMDuxH+WJZkEGnceOMRp5wjQtDAkZYq3ajS5NrvgpZcbu/HgJK4XVgJNreEy5KVZC+wGFN5lyXsfFO07uIjr5riOJlkC3oCuth3q+j5No0Dh16BoCSgcPTiIy9GuoOltS9rD0NG6XqLv1LQnKHzX+sUJsrkMWOK0e5INNZbJMi1WODjh1+RB0LpL2XO8jAM8vWJapulZS0aX5LcDirgp3qqSChkr+1jCglLkvB/K0uN4q1hz03S23TimVX233EPzwafDBgZxXbRZQQXBlyUriIIJOzjKXyRpmaIzbJr2PwjcrauOIXCPs2ox1yncinpd0xDX7Q0R52+ujQ+1tlqpmzh+XGyt6D3QzlaxxsGbjKY37SRd2rzE+VKpqj/FyVteHEsrG0vrepLysdWWBspNQ5zGs+TvgfP7ut/JhCVJxnmJGvlqaZk40DTE5cZuLFoZf/zW3VbIWDi3jfK3TUNcftlJkQU/gs62n0EeQdv2oOkKs9sm/dCFffymwhbr36ZXrMOmjjgOJbQEovdXvK7wRCs7zZbaKPseJrKPdJT4c1WhiC0Fn27wvQ0rjoNjxOJnGg6OpZQM+uHIe9g6zKADkYsKIuM0UYt554z7EdEUv7GTNRk0jrBB9Vzoav1p9Bic4fYZF1IDxTEUvlDjnsvtwF8PpXSztJzY3yN1BppRJJzOtrHfwpq1hlCPoz9CaqBpjkjkte8bX2RtD0nVnq1H4f7xvgfvs2RfWaQQfwGBu1/NZ3l3l/vdkyA10PiqpEu1KuymCP13+4PvkN1WYjb6zDr81siPLEtb7Rc/KcQtlQ0o3hgvNeFRDJJXGBTdbgdVO2AN3J+ExDE0HWly2DibAT4j8Z0RBZjEx+sY4zWSlXDfXWqguBQoy2Bk7XtbNu9DXF6kZEsQPxTx4R6TPArETY49RvmOtu0hVVC0u/0hNyYirl4kIS6V6GXfxfVUfKemn+N80hD3wHIWoXn5/q3idS74sCSl8QkZk9l5udNpFmh6RPQ9jj9TAY23mh9To7VB7qXPRW5KCqMkl1u4yPJ4dVFtNl/nfc5U0OjNMJQx6WBbLPX4e0Xg/soO9rqa9yp6Wn4Up2tJwC0PxmpHhH9jHxjKSvLvaRU3ArZGbi8TyUru7ZQqWsPQPnIVU0ym+TUbnvPKSZKqevcFa9jAd3HYoZTDX5gyo1TN3Fi1V94sNF5vrW9e3V0H/QrNLQyyhMbFKPW9azOO+tobpKdESPfk/9mqjO9alqjaL0qziKZ+41rFZgsh80DRhzUb/jh+Mz1y3TULLYVnRpm8mILwRyq8zS7bixOPO6yJ0BXQMCjpNIon32j3IktEj6REUQdCjLZnitE8MflAWwQCka2mL1dfsDRvi9V+nqhLoF8whStP1GkUjBg7LHdXSsolVvMOaLxZfKByT7DETiq0beHLfdrF8h3prJgkiwXHi2JcaNBmq7sQGobA2ctKPZ2xHDVraEwYL/HSNMv4n9ckOS+1SPZLXF+IUwgqBR8FMBb8WFFsyJ3tz0JDofM7Ft0e+xkmRhJ/5xijZuAhMJM2idzFZXLwqbrHJn1zMjGv9GmXNV1TPdBQdIjS+287q2P6/f1MqHn3XRWC4NFiQZXA+p+ZUL+sIMRiLFt4EgvuV8x0hsqumSRU4DbWau2vpSpLHr57oLWm/5Q1Ovp4TiFALunDk++kf8j1hmcTDNW2re0I/wYUnQL1WdMNVS3ahDOPRvovzkvzZUKNv7Pp1pxIid10HSyE1CCQqtYc2wfSUvP+qAMipTCdT3PLQhHJYnBi6GMV/drWKXoiA24Tg3JA/iqkCjPcYUUtCu2RPqge4riL0wgLw8uu8XLj8KWQ7C+QEmH1zvkUNVeXhx1mw2BrieqqjE0c7Wsnony5hjVffMPktVXOV5gOgKl2l64vBVzB2l2LyNhm+VxX5oyrEafwIKnh5s+vMmnVgmB+d6VjT8UIg1+8B1IP7ewBGnNhxlBcdKlEnJzvkkMeHBAvCcuBRk5aZPS1tp3qHgdL9qZg9GHzHCbukJ1xtOSIeSmcpfVi4ngZmc6nHkvyf0VGKm+14ExlkXSyx4UcppNjn0vSVf2KC07a+TiT8X2LQumIq1hGuWUSF4g4GZXM83EksTrpKvhnxbZYhkyEs4+ceTUT8TFo/CU0NXxpb3i/QlmwPbInpDTsKUwAkz0LFP5V0j+FN0mdg/vuCnnwpKptE02FLm99CTNMG+ssOZ9fL/jUIJ+FrSQamIkZX/c5iabBDHeYyOT9kfZxmyv7xWqxY4YMGTJkyJAhQ4YMGTLA943/A+Mr4MlluLObAAAAAElFTkSuQmCC">              </div>
                <h4 class="mb-1 font-sans-serif">
                  <span
                    class="text-700 mx-2"
                    data-countup='{"endValue":"4968"}' 
                    >

                  
                  
                  </span>
                  <span class="fw-normal text-600"><?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8mb4', 'root', '');

// Nom de la table à compter
$table_name = 'user';

// Requête pour compter le nombre de lignes dans la table
$stmt = $db->query("SELECT COUNT(*) AS count FROM $table_name WHERE roles = 1");
$count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];

echo "$count Administrateur(s)";
?></span>
                </h4>
                
              </div>
              <div
                class="col-xxl-4 col-md-6 px-3 text-center border-end-md border-bottom border-bottom-xxl-0 pb-3 p-xxl-0 ps-md-0"
              >
                <div class="icon-circle icon-circle-primary">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAECElEQVR4nO1ZXWhcRRSeRq0/1Sr6IKK2FQJp78xN1IAICgHRIghSqLG1UH0Q+6J50FCSe87CfRIFEQR98c0fEKFUaUHUJ8G0DYg+mIai0vy4e85dowGtUalYvHLunU2Xmp/ezczdJeSDgeXu3e/MN3Nmzs8qtYENbKBUdA/9cLWJ+BED9IZGHtdA0xroTwM0NjiYXqE6HnHaFSINaqQZg5wuNTQmB1Unoy+euckAf7E4YaDpbEcg2RtA9T6DPJR9B7SgkU8ZoA/kWd9IfYfqFOwcpVs08EQ+UeZs1eO0q/mdgTi9Ulzr/7tE/xrgI8FotVu1F+kmg3zcrvZkGNfuWOnt/piv00h3hkgPG+DXDPK8/e05eabaBY38rF3deZlgiy75juU4HwDdrcpGEE9uNkCzMokA+anWmdJNGultuzNn+g99fZUqE3IW8oPNE5eeiaLYHs9co5G/z/lqT6syYZA+E8MhJIdc8AVIz9hd+UqVBfFtDfSPAf47iKs3u+C8/8XqtRrpD7nJ+qB6uyoDBmqP2evzhFtePpbtcsQHXPKuYJBetoHvFZe8GgjtuXtdlQEDdDQzGNF+l7wakr32nBx1ybu8QaTT+UHne13yBsgP2gzhpPKOOO3SyH+JwZ7Dv9zgkjoYrXZbIWdd8i5tbIS32UicuObuH5m60V4ivyvf0BE/kKfkPO6ae0CSy4ybLijfCCq1J6yxj3zwa4lPyKmIUj5xsbbgt7zwAy1k+Vs8d73yCY30qo0h6In/Z+HfCbO3+eC/aAjo42xHInrSB79B+jFbqEqyS/mEBv5ODPVGdeOFH+mbfKGSAeULcj3KYZQh9YgPGwb4SF7j0PM++HMjEQ3bGHJ8TTzAJ5frtJhWBtBYoQlo5N/y1UoeXZMQlyIwH8UmAPRpI2DJZw10OMDaQ9JJaUVI0QVwxiW5lQF6LxNyafMN+Fc5qBrpzdVK37YLacBEP90qpalMWoorDTTXLCqIkkAVNN6qGxmHi5IhrFBPY6fk83LvSRnbsULCTAR/u+hmWf+XXpJYI+6YXduVWp9GBgNU7xjXakCib+5efN4KmJIuiJebZhm0zCWBUCPta25aS+dDI70vHRX56yCo0OMG+ENpuGVJINA5aaka5Hc18u62Cukdrm+R67bZNeR/D+kShpVquBbjS+2SKfhsdatx2mWAX2hkpdaFpGYfkv5WEQFtE9Idz281QJ83udAJcY1WJr+SEK9c2/N+7Lh1oTlT4T0uDF+WcZdcUgFaEdO9WL+rCHnHuFYocUHSdaQLuyp0j0sRpQoxiy1R/sS1iFWNF8RqQrKgFiA/V5R4zcZdckkmWyT3aXWU4Vpj60KIb5R6/frEuhNiPLipKlWI4zOokb78D+TcY2lRHp6BAAAAAElFTkSuQmCC">               </div>
                <h4 class="mb-1 font-sans-serif">
                  <span
                    class="text-700 mx-2"
                    data-countup='{"endValue":"4968"}' 
                    ></span>  
                  <span class="fw-normal text-600"><?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8mb4', 'root', '');

// Nom de la table à compter
$table_name = 'user';

// Requête pour compter le nombre de lignes dans la table
$stmt = $db->query("SELECT COUNT(*) AS count FROM $table_name WHERE roles = 2");
$count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];

echo "$count Comptable(s)";
?></span>
                </h4>
                
              </div>
              <div
                class="col-xxl-4 col-md-6 px-3 text-center border-end-md border-bottom border-bottom-xxl-0 pb-3 p-xxl-0 ps-md-0"
              >
                <div class="icon-circle icon-circle-warning">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACV0lEQVR4nO1ZzW7UQAy2QOXSwoMUbpU4QOzAoVdEEfAKVVGhwAt4lkMF9Al65VfiMah4ANoKti08AVwg41W5EOSdhN0DbWY3ZHeymk/KzR77G/9MZANERETURs6L53pMdy3jG2HqWkYrhvImPqtnM3XF4Gu1qbbrMwAAYbplDX1tynEPYl+kQys1ogBnhOn50KEfhenBT04W863l+f9yS/+yu7U8nz25elEMbQjj7l/7jE/Vp5EPLElYxmMxuDrWITWR62WadM354MiMnE4liV4nSWHKyDi9NiCT3PRS0uIa1ASuQiAQpnv9yzV4lG8vzVUqaKcoa2Ia6XQS8nd3zorBvSIqt6EK1tBbRyS5D4FBGB86IvSqUtgaOlBh7U4QGDLXzZRIt1LYGsxUOOd0AQLDt2dXzhd1klUKl30bAoX4+neaoDX0YWIvusGdxohM+vcEQiBSaaimDxCJQIxIu1NLZqXYpQ1EYEx9X0gkMoQYkTamlsxKscusEIEx9X0hkcgQYkTamFrS9mK3BncmRcIyvm+MSAgQX/9CHgd958sXCiI/2j2g4/SS94BON0UF6w0IDD2mx44IvvAfYjPuBjfEZtr3HmL31wq67upHJV2DQCCM60U3O/RaK/SVOrRSKB3rkgWmjKxD162hX5bptzDdGElZ11wlGV2yaGhhKumE60qiKPLNMZehjoz7cE/3Ezrab7I155wuuO6UPCproojEZq2a1Z2drrsm/Xsigxf+cOR0OvGWtpfmtFPopkgMfi4fzUYcN5gJ4ycx9FJtehd2REQEnIY/TYHj6nejBBAAAAAASUVORK5CYII=">                </div>
                <h4 class="mb-1 font-sans-serif">
                  <span
                    class="text-700 mx-2"
                    data-countup='{"endValue":"1054"}'
                    ></span> 
                  <span class="fw-normal text-600"> <?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=analys;charset=utf8mb4', 'root', '');

// Nom de la table à compter
$table_name = 'user';

// Requête pour compter le nombre de lignes dans la table
$stmt = $db->query("SELECT COUNT(*) AS count FROM $table_name WHERE roles = 3");
$count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];

echo "$count Commercial(s)";
?></span>
                </h4>
              </div>

              
              </div>
         
              </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2 mb-6 ">
              <div class="card h-lg-100 overflow-hidden facture-compta-commE  ">
                <div class="card-header bg-body-tertiary ">
                  <div class="row align-items-center ">
                    <div class="col ">
                      <h6 class="mb-0 ">Panel Administrateur | Admin</h6>
                    </div>
                  </div>
                </div>
                     <div class="row">


                      <div class="col-6">
                        <a href="administration/g-utilisateur.php" class="btn btn-primary panel-btn">Gestion des utilisateurs</a>
                      </div>

                      <div class="col-6">
                        <a href="administration/n-utilisateur.php" class="btn btn-primary panel-btn">Nouveaux utilisateurs</a>
                      </div>

                    </div>  
                  </div>
                </div>
              
              </div>
            </div>
          </div>

          </div>
          </div>

          <form action="logout.php" method="post">
    <button type="submit" name="logout">Déconnexion</button>
</form>


          <!-- ===============================================--><!--    Footer--><!-- ===============================================-->

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
        </div>
      </div>
    </main>
    <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

  

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>

</html>
