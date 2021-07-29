
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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Tambah Data Tindakan</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Tindakan</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Tambah Data Tindakan
              </header>
              <?php
            
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="act_tindakan.php">
                  <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Kode tindakan  <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="kode_tindakan" minlength="5" type="text"  required />
                      </div>
                    </div>  
                  <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama tindakan  <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama_tindakan" minlength="5" type="text"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="biaya" class="control-label col-lg-2">Biaya <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="biaya" name="biaya"  type="text"  required />
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