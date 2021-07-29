<?php  
 session_start();
    if (!isset($_SESSION["login"])) {
    header("location: login.php");
     exit;
     }
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