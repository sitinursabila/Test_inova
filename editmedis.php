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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Update Data Rekam Medis</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Rekam Medis</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Update Rekam Medis
              </header>
              <?php
            include 'config.php';

            $id = $_GET['id'];
            $query = mysqli_query($kon, "SELECT * FROM tb_rekam_medis WHERE id = '$id'");
           
            while ($data = mysqli_fetch_array($query)) :
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="aksi_medis.php">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nama lengkap <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="nama" minlength="5" type="text" value="<?php echo $data['nama'];?>" required />
                      </div>
                    </div>
                           <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Usia</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="text" name="usia" value="<?php echo $data['usia'];?>"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="alamat" name="alamat" minlength="5" type="text" required value="<?php echo $data['alamat'];?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> tanggal<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="date" name="tanggal" required value="<?php echo $data['tanggal'];?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">telp <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="telp" value="<?php echo $data['telp'];?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> <span class="required">status pembayaran</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="status" value="<?php echo $data['status'];?>" required />
                      </div>
                    </div> <div class="form-group ">
                      <label for="tindakan" class="control-label col-lg-2">tindakan/obat <span class="required"></span></label>
                      <div class="col-lg-10">
                          
                        <input class="form-control " id="tindakan" type="text" name="tindakan" value="<?php echo $data['tindakan'];?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="biaya" class="control-label col-lg-2">biaya/obat <span class="required"></span></label>
                      <div class="col-lg-10">
                          
                        <input class="form-control " id="biaya" type="text" name="biaya" value="<?php echo $data['biaya'];?>" required />
                      </div>
                    </div>
                    
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name = "submit">Save</button>
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
       endwhile;
       include"footer.php";
       ?>