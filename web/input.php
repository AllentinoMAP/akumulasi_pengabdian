<?php
    session_start();
    if(! isset($_SESSION['is_login']))
    {
    header('location:login.php');
    }

    include_once('../controller/konek.php');
    $database = new konek();

    include "../tambahan/css/cssboostrap.php";
    // include "navbar/nav2.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/HalInput.css">

    <title>Form Input</title>
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
    
    <form action="tampil.php" method="post">
        <div class="table-container table1">
            <table>
                <tr>
                    <th>
                        <h3>INPUT PERNYATAAN PENGABDIAN</h3>
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <span>Menduduki jabatan pimpinan pada lembaga pemerintahan/pejabat negara yang harus dibebaskan
                            dari
                            jabatan organiknya tiap semester.</span>
                    </td>
                    <td>
                        <input type="number" name="nilai1" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh
                            masyarakat/industri setiap program</span>
                    </td>
                    <td>
                        <input type="number" name="nilai2" value="0" min="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <span>Memberi latihan/penyuluhan/ penataran/ceramah pada masyarakat, terjadwal/terprogram
                            :</span>
                        <div class="table2  last-tr">
                            <table>
                                <tr>
                                    <td style="width: 5px; vertical-align: top;">
                                        <span>1.</span>
                                    </td>
                                    <td>
                                        <span>Dalam Satu Semester Atau Lebih :</span>
                                        <div class="table3 last-tr">
                                            <table>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>a)</span>
                                                    </td>
                                                    <td>
                                                        <span>International per Program</span>
                                                    </td>
                                                    <td style="width: 30%;">
                                                        <input type="number" name="nilai3" value="0" min="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>b)</span>
                                                    </td>
                                                    <td>
                                                        <span>Nasional per Program</span>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="nilai4" value="0" min="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>c)</span>
                                                    </td>
                                                    <td>
                                                        <span>Lokal per Program</span>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="nilai5" value="0" min="0">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="garis-table"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5px; vertical-align: top ;">
                                        <span>2.</span>
                                    </td>
                                    <td>
                                        <span>Kurang Dari Satu Semester :</span>
                                        <div class="table3 last-tr">
                                            <table>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>a)</span>
                                                    </td>
                                                    <td>
                                                        <span>International per Program</span>
                                                    </td>
                                                    <td style="width: 30%;">
                                                        <input type="number" name="nilai6" value="0" min="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>b)</span>
                                                    </td>
                                                    <td>
                                                        <span>Nasional per Program</span>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="nilai7" value="0" min="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>c)</span>
                                                    </td>
                                                    <td>
                                                        <span>Lokal per Program</span>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="nilai8" value="0" min="0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5px; vertical-align: top;">
                                                        <span>d)</span>
                                                    </td>
                                                    <td>
                                                        <span>Insidental Tiap per Program</span>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="nilai9" value="0" min="0">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span>Memberi Pelayanan Kepada Masyarakat atau Kegiatan Lain yang Menunjang Pelaksanaan Tugas
                            Pemerintahan
                            dan Pembangunan :</span>
                        <div class="table2  last-tr">
                            <table>
                                <tr>
                                    <td style="width: 5px; vertical-align: top;">
                                        <span>1.</span>
                                    </td>
                                    <td>
                                        <span>Berdasarkan Bidang Keahlian, Tiap Program</span>
                                    </td>
                                    <td style="width: 30%;">
                                        <input type="number" name="nilai10" value="0" min="0">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5px; vertical-align: top;">
                                        <span>2.</span>
                                    </td>
                                    <td>
                                        <span> Berdasarkan Penugasan Lembaga Terguruan Tinggi, Tiap Program</span>
                                    </td>
                                    <td>
                                        <input type="number" name="nilai11" value="0" min="0">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5px; vertical-align: top;">
                                        <span>2.</span>
                                    </td>
                                    <td>
                                        <span>Berdasarkan Fungsi/Jabatan Tiap Program</span>
                                    </td>
                                    <td>
                                        <input type="number" name="nilai12" value="0" min="0">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span>Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap
                            karya</span>
                    </td>
                    <td>
                        <input type="number" name="nilai13" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal
                            atau
                            teknologi tepat guna bagi masyarakat</span>
                    </td>
                    <td >
                        <input type="number" name="nilai14" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun) :</span>
                        <div class="table2  last-tr">
                            <table>
                                <tr>
                                    <td style="width: 5px; vertical-align: top;">
                                        <span>1.</span>
                                    </td>
                                    <td>
                                        <span>Editor/dewan peryunting/dewan redaksi jurnal ilmiah internasional</span>
                                    </td>
                                    <td style="width: 30%;">
                                        <input type="number" name="nilai15" value="0" min="0">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5px; vertical-align: top;">
                                        <span>2.</span>
                                    </td>
                                    <td>
                                        <span>Editor/dewan peryunting/dewan redaksi jurnal ilmiah nasional</span>
                                    </td>
                                    <td>
                                        <input type="number" name="nilai16" value="0" min="0">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </table>
            <div class="tombol">
                <button type="submit" value="Simpan" name="simpan">Submit</button>
            </div>
        </div>


    </form>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</body>

</html>