<?
session_start();
if (!isset($_SESSION["login"])) {
header("location: login.php");
 exit;
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>siKlinik</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Si <span class="lite">Klinik</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>
          
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Pendaftaran</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="pendaftaran_pasien.php">Pendaftaran Pasien</a></li>
              <li><a class="" href="form_validation.html">Form Validation</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="data_pasien.php" class="">
                          <i class="icon_table"></i>
                          <span>Data Pasien</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Data Pasien</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="general.html">Elements</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li> -->
          <li class="sub-menu">
            <a href="pegawai.php" class="">
                          <i class="icon_profile"></i>
                          <span>Data Pegawai</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            
          </li>
          <li class="sub-menu">
            <a href="obat.php" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Data Obat</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            
          </li>
          <li class="sub-menu">
            <a href="tindakan.php" class="">
                          <i class="icon_cogs"></i>
                          <span>Data Tindakan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            
          </li>
          <li class="sub-menu">
            <a href="wilayah.php" class="">
                          <i class="icon_pin_alt"></i>
                          <span>Data Wilayah</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            
          </li>


          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Laporan</span>

                      </a>

          </li>
          <li>
            <a class="" href="chart-chartjs.html">
                          <i class="icon_key_alt"></i>
                          <span>Log Out</span>

                      </a>

          </li>

          

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <?php   
    include"header.php"
  
?>
 <!--main content start-->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Pendaftaran Pasien</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Pendaftaran</li>
              <li><i class="fa fa-files-o"></i>pendaftaran Pasien</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form pendaftaran Pasien
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama lengkap <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="nik" class="control-label col-lg-2">NIK <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="nik" type="text" name="NIK" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="tgl_daftar" class="control-label col-lg-2">tgl_daftar <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="tgl_daftar" name="tgl_daftar"  type="date" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="usia" class="control-label col-lg-2">Usia</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="usia" type="text" name="usia" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="alamat" class="control-label col-lg-2">Alamat <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="alamat" name="alamat" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="penyakit" class="control-label col-lg-2">Penyakit <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="penyakit" name="penyakit" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="telp" class="control-label col-lg-2">telp <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="telp" name="telp" minlength="11" type="telp" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="keluhan" class="control-label col-lg-2">keluhan <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="keluhan" name="keluhan"  type="text" required />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
       <?php
       include"footer.php"
       ?>