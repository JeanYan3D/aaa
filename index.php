<!doctype html>
<html lang="en" class="light-theme color-header headercolor2">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />

  <title>AAA Runner</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">        
      <nav class="navbar navbar-expand">
        <div class="topbar-logo-header d-none d-xl-flex">
          <div>
           
          </div>
          <div>
            <h4 class="logo-text">
                <span style="color: orange;">A</span>ustral 
                <span style="color: orange;">A</span>ccueil 
                <span style="color: orange;">A</span>genda
            </h4>
        </div>
        </div>
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
          </div>
          <div class="top-navbar d-none d-xl-block ms-3">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item">
                  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'planning.php'){echo 'active';} ?>" href="planning.php">Planning</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'patients.php'){echo 'active';} ?>" href="patients.php">Patients</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'sejours.php'){echo 'active';} ?>" href="sejours.php">Séjours</a>
              </li>
              <li class="nav-item d-none d-xxl-block">
                  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'transports.php'){echo 'active';} ?>" href="transports.php">Transports</a>
              </li>
              <li class="nav-item d-none d-xxl-block">
                  <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'rapports.php'){echo 'active';} ?>" href="rapports.php">Rapports</a>
              </li>
              <!-- Administration Dropdown -->
              <li class="nav-item dropdown d-none d-xxl-block">
                  <a class="nav-link dropdown-toggle <?php if(basename($_SERVER['PHP_SELF']) == 'admin.php'){echo 'active';} ?>" href="#" id="administrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Administration
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="administrationDropdown">
                      <li><a class="dropdown-item" href="index.php?page=users">User Management</a></li>
                      <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                      <li><a class="dropdown-item" href="logs.php">Logs</a></li>
                  </ul>
              </li>
          </ul>

          </div>
          <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center gap-1">
                  <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
                  <div class="user-name d-none d-sm-block">Jhon Deo</div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
               
              </ul>
            </li>
            </ul>
            </div>
      </nav>
    </header>
     <!--end top header-->

       <!--start content-->
       <main class="page-content" style="padding-top: 0px;">
				<!-- Le centre de l'appli -->
          <div id="centre">
            <?php
          /*On test l'existance de la page sur le serveur, c'est une protection ou cas ou des ptits malins appelent une page ailleurs qu'en localhost*/
          $page = $_GET['page'];
          if(file_exists("$page.php"))
          {
            /*Si le fichier existe bien sur le serveur, on l'affiche.*/
            include ("$page.php");
          }else{
            //echo "<head> <META HTTP-EQUIV='Refresh' CONTENT='0;URL=checklogin.php'> </head>";
            die;
          }
        ?>
			</main>
       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
       

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <!--app-->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/app-emailbox.js"></script>
  

</body>

</html>
