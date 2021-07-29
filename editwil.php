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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Update Data wilayah</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_pin_alt"></i>Data wilayah</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Update Data wilayah
              </header>
              <?php
            include 'config.php';

            $id = $_GET['id'];
            $query = mysqli_query($kon, "SELECT * FROM tb_wilayah WHERE id = '$id'");
            while ($data = mysqli_fetch_array($query)) :
        ?>
            
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="act_edit_wilayah.php">
                    <div class="form-group ">
                      <label for="kabupaten/kota" class="control-label col-lg-2">Kabupaten/Kota <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="kabupaten/kota" name="kabupaten/kota"  type="text" value="<?php echo $data['kota/kabupaten'];?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="desa" class="control-label col-lg-2">kecamatan <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="kecamatan" name="kecamatan"  type="text" value="<?php echo $data['kecamatan'];?>" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="desa" class="control-label col-lg-2">desa <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="desa" name="desat"  type="text" value="<?php echo $data['desa'];?>" required />
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