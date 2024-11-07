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
        <title>Dashboard - 45 Motor</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style> .zoomable{
            width:100px;
        } 
            .zoomable:hover{
                transform: scale(2.5);
                transition: 0.5s ease;
            }
        </style>
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
                            
                           
                            <a class="nav-link" href="member.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Back to main page 
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
                        <h1 class="mt-4">Harga Jual Kepada Member</h1>
                        
                         <!-- Button to Open the Modal -->
                          
                          <a href="exportmemberindex.php" class="btn btn-info"> Export Data </a>

                       
                        
                            <div class="card-body">


                             
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nomor Barang</th>
                                                <th>Harga Barang </th>
                                                <th>Nama Barang</th>
                                                <th>Deskripsi</th>
                                                <th>Stock</th>
                                                <th>Untung</th>
                                                <th>Harga Jual</th>
                                                <th>Aksi</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php 
                                            $ambilsemuadatastock=mysqli_query($conn,"select*from sisabarang");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                
                                                $namabarang = $data['namabarang'];
                                                $deskripsi = $data['deskripsi'];
                                                $stocktersedia = $data['stocktersedia'];
                                                $hargajual = $data['hargajual'];
                                                $idb = $data['idbarang'];
                                                $hargablbrg = $data['hargablbrg'];
                                                $untung = $data['untung'];

                                                

                                                ?>
                                            
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$hargablbrg;?></td>
                                                <td><?=$namabarang;?></td>
                                                <td><?=$deskripsi;?></td>
                                                <td><?=$stocktersedia;?></td>
                                                <td><?=$untung=$hargablbrg*20/100;?></td>
                                                 <td><?=$hargajual=$untung+$hargablbrg?> </td>
                                                <td>
                                                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idb;?>"> Edit
                                                   </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idb;?>"> Delete
                                                    </button>
                                                </td>
                                                
                                               
                                            </tr>
                                                    <div class="modal fade" id="edit<?=$idb;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                          <h4 class="modal-title">Edit Barang</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                         <!-- Modal body -->
                                                        <form method="post">
                                                        <div class="modal-body">
                                                        <input type="text" name="namabarang" value="<?=$namabarang;?>" class="form-control" required>
                                                        <br>
                                                         <input type="text" name="stocktersedia" value="<?=$stocktersedia;?>" class="form-control"required>
                                                        <br>
                                                        <input type="text" name="deskripsi" value="<?=$deskripsi;?>" class="form-control"required>
                                                        <br>
                                                        
                                                        <input type="text" name="hargablbrg" value="<?=$hargablbrg;?>" class="form-control"required>
                                                        <br>

                                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                                        <button type="submit" class="btn btn-warning" name="editbarangmember"> Perbaharui </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="modal fade" id="delete<?=$idb;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                          <h4 class="modal-title">Hapus Barang</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                         <!-- Modal body -->
                                                        <form method="post">
                                                        <div class="modal-body">
                                                            Apakah Kamu Yakin Ingin Menghapus <?=$namabarang;?>?

                                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                                            <br>
                                                            <br>
                                                        
                                                        <br>
                                                        <button type="submit" class="btn btn-danger" name="hapusbarangmember"> Hapus </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                               
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
          <h4 class="modal-title">Tambahkan Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         <!-- Modal body -->
        <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
        
        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control">
        <br>
        <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control">
        <br>
        <input type="num" name="stocktersedia" placeholder="Stock" class="form-control">
        <br>
       
         <input type="num" name="hargablbrg" placeholder="Harga Beli Barang" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary" name="addnewbarang"> Oke </button>
        </div>
        </form>

         
    <!-- Modal footer -->
   
        
         
    </div>
    </div>
  
</div>
</html>