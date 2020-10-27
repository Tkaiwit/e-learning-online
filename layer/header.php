<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    บทเรียนออนไลน์
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="fuction/login.js"></script>
  <link href="assets/demo/demo.css" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="black" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo" style="text-align: center;">
        <!-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small"> -->
            <!-- <img src="../assets/img/logo-small.png"> -->
          <!-- </div>
        </a> -->

        <a href="./index.php" class="simple-text logo-normal">
          E Learning Online
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
<?php if (empty($_SESSION['status'])) { ?>
          <li class="<?php if($page=='home'){echo 'active';}?>">
            <a href="index.php">
              <i class="nc-icon nc-bank"></i>
              <p>หน้าแรก</p>
            </a>
          </li>
          <li class="<?php if($page=='coures'){echo 'active';}?>">
            <a href="course.php">
              <i class="nc-icon nc-paper"></i>
              <p>บทเรียน</p>
            </a>
          </li>
          <li class="<?php if($page=='test'){echo 'active';}?>">
            <a href="test.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>บททดสอบ</p>
            </a>
          </li>
<?php } elseif ($_SESSION["status"] == 2) {  ?>
          <li class="<?php if($page=='home'){echo 'active';}?>">
            <a href="index.php">
              <i class="nc-icon nc-bank"></i>
              <p>หน้าแรก</p>
            </a>
          </li>
          <li class="<?php if($page=='profile'){echo 'active';}?>">
            <a href="profile.php">
              <i class="nc-icon nc-single-02"></i>
              <p>โปรไฟล์</p>
            </a>
          </li>
          <li class="<?php if($page=='coures'){echo 'active';}?>">
            <a href="course.php">
              <i class="nc-icon nc-paper"></i>
              <p>บทเรียน</p>
            </a>
          </li>
          <li class="<?php if($page=='test'){echo 'active';}?>">
            <a href="test.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>บททดสอบ</p>
            </a>
          </li>
<?php } elseif ($_SESSION["status"] == 1) {  ?>
          <li class="<?php if($page=='home'){echo 'active';}?>">
            <a href="index.php">
              <i class="nc-icon nc-bank"></i>
              <p>หน้าแรก</p>
            </a>
          </li>
          <li class="<?php if($page=='profile'){echo 'active';}?>">
            <a href="profile.php">
              <i class="nc-icon nc-single-02"></i>
              <p>โปรไฟล์</p>
            </a>
          </li>
          <li class="<?php if($page=='coures'){echo 'active';}?>">
            <a href="course.php">
              <i class="nc-icon nc-paper"></i>
              <p>บทเรียน</p>
            </a>
          </li>
          <li class="<?php if($page=='addcoures'){echo 'active';}?>">
            <a href="add_coures.php">
              <i class="nc-icon nc-paper"></i>
              <p>เพิ่มบทเรียน</p>
            </a>
          </li>
          <li class="<?php if($page=='test'){echo 'active';}?>">
            <a href="test.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>บททดสอบ</p>
            </a>
          </li>
          <li class="<?php if($page=='student'){echo 'active';}?>">
            <a href="show_student_all.php">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>นักเรียนนักศึกษา</p>
            </a>
          </li>
<?php } ?>
          <li class="active-pro <?php if($page=='login'){echo 'login';}?>">
            <?php if (array_key_exists('user', $_SESSION) AND !empty($_SESSION['name'])) {?>
            <a href="fuction/logout.php">
              <i class="nc-icon nc-spaceship"></i>
              <p>Logout</p>
            </a>
            <?php } else { ?>
              <a href="login.php">
              <i class="nc-icon nc-spaceship"></i>
              <p>Login</p>
            </a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </div>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"><?php switch ($page) {
              case 'home':
                echo "Home";
                break;
              case 'profile':
                echo "Profile";
                break;
              case 'coures':
                echo "Course";
                break;
              case 'login':
                echo "Login";
                break;
              case 'welcome':
                echo "Welcome";
                break;
              case 'student':
                echo "Student";
                break;
              case 'addcoures':
                echo "AddCourse";
                break;
              case 'regiser':
                echo "Register";
                break;
              default:
                echo "Test";
                break;
            } ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <?php if (array_key_exists('user', $_SESSION) AND !empty($_SESSION['name'])) {?>
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">ICON</span>
                  
                  
                  </p><?php echo $_SESSION['name']; ?>
                </a>
                <?php } else { ?>
                <a class="nav-link btn-magnify" href="./login.php">
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">ICON</span>
                  
                  
                  </p><?php echo "คุณยังไม่เข้าสู่ระบบ!"; ?>
                </a>
                  <?php } ?>
              </li>
              <!-- <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">-->
    
    