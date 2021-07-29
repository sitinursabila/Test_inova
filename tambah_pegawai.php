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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Tambah Data Pegawai</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Pegawai</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Tambah Data Pegawai
              </header>
              <?php
            
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="act_pegawai.php">
                    <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama  <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama_obat" minlength="5" type="text"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="jenis_kelamin" class="control-label col-lg-2">jenis kelamin <span class="required"></span></label>
                      <div class="col-lg-10">
                          <input  id="jenis_kelamin" type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                          <input  id="jenis_kelamin" type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
                       
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="usia" class="control-label col-lg-2">Usia <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="usia" name="usia"  type="text"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="jabatan" class="control-label col-lg-2">Jabatan <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="jabatan" name="jabatan"type="text"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="gaji" class="control-label col-lg-2">gaji <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="gaji" name="gaji" type="text"  required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name = "save">Save</button>
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
      
       include"footer.php";
       ?>