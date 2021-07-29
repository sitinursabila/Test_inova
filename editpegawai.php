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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Update Data Pegawai</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Data Pegawai</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Update Data Pegawai
              </header>
              <?php
            include 'config.php';

            $id = $_GET['id'];
            $query = mysqli_query($kon, "SELECT * FROM tb_pegawai WHERE id = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query)) :
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="act_edit_obat.php">
                    <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama"  type="text" value="<?php echo $data['nama'];?>" required />
                      </div>
                    </div>
                           <div class="form-group ">
                      <label for="jenis_kelamin" class="control-label col-lg-2">jenis_kelamin</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="jenis_kelamin" type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="usia" class="control-label col-lg-2">Usia<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="usia" name="usia"  type="text" required value="<?php echo $data['usia'];?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="jabatan" class="control-label col-lg-2"> Jabatan<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="jabatan" type="text" name="jabatan" required value="<?php echo $data['jabatan'];?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="gaji" class="control-label col-lg-2">Gaji <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="gaji" type="text" name="gaji" value="<?php echo $data['gaji'];?>" required />
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