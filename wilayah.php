<?php 
include"header.php";
 ?>
 <!--main content start-->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_pin_alt"></i> Data wilayah</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_pin_alt"></i>Wilayah</li>
            </ol>
          </div>
        </div>
   
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                  <table>
                      <tr>
                          <td> Data wilayah</td>
                      </tr>
                      <tr>
                          <td> <a class="btn btn-primary" href="tambah_wil.php"><i class="fa fa-plus"></i></a></td>
                      </tr>
                  </table>
               </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>Kota/kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Aksi</th>
                  </tr>
                  <?php 
                  include "config.php"; 
                    $query = mysqli_query($kon, "SELECT * FROM tb_wilayah");
         
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query)) :
                  ?>
                 
                  <tr>
                    <td><?php echo $data['kota/kabupaten']?></td>
                    <td><?php echo $data['kecamatan']?></td>
                    <td><?php echo $data['desa']?></td>
                    
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="editwil.php?id=<?php echo $data['id'];?>"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger" href="hapus_wil.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php endwhile; ?>
                 </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
   
    <?php 
 
 include"footer.php"
?>