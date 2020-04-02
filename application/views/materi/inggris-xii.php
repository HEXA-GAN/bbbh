<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?=base_url('assets/')?>img/favicon.png" type="image/png">
    <title>Learnify - Belajar Dimana Saja & Kapan Saja !</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/materi_style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">

    <!--================Header Menu Area =================-->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?=base_url('welcome')?>"><img
                            src="<?=base_url('assets/')?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?=base_url('user')?>">Beranda</a>
                            </li>
                            </li>

                            </li>
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Hai, <?php
$data['user'] = $this->db->get_where('siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?>
                            <li class="nav-item "><a class="nav-link text-danger"
                                    href="<?=base_url('welcome/logout')?>">Log Out</a>
                            </li>
                    </div></a></li>

                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins">
                <div class="col-md-12 mt-1 text-center">
                    <h1 class="display-4" style="color: black; font-family:'poppins'" data-aos="fade-down"
                        data-aos-duration="1400">Silahkan pilih materi yang akan kamu pelajari.
                    </h1>
                    <h4 data-aos="fade-down" data-aos-duration="1700"><?php
$data['user'] = $this->db->get_where('siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?> 😄</h3>
                        <p>Bahasa Inggris - Kelas XII</p>
                        <p data-aos="fade-down" data-aos-duration="1800">Silahkan pilih materi yang akan kamu akses
                            dibawah
                            ini!
                        </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">

            <?php foreach ($materi as $u) {?>

            <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1200">
                <div class="card materi w-150 border-0">
                    <div class="card-body p-5">
                        <h1 class="card-title"><?=$u->nama_guru;?></h1>
                        <p class=" card-text">
                            <?=substr($u->deskripsi, 0, 100);?>&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.
                        </p>
                        <a href="<?php echo site_url('materi/belajar/' . $u->id); ?>" class="btn btn-white">Pelajari
                            Sekarang !</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>



    <br>


    <script>
    $('.tab1_btn').prop('disabled', !$('.tab1_chk:checked')
        .length); //initially disable/enable button based on checked length
    $('input[type=checkbox]').click(function() {
        if ($('.tab1_chk:checkbox:checked').length > 0) {
            $('.btn-submit').prop('disabled', false);
        } else {
            $('.btn-submit').prop('disabled', true);
        }
    });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>