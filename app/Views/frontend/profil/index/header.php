<!DOCTYPE html>
<html lang="id">

<!-- Mirrored from edata.gorontalokota.go.id/bidang/1/pendidikan by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 06:03:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="description" content="E-DATA BOLMUT">
    <meta name="keywords" content="DISKOMINFO KABUPATEN BOLAANG MONGONDOW UTARA">
    <meta name="author" content="HK ENTERPRISE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etika - Diskominfo Satu Data</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/v2/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Font Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/v2/images/cropped-logo-kominfo.png') ?>" />
</head>

<body>
    <!-- Loading Template CSS -->
    <link href="<?= base_url('assets/v2/spectrum/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/v2/spectrum/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/v2/spectrum/css/style-magnific-popup.css') ?>" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/frontend/css/style.css') ?>" rel="stylesheet"> -->

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/v2/spectrum/css/fonts.css') ?>" rel="stylesheet">

    <!-- Loading Layer Slider -->
    <link href="<?= base_url('assets/v2/spectrum/layerslider/css/layerslider.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets/v2/spectrum/css/style_profil.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/v2/spectrum/css/form_profil.css') ?>" rel="stylesheet">

    <!-- Load JS -->
    <script src="<?= base_url('assets/v2/spectrum/js/jquery-1.11.3.min.js') ?>"></script>
    <script src="<?= base_url('assets/v2/datatables/jquery-3.5.1.html') ?>"></script>
    <script src="<?= base_url('assets/v2/spectrum/js/bootstrap.min.js') ?>"></script>

    <!-- highcharts -->
    <script src="<?= base_url('assets/frontend/lib/highcharts/highcharts.js') ?>"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/v2/datatables/css/jquery.dataTables.min.css') ?>" />
    <script type="text/javascript" src="<?= base_url('assets/v2/datatables/js/jquery.dataTables.min.js') ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/v2/datatables/css/buttons.dataTables.min.css') ?>" />
    <script type="text/javascript" src="<?= base_url('assets/v2/datatables/js/dataTables.buttons.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/v2/datatables/js/buttons.print.min.js') ?>"></script>

    <!-- DataTables >> With FixedHeader -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/v2/datatables/css/responsive.dataTables.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/v2/datatables/css/fixedHeader.dataTables.min.css') ?>" />
    <script type="text/javascript" src="<?= base_url('assets/v2/datatables/js/dataTables.responsive.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/v2/datatables/js/dataTables.fixedHeader.min.js') ?>"></script>


    <header class="header" style="background: linear-gradient(to bottom, #6222CC 0%, #6222CC 100%);">
        <!--begin nav -->
        <nav class="navbar navbar-default">

            <!--begin container -->
            <div class="container">
                <!--begin navbar -->
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="<?= base_url('assets/v2/images/Logo1.png') ?>" alt="bolmut" style="margin-top: 10px;">
                    <a href="<?= base_url('home') ?>" class="navbar-brand brand scrool" style="float: right; padding: 12px 35px;"></a>
                </div>
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?= base_url('home') ?>">Beranda</a></li>
                        <li><a href="<?= base_url('home/utama') ?>">Data Utama</a></li>
                        <li><a href="<?= base_url('profil/index') ?>">Data Dasar</a></li>
                        <li><a href="<?= base_url('home/publikasi') ?>">Publikasi</a></li>
                        <li><a href="<?= base_url('home/faq') ?>">FaQ</a></li>
                        <li><a href="http://etika.diskominfo.bolmutkab.go.id/auth/login" class="purchase" data-toggle="modal" data-target=""><i class="fa fa-user"></i></a></li>
                    </ul>
                </div>
                <!--end navbar -->
            </div>
            <!--end container -->

        </nav>
        <!--end nav -->
    </header>

    <div id="pathway">
        <ul class="breadcrumb">
            <li><a href="<?= base_url('home') ?>">Beranda</a></li>
            <li>Data Dasar</li>
        </ul>
    </div>

    <div id="doc-menu">
        <div class="sidebar-search">
            <div class="input-group">
                <input type="text" class="form-control" id="mySearch" onkeyup="myFunction()" placeholder="Search..." title="Search">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
        <ul id="myMenu" class="nav-list">
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">1. Umum</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil1') ?>">
                    <span class="number">I.</span>
                    <span class="text">Geografis</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil2') ?>">
                    <span class="number">II.</span>
                    <span class="text">Administrasi Pemerintahan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">2. Penduduk</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil3') ?>">
                    <span class="number">I.</span>
                    <span class="text">Penduduk Menurut Jenis Kelamin</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil4') ?>">
                    <span class="number">II.</span>
                    <span class="text">Penduduk Menurut Usia </span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil5') ?>">
                    <span class="number">III.</span>
                    <span class="text">Penduduk Menurut Keluarga </span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil6') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Penduduk Menurut Dokumen </span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil7') ?>">
                    <span class="number">V.</span>
                    <span class="text">Penduduk Disabilitas </span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil8') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Penduduk RTS Kemiskinan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">3. Pendidikan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil63') ?>">
                    <span class="number">I.</span>
                    <span class="text">Lembaga Pendidikan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil64') ?>">
                    <span class="number">II.</span>
                    <span class="text">Rasio Guru dan Murid</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil65') ?>">
                    <span class="number">III.</span>
                    <span class="text">Pendidikan Terakhir</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil66') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Putus Sekolah</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil67') ?>">
                    <span class="number">V.</span>
                    <span class="text">Tidak Bersekolah</span>
                </a>
            </li>
            <!-- <li>
                <a href="<?= base_url('profil/profil8') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Pendidikan Menengah Atas Dan Kejuruan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil9') ?>">
                    <span class="number">VII.</span>
                    <span class="text">Pendidikan Non Formal</span>
                </a>
            </li> -->
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">4. Kesehatan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil10') ?>">
                    <span class="number">I.</span>
                    <span class="text">Sarana Kesehatan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil11') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jaminan Kesehatan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil12') ?>">
                    <span class="number">III.</span>
                    <span class="text">Kelahiran Bayi dan Kematian Ibu</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil13') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Sasaran Imunisasi Bayi/Balita</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil14') ?>">
                    <span class="number">V.</span>
                    <span class="text">Gizi Kurang, Gizi Buruk, Stunting</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil15') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Keluarga Berencana</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">5. Pertanian, Perkebunan, Peternakan dan Perikanan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil16') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Hasil Pertanian</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil17') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Sawah dan Pengairan / Irigasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil18') ?>">
                    <span class="number">III.</span>
                    <span class="text">Jumlah Alat Mesin Produksi Pertanian</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil19') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Jumlah Lahan Bukan Sawah (Hektar)</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('') ?>">
                    <span class="number">V.</span>
                    <span class="text">Jumlah Produk dan Pemanfaatan hasil Peternakan dan perikanan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil21') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Jumlah Kios Alat Bahan Produksi Pertanian, Peternakan dan Perikan </span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil22') ?>">
                    <span class="number">VII.</span>
                    <span class="text">Jumlah Penggunaan Alat Tangkap Oleh Nelayan</span>
                </a>
            </li>

            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">6. Sosial Keagamaan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil23') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Agama Penganut Kepercayaan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil24') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Tembat Ibdah</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil25') ?>">
                    <span class="number">III.</span>
                    <span class="text">Jumlah Penduduk Menurut Suku/etnis</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil26') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Jumlah Kejadian Kerawanan Sosial dan Linmas</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil27') ?>">
                    <span class="number">V.</span>
                    <span class="text">Penerimah Bantuan Sosial</span>
                </a>
            </li>
            <!-- <li>
                <a href="<?= base_url('profil/profil28') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Jumlah dan Luas Ruang Terbuka Hijau</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil29') ?>">
                    <span class="number">VII.</span>
                    <span class="text">Kawasan Permukiman Kumuh</span>
                </a>
            </li> -->
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">7. Komunikasi Dan Transportasi</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil30') ?>">
                    <span class="number">I.</span>
                    <span class="text">Pengguna Komputer</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil31') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah saran dan Media Komunikasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil32') ?>">
                    <span class="number">III.</span>
                    <span class="text">Penyedia Jaringan GSM (GSM / Internet)</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Sarana Transportasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil33') ?>">
                    <span class="number">V.</span>
                    <span class="text">Jumlah Kenderaan Bermotor dan Tidak Bermotor</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil34') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Jumlah Bengkel </span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">8. Perdagangan Industri dan Energi</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil35') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Fasilitas Perdagangan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil36') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Pangkalan/Agen LPG dan Minyak Tangkap</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil37') ?>">
                    <span class="number">III.</span>
                    <span class="text">Jumlah Fasilitas Usaha Industri Kecil Menengah</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil38') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Jumlah Rumah Tangga Menurut Bahan Bakar / Energi Utama</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil39') ?>">
                    <span class="number">V.</span>
                    <span class="text">Penggunaan Energi Utama Untuk Penerangan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil40') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Jumlah Usaha Penggalian/Pertambangan Rakyat</span>
                </a>
            </li>



            <!-- <li>
                <a href="<?= base_url('profil/profil39') ?>">
                    <span class="number">VII.</span>
                    <span class="text">Sarana Ibadah</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil40') ?>">
                    <span class="number">VIII.</span>
                    <span class="text">Kasus Sosial</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil41') ?>">
                    <span class="number">IX.</span>
                    <span class="text">Angka Harapan Hidup</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil42') ?>">
                    <span class="number">X.</span>
                    <span class="text">Pengeluaran Penduduk</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil43') ?>">
                    <span class="number">XI.</span>
                    <span class="text">Rata-Rata Pengeluaran Rumah Tangga</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil44') ?>">
                    <span class="number">XII.</span>
                    <span class="text">Jumlah Dan Luas Taman Makam Pahlawan</span>
                </a>
            </li> -->
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">9. Hiburan dan Olahraga</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil41') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Lapangan / Tempat Olahraga</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil42') ?>">
                    <span class="number">II.</span>
                    <span class="text">Sarana Hiburan dan Akomodasi</span>
                </a>
            </li>
            <!-- <li>
                <a href="<?= base_url('profil/profil47') ?>">
                    <span class="number">III.</span>
                    <span class="text">Pelatihan Kerja</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil48') ?>">
                    <span class="number">IV.</span>
                    <span class="text">TKI di Luar Negeri</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil49') ?>">
                    <span class="number">V.</span>
                    <span class="text">Tenaga Kerja Warga Negara Asing</span>
                </a>
            </li> -->
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">10. Keuangan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil43') ?>">
                    <span class="number">I.</span>
                    <span class="text">Fasilitas Koperasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil44') ?>">
                    <span class="number">II.</span>
                    <span class="text">Fasilitas Perbankan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil45') ?>">
                    <span class="number">III.</span>
                    <span class="text">Penerimaan Desa</span>
                </a>
            </li>
            <!-- <li>
                <a href="<?= base_url('profil/profil53') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Pendidikan Perempuan dan Anak</span>
                </a>
            </li> -->
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">11. Ketenagakerjaan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil46') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Pengangguran Menurut Tingkat Pendidikan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil47') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Penduduk Menurut Lapangan Kerja/Usaha Utama</span>
                </a>
            </li>
            <!-- <li>
                <a href="<?= base_url('profil/profil56') ?>">
                    <span class="number">III.</span>
                    <span class="text">Konsumsi Penduduk Terhadap Kelompok Bahan Pangan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil57') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Pergudangan</span>
                </a>
            </li> -->
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">12. Perumahan dan Sanitasi</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil48') ?>">
                    <span class="number">I.</span>
                    <span class="text">Kualitas Bangunan Rumah Penduduk</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil49') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Rumah Tangga Menurut Status Kepemilika</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil50') ?>">
                    <span class="number">III.</span>
                    <span class="text">Jumlah rumah Tangga Penerimah Rumah Layak Huni Menurut Sumber Dana</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil51') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Jumlah Rumah Tangga Menurut Prasarana Air bersih</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil52') ?>">
                    <span class="number">V.</span>
                    <span class="text">Drainase</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil53') ?>">
                    <span class="number">VI.</span>
                    <span class="text">Fasilitas Air Minum dan MCK</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil54') ?>">
                    <span class="number">VII.</span>
                    <span class="text">Cara Masyarakat memperoleh Air Minum</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">13. Pemerintahan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil63') ?>">
                    <span class="number">I.</span>
                    <span class="text">Pemerintahan</span>
                </a>
            </li>
            <!-- <li class="nav-header">
                <a href="#" style="color: #00A3CC;">13. Administrasi Kependudukan dan Pencatatan Sipil</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil64') ?>">
                    <span class="number">I.</span>
                    <span class="text">Administrasi Kependudukan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil65') ?>">
                    <span class="number">II.</span>
                    <span class="text">Pencatatan Sipil</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">14. Pengendalian Penduduk dan Keluarga Berencana</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil66') ?>">
                    <span class="number">I.</span>
                    <span class="text">Pengendalian Penduduk</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil67') ?>">
                    <span class="number">II.</span>
                    <span class="text">Keluarga Berencana</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">15. Perhubungan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil68') ?>">
                    <span class="number">I.</span>
                    <span class="text">Transportasi Darat</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil69') ?>">
                    <span class="number">III.</span>
                    <span class="text">Transportasi Laut</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">16. Komunikasi dan Informatika</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil70') ?>">
                    <span class="number">I.</span>
                    <span class="text">Telekomunikasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil71') ?>">
                    <span class="number">II.</span>
                    <span class="text">Pos</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil72') ?>">
                    <span class="number">III.</span>
                    <span class="text">Layanan Media Elektronik</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil73') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Media Cetak</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">17. Koperasi, Usaha Kecil dan Menengah</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil74') ?>">
                    <span class="number">I.</span>
                    <span class="text">UMKM Perbidang Usaha </span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil75') ?>">
                    <span class="number">II.</span>
                    <span class="text">Koperasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil76') ?>">
                    <span class="number">III.</span>
                    <span class="text">Perbankan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">18. Penanaman Modal</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil77') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Penanaman Modal Asing</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil78') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Penanaman Modal Dalam Negeri</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil79') ?>">
                    <span class="number">III.</span>
                    <span class="text">Jumlah Penanaman Modal Non PMA/PMDN</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil80') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Jenis Izin</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">19. Kepemudaan dan Olah Raga</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil81') ?>">
                    <span class="number">I.</span>
                    <span class="text">Kepemudaan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil82') ?>">
                    <span class="number">II.</span>
                    <span class="text">Olahraga</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">20. Kebudayaan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil83') ?>">
                    <span class="number">I.</span>
                    <span class="text">Sarana Dan Prasarana Seni Dan Budaya</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil84') ?>">
                    <span class="number">II.</span>
                    <span class="text">Pegiat Seni Dan Budaya</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil85') ?>">
                    <span class="number">III.</span>
                    <span class="text">Cagar Budaya</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil86') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Permuseuman</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">21. Perpustakaan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil87') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jenis Perpustakaan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">22. Kearsipan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil88') ?>">
                    <span class="number">I.</span>
                    <span class="text">Kearsipan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">23. Kelautan dan Perikanan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil89') ?>">
                    <span class="number">I.</span>
                    <span class="text">Perikanan Tangkap Laut</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil90') ?>">
                    <span class="number">II.</span>
                    <span class="text">Perikanan Budidaya</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil91') ?>">
                    <span class="number">III.</span>
                    <span class="text">Benih, Industri dan Nilai Perikanan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">24. Pariwisata</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil92') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jumlah Obyek Wisata</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil93') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jumlah Kunjungan Wisatawan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil94') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Lama Kunjungan Wisatawan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil95') ?>">
                    <span class="number">V.</span>
                    <span class="text">Jenis Penginapan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil96') ?>">
                    <span class="number">VII.</span>
                    <span class="text">Jumlah Pemandu Wisata</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil97') ?>">
                    <span class="number">VIII.</span>
                    <span class="text">Jenis Usaha Jasa Makanan/Minuman</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil98') ?>">
                    <span class="number">X.</span>
                    <span class="text">Pusat Penjualan Cenderamata</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">25. Pertanian</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil99') ?>">
                    <span class="number">I.</span>
                    <span class="text">Tanaman Pangan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil100') ?>">
                    <span class="number">II.</span>
                    <span class="text">Hortikultura</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil101') ?>">
                    <span class="number">III.</span>
                    <span class="text">Perkebunan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil102') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Peternakan Dan Kesehatan Hewan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil103') ?>">
                    <span class="number">V.</span>
                    <span class="text">Sarana Dan Prasarana Produksi Pertanian</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">26. Kehutanan</a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">27. Energi dan Sumberdaya Mineral</a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">28. Perdagangan</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil104') ?>">
                    <span class="number">I.</span>
                    <span class="text">Sarana Perdagangan</span>
                </a>
            </li>
            <li>
                <a href="p<?= base_url('profil/profil105') ?>">
                    <span class="number">II.</span>
                    <span class="text">Ekspor</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil106') ?>">
                    <span class="number">III.</span>
                    <span class="text">Impor</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">29. Perindustrian</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil107') ?>">
                    <span class="number">I.</span>
                    <span class="text">Jenis Industri Kecil</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil108') ?>">
                    <span class="number">II.</span>
                    <span class="text">Jenis Industri Sedang</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil109') ?>">
                    <span class="number">III.</span>
                    <span class="text">Jenis Industri Besar</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil110') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Jumlah Industri Besar Yang Menerapkan K3</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil111') ?>">
                    <span class="number">V.</span>
                    <span class="text">Industri Rumah Tangga Wajib Ijin Gangguan</span>
                </a>
            </li>
            <li class="nav-header">
                <a href="#" style="color: #00A3CC;">30. Transmigrasi</a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil112') ?>">
                    <span class="number">I.</span>
                    <span class="text">Pemukiman Transmigrasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil113') ?>">
                    <span class="number">II.</span>
                    <span class="text">Pencadangan Lahan Permukiman Transmigrasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil114') ?>">
                    <span class="number">III.</span>
                    <span class="text">Pembangunan Permukiman Transmigrasi</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('profil/profil115') ?>">
                    <span class="number">IV.</span>
                    <span class="text">Kota Terpadu Mandiri (KTM) Kawasan Transmigrasi</span>
                </a>
            </li> -->
        </ul>
    </div>