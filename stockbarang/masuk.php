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
        <title>Barang Keluar - 45 Motor</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">45 MOTOR</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
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
                        <h1 class="mt-4">Barang Masuk</h1>
                        
                        
                       
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Barang
                          </button>
                           <a href="exportbarangmasuk.php" class="btn btn-info"> Export Data </a>

                       
                        
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Masuk</th>
                                                
                                                <th>Nama Barang Masuk</th>
                                                <th>Penerima Barang Masuk</th>
                                                <th>Stock Masuk</th>
                                                
                                              
                                            </tr>
                                        </thead>
                                        
                                         <tbody>
                                            <?php 
                                            $ambilsemuadatastock=mysqli_query($conn,"select*from barangmasuk m, sisabarang s where s.idbarang = m.idbarang");
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                $idb = $data['idbarang'];
                                                $idm = $data['idmasuk'];
                                                $namabarang = $data['namabarang'];
                                                $tanggalmasuk = $data['tanggalmasuk'];
                                                $keterangan = $data['keterangan'];
                                                $qty = $data['qty'];
                                                ?>
                                            
                                            <tr>
                                                
                                                <td><?=$tanggalmasuk;?></td>
                                                <td><?=$namabarang;?></td>
                                                <td><?=$keterangan;?></td>
                                                <td><?=$qty;?></td>
                                                
                                            </tr>

                                            <div class="modal fade" id="edit<?=$idk;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                          <h4 class="modal-title">Edit Barang Keluar</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                         <!-- Modal body -->
                                                        <form method="post">
                                                        <div class="modal-body">
                                                        <input type="text" name="keterangan" value="<?=$keterangan;?>" class="form-control" required>
                                                        <br>
                                                        <input type="number" name="qty" value="<?=$qty;?>" class="form-control"required>
                                                        <br>
                                                        
                                                       
                                                        <br>

                                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                                        
                                                        <input type="hidden" name="idk" value="<?=$idk;?>">
                                                        <button type="submit" class="btn btn-warning" name="editbarangkeluar"> Perbaharui </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="modal fade" id="delete<?=$idk;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                          <h4 class="modal-title">Hapus Barang Keluar</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                         <!-- Modal body -->
                                                        <form method="post">
                                                        <div class="modal-body">
                                                            Apakah Kamu Yakin Ingin Menghapus <?=$namabarang;?> ?

                                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                                        <input type="hidden" name="qty" value="<?=$qty;?>">
                                                        <input type="hidden" name="idk" value="<?=$idk;?>">
                                                            <br>
                                                            <br>
                                                        
                                                        
                                                        <button type="submit" class="btn btn-danger" name="hapusbarangkeluar"> Hapus </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 

                                            <?php
                                        };
                                        ?>
                                        </tbody>
                                    </table>
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
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambahkan Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
            <select name='barangnya' class='form-control'>
            <?php
            $ambilsemuadatanya = mysqli_query($conn,"select * from sisabarang");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                $namabarangnya = $fetcharray['namabarang'];
                $idbarangnya = $fetcharray['idbarang'];
            
            ?>

            <option value="<?=$idbarangnya;?>"> <?=$namabarangnya;?></option>

            <?php
                }
            ?>
            
        </select>
        <br>
        <input type="number" name="qty" class="form-control" placeholder="Quantity" required>
        <br>
        <input type="text" name="penerima" class="form-control" placeholder="Penerima" required>
        <br>
        <button type="submit" class="btn btn-primary" name="addbarangmasuk"> Oke </button>
        </div>
        </form>

         
    <!-- Modal footer -->
   
        
            
    </div>
    </div>
  
</div>
</html>
