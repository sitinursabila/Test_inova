<?php 
session_start();
if (!isset($_SESSION["login"])) {
header("location: login.php");
 exit;
 }
include"header.php";

// include"function.php";
//  $query = query("select *from tb_rekam_medis");
 
 ?>

 
 <!--main content start-->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Data Data Pasien</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Data Pasien</li>
            </ol>
          </div>
        </div>
   
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                  <table>
                      <tr>
                          <td> Data Pasien</td>
                      </tr>
                      <tr>
                          <td> <a class="btn btn-primary" href="tambah_pasien.php"><i class="fa fa-plus"></i></a></td>
                      </tr>
                  </table>
               </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Nama Lengkap </th>
                    <th><i class="icon_calendar"></i> Tanggal</th>  
                    <th><i class="icon_pin_alt"></i> Alamat</th>
                    <th><i class="icon_mobile"></i> Usia</th>
                    <th><i class="icon_mobile"></i> NO telp</th>
                    <th><i class="fa fa-plus"></i>Tindakan  / Obat</th>
                    <th><i class=""></i> Status Pembayaran</th>
                    <th><i class=""></i> Biaya</th>

                    <th><i class="icon_cogs"></i> Aksi</th>
                  </tr>
                  <?php 
                  include "config.php"; 
                    $query = mysqli_query($kon, "SELECT * FROM tb_rekam_medis");
         
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query)) :
                  ?>
                 
                  <tr>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['tanggal']?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td><?php echo $data['usia']?></td>
                    <td><?php echo $data['telp']?></td>
                    <td><?php echo $data['tindakan']?></td>
                    <td><?php echo $data['status']?></td>
                    <td><?php echo $data['biaya']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="editmedis.php?id=<?php echo $data['id'];?>"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash"></i></a>
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