<?php 
session_start();
if (!isset($_SESSION["login2"])) {
header("location: login2.php");
 exit;
 }


// include"function.php";
//  $query = query("select *from tb_rekam_medis");
 
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
                      <label for="tgl_daftar" class="control-label col-lg-2">Tanggal Daftar <span class="required"></span></label>
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
                      <label for="tindakan" class="control-label col-lg-2">Tindakan <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="tindakan" name="tindakan" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="obat" class="control-label col-lg-2">obat <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="obat" name="obat" type="text" required />
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
