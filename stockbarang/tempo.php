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
        <title>Tempo/Tagihan - 45 Motor</title>
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
                        <h1 class="mt-4">Waiting List</h1>
                        
                         <!-- Button to Open the Modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Barang
                          </button>
                          <a href="exporttempo.php" class="btn btn-info"> Export Data </a>

                       
                        
                            <div class="card-body">


                                <?php
                                $ambildatastock = mysqli_query($conn, "select * from tempo where jatuhtempo <=0 ");

                                    while($fetch=mysqli_fetch_array($ambildatastock)){
                                        $barang = $fetch['namabarang'];

                                ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong> Perhatian!</strong>  <?=$barang;?> Telah Jatuh Tempo Pada Hari Ini!
                                </div>

                                <?php

                                    }




                                ?>
                                <?php
                                $ambildatastock = mysqli_query($conn, "select * from tempo where jatuhtempo <=2");

                                    while($fetch=mysqli_fetch_array($ambildatastock)){
                                        $barang = $fetch['namabarang'];

                                ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong> Perhatian!</strong> <?=$barang;?> Akan Tiba Tempo Pembayaran Besok!
                                </div>

                                <?php

                                    }




                                ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tanggaldatang</th>
                                                <th>Nama Barang</th>
                                                <th>Jenis</th>
                                                <th>Pengirim</th>
                                                <th>Harga Total</th>
                                                <th>Sudah Dibayar</th>
                                                <th>Sisa</th>
                                                
                                                <th>Jatuh Tempo</th>
                                                <th>Status</th>
                                                <th> Aksi </th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php 
                                            $ambilsemuadatastock=mysqli_query($conn,"select*from tempo");
                                            
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                
                                                $namabarang = $data['namabarang'];
                                                $jenisbarang = $data['jenisbarang'];
                                                $hargatotal = $data['hargatotal'];
                                                $sudahdibayar = $data['sudahdibayar'];
                                                $sisa = $data['sisa'];
                                                $idt = $data['idtempo'];
                                                $tanggaldatang =$data['tanggaldatang'];
                                                $status =$data['status'];
                                                $jatuhtempo=$data['jatuhtempo'];
                                                $namapengirim=$data['namapengirim'];
                                                

                                                

                                                ?>
                                            
                                            <tr>
                                                <td><?=$tanggaldatang;?></td>
                                                <td><?=$namabarang;?></td>
                                                <td><?=$jenisbarang;?></td>
                                                <td><?=$namapengirim;?></td>
                                                <td><?=$hargatotal;?></td>
                                                <td><?=$sudahdibayar;?></td>
                                                <td><?=$sisa=$hargatotal-$sudahdibayar;?></td>
                                                
                                                <td><?=$jatuhtempo;?></td>
                                                <td><?=$status;?></td>
                                                <td>
                                                   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idt;?>"> Edit
                                                   </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idt;?>"> Delete
                                                    </button>
                                                </td>
                                                
                                                
                                                
                                               
                                            </tr>
                                                 <div class="modal fade" id="edit<?=$idt;?>">
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
                                                         <input type="text" name="hargatotal" value="<?=$hargatotal;?>" class="form-control"required>
                                                        <br>
                                                         <input type="text" name="sudahdibayar" value="<?=$sudahdibayar;?>" class="form-control"required>
                                                        <br>
                                                        
                                                        <input type="text" name="status" value="<?=$status;?>" class="form-control"required>
                                                        <br>

                                                        <input type="hidden" name="idt" value="<?=$idt;?>">
                                                        <button type="submit" class="btn btn-warning" name="edittempo"> Perbaharui </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="modal fade" id="delete<?=$idt;?>">
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

                                                        <input type="hidden" name="idt" value="<?=$idt;?>">
                                                            <br>
                                                            <br>
                                                        
                                                        <br>
                                                        <button type="submit" class="btn btn-danger" name="hapustempo"> Hapus </button>
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
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         <!-- Modal body -->
        <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
        
         
        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control">
        <br>
        <input type="text" name="jenisbarang" placeholder="Jenis Barang" class="form-control">
        <br>
        <input type="text" name="namapengirim" placeholder="Nama Pengirim" class="form-control">
        <br>
         
       
        <input type="date" name="tanggaldatang" placeholder="Tanggal Datang" class="form-control">
        <br>
         <input type="text" name="hargatotal" placeholder="Harga Total" class="form-control">
        <br>
        <input type="text" name="sudahdibayar" placeholder="Uang Muka" class="form-control">
        <br>
        <input type="date" name="jatuhtempo" placeholder="Tanggal Jatuh Tempo" class="form-control">
        <br>
        <input type="text" name="status" placeholder="Status" class="form-control">
        <br>

        <button type="submit" class="btn btn-primary" name="addtempo"> Oke </button>
        </div>
        </form>

         
    <!-- Modal footer -->
   
        
         
    </div>
    </div>
  
</div>
</html>
