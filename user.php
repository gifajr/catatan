<?php
session_start();
if(empty($_SESSION['nisn'])){ ?>
    <script type ="text/javascript">
        alert("!!! Anda harus login untuk mengakses halaman!");
        window.location.assign('index.php');
    </script> <?php } ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catatan Kegiatan</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Catatan Kegiatan<sup></sup></div>
            </a>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span><?php echo $_SESSION['nama_lengkap']?></span></a>
            </li>
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Menu
            </div>

            <li class="nav-item">
                <a class="nav-link" href="?url=tulis_catatan">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Tulis Catatan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?url=catatan_kegiatan">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Lihat Catatan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Logout</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <h3>Aplikasi Catatan Kegiatan - RPL SMKN 1 Singkarak</h3>

                </nav>
                <div class="container-fluid">
                    <div class="h5 mb-4 text-gray-800">
                        <?php 
                            if(!empty(@$_GET['url'])){
                                switch (@$_GET['url']){
                                    case 'tulis_catatan':
                                        include 'tulis_catatan.php';
                                        break;
                                    
                                    case 'catatan_kegiatan':
                                        include 'catatan_kegiatan.php';
                                        break;

                                    case 'edit_kegiatan':
                                        include 'edit_catatan.php';
                                        break;

                                    default : 
                                    echo "ERROR 404 - Halaman tidak ditemukan";

                                }
                            }else{
                                echo "Selamat datang di Aplikasi Latihan UKK. ";
                                echo "<br/><br/>anda login sebagai: ";
                                echo "<h4>" .$_SESSION['nama_lengkap']."</h4";
                                echo "<br/><h4>" .$_SESSION['nisn']."</h4";
                            }
                        ?>
                    </div>

                </div>

            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; RPL SMKN 1 Singkarak 2022</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>