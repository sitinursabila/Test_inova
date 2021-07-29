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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Update Data Obat</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Data Obat</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Update Data Obat
              </header>
              <?php
            include 'config.php';

            $id = $_GET['id'];
            $query = mysqli_query($kon, "SELECT * FROM tb_obat WHERE id = '$id'");
            $nomor = 1;
            while ($data = mysqli_fetch_array($query)) :
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="act_edit_obat.php">
                    <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama Obat <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama_obat"  type="text" value="<?php echo $data['nama_obat'];?>" required />
                      </div>
                    </div>
                           <div class="form-group ">
                      <label for="kategori" class="control-label col-lg-2">Kategori</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="kategori" type="text" name="kategori" value="<?php echo $data['kategori'];?>"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="stok_obat" class="control-label col-lg-2">Stok Obat <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="stok_obat" name="stok_obat"  type="text" required value="<?php echo $data['stok_obat'];?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="tgl_kadaluarsa" class="control-label col-lg-2"> Tanggal Kadaluwarsa<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="tgl_kadaluarsa" type="date" name="tgl_kadaluarsa" required value="<?php echo $data['tgl_kadaluarsa'];?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="harga" class="control-label col-lg-2">Harga <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="harga" type="text" name="harga" value="<?php echo $data['harga'];?>" required />
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