<?
session_start();
if (!isset($_SESSION["login"])) {
header("location: login.php");
 exit;
 }
  ?>
<?php 

include"header.php"
?>
 <!--main content start-->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Tambah Data Pasien</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Pasien</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Tambah Data Pasien
              </header>
              <?php
            
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="act_pasien.php">
                    <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama  <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama_obat" minlength="5" type="text"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="tgl" class="control-label col-lg-2">Tanggal  <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="tgl" name="tgl"  type="date"  required />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="usia" class="control-label col-lg-2">Usia <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="usia" name="usia"  type="text"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="status" class="control-label col-lg-2"> NoTelp <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="telp" name="telp"type="text"  required />
                      </div>
                    </div>
                   
                    <div class="form-group ">
                      <label for="tindakan" class="control-label col-lg-2">Tindakan <span class="required"></span></label>
                      <div class="col-lg-10">
                       <select name="nama_tindakan" id="tindakan" class="form-control">
                       <?php 
                  include "config.php"; 
                    $query = mysqli_query($kon, "SELECT * FROM tb_tindakan");
         
                    while ($data = mysqli_fetch_array($query)) :
                  ?>
                           <option value="<?php echo $data['nama_tindakan'];?>" > <?php echo $data['nama_tindakan'];?></option>
                           <?php endwhile; ?>
                          </select>
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="obat" class="control-label col-lg-2">obat <span class="required"></span></label>
                      <div class="col-lg-10">
                       <select name="nama_obat" id="obat" class="form-control">
                       <?php 
                  include "config.php"; 
                    $query = mysqli_query($kon, "SELECT * FROM tb_obat");
         
                    while ($data = mysqli_fetch_array($query)) :
                  ?>
                           <option value="<?php echo $data['nama_obat'];?>" > <?php echo $data['nama_obat'];?></option>
                           <?php endwhile; ?>
                          </select>
                      </div>
                    </div>

                    
                    <div class="form-group ">
                      <label for="status" class="control-label col-lg-2"> Status <span class="required"></span></label>
                      <div class="col-lg-10">
                        <select name="status" id="status" class="form-control">

                            <option value="belum lunas">Belum Lunas</option>
                            <option value="Lunas">Lunas</option>
                        </select>
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