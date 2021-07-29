<?php 
session_start();
if (!isset($_SESSION["login"])) {
header("location: login.php");
 exit;
 }
include"header.php";
 ?>
 <!--main content start-->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Data Pegawai</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Pegawai</li>
            </ol>
          </div>
        </div>
   
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                  <table>
                      <tr>
                          <td> Data Pegawai</td>
                      </tr>
                      <tr>
                          <td> <a class="btn btn-primary" href="tambah_pegawai.php"><i class="fa fa-plus"></i></a></td>
                      </tr>
                  </table>
               </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Nama Lengkap </th>
                    <th></i> Usia</th>
                    <th></i>Jenis Kelamin</th>  
                   
                    <th></i>Jabatan</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                  </tr>
                  <?php 
                  include "config.php"; 
                    $query = mysqli_query($kon, "SELECT * FROM tb_pegawai");
         
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($query)) :
                  ?>
                 
                  <tr>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['usia']?></td>
                    <td><?php echo $data['jenis_kelamin']?></td>
                    <td><?php echo $data['jabatan']?></td>
                    <td><?php echo $data['gaji']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="editpegawai.php?id=<?php echo $data['id'];?>"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger" href="hapus_pegawai.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash"></i></a>
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