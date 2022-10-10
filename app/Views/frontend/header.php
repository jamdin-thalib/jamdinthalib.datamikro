<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Etika - Diskominfo Satu Data</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="<?= base_url('assets/v2/images/cropped-logo-kominfo.png') ?>" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
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
    <!-- Loading Layer Slider -->
    <link href="<?= base_url('assets/v2/spectrum/layerslider/css/layerslider.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/v2/spectrum/css/style_profil.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/v2/spectrum/css/form_profil.css') ?>" rel="stylesheet">
    <script src="<?= base_url('assets/v2/lib/highcharts/highcharts.js') ?>"></script>
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
    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/frontend/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/frontend/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/frontend/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url('home') ?>" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">DGital</h1> -->
                    <div class="col-4">
                        <img class="img-large" src="<?= base_url('assets/frontend/img/logo-2.png') ?>" alt="Image">
                    </div>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="<?= base_url('home') ?>" class="nav-item nav-link active">HOME</a>
                        <a href="<?= base_url('home/utama') ?>" class="nav-item nav-link">DATA UTAMA</a>
                        <a href="<?= base_url('profil/index') ?>" class="nav-item nav-link">DATA DASAR</a>
                        <a href="<?= base_url('home/publikasi') ?>" class="nav-item nav-link">PUBLIKASI</a>
                        <a href="<?= base_url('home/faq') ?>" class=" nav-item nav-link">FAQ</a>
                    </div>
                    <a href="http://etika.diskominfo.bolmutkab.go.id/auth/login" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block" data-toggle="modal" data-target=""><i class="fa fa-user"></i></a>
                    <!-- <a href="http://etika.diskominfo.bolmutkab.go.id/auth/login" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login

                    </a> -->
                </div>
            </nav>
        </div>