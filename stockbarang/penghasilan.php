<?php 
require 'function.php';
require 'cek.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Service - 45 Motor</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">45 MOTOR</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                           <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stock Barang
                            </a>
                             <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Masuk
                            </a>
                             <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Keluar
                            </a>
                             <a class="nav-link" href="jasa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Jasa
                            </a>
                           
                            <a class="nav-link" href="penghasilanmontir.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Montir
                            </a>
                            </a>
                            <a class="nav-link" href="gaji.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Gaji
                            </a>
                            <a class="nav-link" href="penghasilanowner.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Laba
                            </a>
                            <a class="nav-link" href="tempo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tempo
                            </a>
                            <a class="nav-link" href="cashbon.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Cash Bon
                            </a>
                            <a class="nav-link" href="member.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Member
                            </a>
                           

                             <a class="nav-link" href="logout.php">
                                
                                Log Out
                            </a>
                            



                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">45 MOTOR</div>
                        Jalan Sekejengkol No.45 Cileunyi
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Service</h1>
                        
                         <!-- Button to Open the Modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Service
                          </button>
                          <a href="exportpenghasilan.php" class="btn btn-info"> Export Data </a>

                       
                        
                            <div class="card-body">


                               
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Barang yang Diberikan</th>
                                                <th>Harga Barangnya</th>
                                                <th>Jasa yang Diberikan</th>
                                                <th>Harga Jasanya</th>
                                                
                                                <th>No.Polisi</th>
                                                <th>Total</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php 
                                            $ambilsemuadatastock=mysqli_query($conn,"select*from penghasilan");
                                            
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                
                                                $namabarang = $data['namabarang'];
                                                $hargajual = $data['hargajual'];
                                                $namajasa = $data['namajasa'];
                                                $hargajasa = $data['hargajasa'];
                                                $nopol = $data['nopol'];
                                                $tanggal = $data['tanggal'];
                                                $total = $data['total'];
                                                

                                                ?>
                                            
                                            <tr>
                                                <td><?=$tanggal;?></td>
                                                <td><?=$namabarang;?></td>
                                                <td><?=$hargajual;?></td>
                                                <td><?=$namajasa;?></td>
                                                <td><?=$hargajasa;?></td>
                                               
                                                <td><?=$nopol;?></td>
                                                <td><?=$total=$hargajasa*30/100,$hargajual;?></td>
                                                
                                                
                                                
                                               
                                            </tr>
                                                   
                                                
                                               
                                            

                                            <?php
                                        };
                                        ?>


                                            
                                        </tbody>
                                    </table>
                                    <?php
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
                             
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

    </body>
     <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambahkan Service</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
           
        <select name='namajasa' class='form-control'>
            <?php
            $ambilsemuadatanya = mysqli_query($conn,"select * from jasa");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                $namajasa = $fetcharray['namajasa'];
                $idjasa = $fetcharray['idjasa'];
            
            ?>

            <option value="<?=$namajasa;?>"><?=$namajasa;?></option>

            <?php
                }
            ?>
            
        </select>
        <br>
     
        <select name='hargajasa' class='form-control'>
            <?php
            $ambilsemuadatanya = mysqli_query($conn,"select * from jasa");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                $hargajasa = $fetcharray['hargajasa'];
                $namajasa = $fetcharray['namajasa'];
            
            ?>

            <option value="<?=$hargajasa;?>"><?=$hargajasa;?></option>

            <?php
                }
            ?>
            
        </select>
         <br>
          <select name='namabarang' class='form-control'>
            <?php
            $ambilsemuadatanya = mysqli_query($conn,"select * from sisabarang");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                $namabarang = $fetcharray['namabarang'];
                $idb = $fetcharray['idb'];
            
            ?>

            <option value="<?=$namabarang;?>"><?=$namabarang;?></option>

            <?php
                }
            ?>
            
        </select>
        <br>
        
        <input type="num" name="hargajual" placeholder="Harga Jual Liat dibagian Stock" class="form-control" required>
        
        
        <br>
        
        <input type="num" name="nopol" placeholder="No.Polisi(Jika tidak ada diganti dengan 0)" class="form-control" required>
        
        
        <br>
        <button type="submit" class="btn btn-primary" name="addservice"> Oke </button>
        </div>
        </form>

         
    <!-- Modal footer -->
   
        
         
    </div>
    </div>
  
</div>
</html>
