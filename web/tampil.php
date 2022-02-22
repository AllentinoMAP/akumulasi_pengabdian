<?php
if(isset($_POST['simpan'])){
    $nilai1=trim($_POST['nilai1'])*5.5;
    $nilai2=trim($_POST['nilai2'])*3;
    $nilai3=trim($_POST['nilai3'])*4;
    $nilai4=trim($_POST['nilai4'])*3;
    $nilai5=trim($_POST['nilai5'])*2;
    $nilai6=trim($_POST['nilai6'])*3;
    $nilai7=trim($_POST['nilai7'])*2;
    $nilai8=trim($_POST['nilai8'])*1;
    $nilai9=trim($_POST['nilai9'])*1;
    $nilai10=trim($_POST['nilai10'])*1.5;
    $nilai11=trim($_POST['nilai11'])*1;
    $nilai12=trim($_POST['nilai12'])*0.5;
    $nilai13=trim($_POST['nilai13'])*3;
    $nilai14=trim($_POST['nilai14'])*5;
    $nilai15=trim($_POST['nilai15'])*1;
    $nilai16=trim($_POST['nilai16'])*0.5;
    $total=$nilai1+$nilai2+$nilai3+$nilai4+$nilai5+$nilai6+$nilai7+$nilai8+$nilai9+$nilai10+$nilai11+$nilai12+$nilai13+$nilai14+$nilai15+$nilai16;
}

    include "../tambahan/css/cssboostrap.php";
    // include "navbar/nav2.php";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../tambahan/css/tampil.css">
    <link rel="stylesheet" href="text/css" href="../assets/css/bootstrap.css">

    <title>Form Hasil</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f6f6f6;">
        <a class="navbar-brand" href="../web/input.php">PENGABDIAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="ml-auto mr-2">
                <a class="btn btn-outline-primary" href="../controller/logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="table-design">
        <table>
            <tr>
                <th width="5%">NO</th>
                <th>KONPONEN KEGIATAN</th>
                <th width="20%">ANGKA KREDIT PALING TINGGI</th>
            </tr>
            <tr>
                <td><b>D.</b></td>
                <td><b>PELAKSANAAN PENGABDIAN KEPADA MASYARAKAT</b></td>
                <td> </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Menduduki jabatan pimpinan pada lembaga pemerintahan/ pejabat negara yang harus dibebaskan dari jabatan
                    organiknya tiap semester.</td>
                <td><b><?php echo $nilai1;?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh
                    masyarakat/indusri
                    setiap program</td>
                <td><b><?php echo $nilai2;?></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Memberi latihan/penyuluhan/ penataan/ceramah pada masyarakat, terjadwal/terprogram:</td>
                <td><b> </td>
            </tr>
            <tr>
                <td> </td>
                <td>1) Dalam satu semester atau lebih : </td>
                <td></td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;"> a) Tingkat Intenasional tiap program </p>
                </td>
                <td><b><?php echo $nilai3;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;"> b) Tingkat Nasional, tiap program</p>
                </td>
                <td><b><?php echo $nilai4;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;"> c) Tingkat Lokal tiap program </p>
                </td>
                <td><b><?php echo $nilai5;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>2) Kurang dari satu semester dan minimal satu bulan : </td>
                <td><b> </td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;">a) Tingkat Internasional : tiap program </p>
                </td>
                <td><b><?php echo $nilai6;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;">b) Tingkat Nasional tiap program </p>
                </td>
                <td><b><?php echo $nilai7;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;">c) Tingkat Lokal tiap program </p>
                </td>
                <td><b><?php echo $nilai8;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>
                    <p style="text-indent: 45px;">d) Insidental tiap kegiatan/program </p>
                </td>
                <td><b><?php echo $nilai9;?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan
                    pembangunan</td>
                <td><b> </td>
            </tr>
            <tr>
                <td> </td>
                <td>a. Berdasarkan bidang keahlian, tiap program</td>
                <td><b><?php echo $nilai10;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>b. Berdasarkan penugasan lembaga perguruan tinggi, tiap program</td>
                <td><b><?php echo $nilai11;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>c. Berdasarkan fungsi/jabatan tiap program</td>
                <td><b><?php echo $nilai12;?></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap karya</td>
                <td><b><?php echo $nilai13;?></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian
                    kepada
                    masyarakat atau teknologi tepat guna merupakan diseminasi dari luaran program kegiatan pengabdian kepada
                    masyarakat, tiap karya</td>
                <td><b><?php echo $nilai14;?></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)*</td>
                <td><b> </td>
            </tr>
            <tr>
                <td> </td>
                <td>a. Editor/dewan penyunting/dewan redaksi jurnal ilmiah internasional </td>
                <td><b><?php echo $nilai15;?></td>
            </tr>
            <tr>
                <td> </td>
                <td>b. Editor/dewan penyunting/dewan redaksi iumal ilmiah nasional </td>
                <td><b><?php echo $nilai16;?></td>
            </tr>
            <tr>
                <td style="padding: 8px 0 8px 0;"> </td>
                <td style="padding: 8px 0 8px 5px;"><b>TOTAL</b></td>
                <td style="padding: 8px 0 8px 0;"><b><?php echo $total;?></td>
            </tr>
        </table>
    </div>
</body>
<footer style="padding-left: 3vw;">
    <div class="tombol d-print-none">
        <button onclick="window.print()">PRINT</button>
    </div>
</footer>