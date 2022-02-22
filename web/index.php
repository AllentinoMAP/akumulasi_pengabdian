<?php
session_start();
include_once('../controller/konek.php');
$database = new konek();

if(isset($_SESSION['is_login']))
{
    header('location:input.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:input.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:input.php');
    }
}

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];

    if($database->register($username,$password,$nama,$nip,$pangkat,$jabatan,$unit_kerja))
    {
      header('location:index.php');
    }
}
    include "../tambahan/css/cssboostrap.php";
    // include "navbar/nav1.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Home - Dashboard</title>
    <link rel="stylesheet" href="text/css" href="../assets/css/bootstrap.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f6f6f6;">
        <a class="navbar-brand" href="../web/index.php">PENGABDIAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="ml-auto mr-2">
                <a class="btn btn-outline-primary" href="#" data-toggle="modal" data-target="#modalLoginForm">Login</a>
                <a class="btn btn-outline-primary" href="#" data-toggle="modal"
                    data-target="#modalRegisterForm">Register</a>
            </div>
        </div>
    </nav>

    <img src="../tambahan/img/bg.png" class="img-fluid" alt="">

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img src="../tambahan/img/logo.png" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <h1>Akumulasi Pengabdian</h1>
                <p class="text-justify">Aplikasi pengabdian berbasis website yang berfungsi untuk Mengakumulasikan poin
                    pengabdian yang dilakukan oleh dosen hanya dengan mengisi form yang telah tersedia</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h1>Daftar Nilai Pengabdian</h1>
        </div>
        <div class="row mt-3">
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="thead-light text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Komponen Kegiatan</th>
                            <th scope="col">Angka_Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">D</th>
                            <td>PELAKSANAAN PENGABDIAN KEPADA MASYARAKAT</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Menduduki jabatan pimpinan pada lembaga pemerintahan/ pejabat negara yang harus
                                dibebaskan
                                dari jabatan organiknya tiap semester.</td>
                            <td>5,5</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh
                                masyarakat/indusri setiap program</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Memberi latihan/penyuluhan/ penataan/ceramah pada masyarakat, terjadwal/terprogram:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>1) Dalam satu semester atau lebih :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a) Tingkat Intenasional tiap program</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b) Tingkat Nasional, tiap program</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c) Tingkat Lokal tiap program</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>2) Kurang dari satu semester dan minimal satu bulan :</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a) Tingkat Intenasional tiap program</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b) Tingkat Nasional, tiap program</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c) Tingkat Lokal tiap program</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>d) Insidental tiap kegiatan/program</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas
                                pemerintahan dan pembangunan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Berdasarkan bidang keahlian, tiap program</td>
                            <td>1,5</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Berdasarkan penugasan lembaga perguruan tinggi, tiap program</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>c. Berdasarkan fungsi/jabatan tiap program</td>
                            <td>0.5</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap karya
                            </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal
                                pengabdian kepada masyarakat atau teknologi tepat guna merupakan diseminasi dari luaran
                                program kegiatan pengabdian kepada masyarakat, tiap karya</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)*</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>a. Editor/dewan penyunting/dewan redaksi jurnal ilmiah internasional</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>b. Editor/dewan penyunting/dewan redaksi iumal ilmiah nasional</td>
                            <td>0,5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                &copyLA2 <script>
                document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </div>


    <form class="form-signin" method="post" action="">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-2">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>

                        <div class="md-form mb-2">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <div class="md-form mb-2">
                            <input type="checkbox" value="remember-me" name="remember">
                            <label for="remember-me">Remember me</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" name="login" class="btn btn-outline-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="">
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Register Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-2">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>

                        <div class="md-form mb-2">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>

                        <div class="md-form mb-2">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control">
                        </div>

                        <div class="md-form mb-2">
                            <label for="nip">NIP</label>
                            <input type="text" id="nip" name="nip" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary" name="register">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</body>