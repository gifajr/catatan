<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catatan Kegiatan|Login</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-x1-6 col-lg-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <br/>
                            <h1 class="h3 text-gray-900 text-center">Selamat Datang di Cacatan Kegiatan</h1>
                            <br/>
                        <div calss="card-body p-0">
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <img src="img/logo_rpl.png" alt="Responsive image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h5 text-gray-900 mb-2">Masukkan NISN dan Nama Lengkap Untuk Masuk</h1>
                            </div>
                                <form class="user" method="post" action="do_login.php">
                                    <div class="form-group">
                                        <input type="text" name="nisn" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan NISN Anda">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nama_lengkap" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Nama Lengkap Anda">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <i class="fa fa-key"></i>
                                        Login
                                    </button>
                                    <a href="register.php" class="btn btn-facebook btn-user btn-block">
                                        Belum punya akun..? Silahkan Daftarkan Diri Anda
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>