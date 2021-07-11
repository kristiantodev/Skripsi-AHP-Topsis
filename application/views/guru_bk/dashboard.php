<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor text-uppercase">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <!-- Page Slider -->
        <div id="slide" class="carousel slide img-center mb-1 mt-3" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
                <li data-target="#slide" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/images/slider-1.jpg') ?>" class="d-block w-100" style="width:400px; height:430px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/slider-2.jpg') ?>" class="d-block w-100" style="width:400px; height:430px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/slider-3.jpg') ?>" class="d-block w-100" style="width:400px; height:430px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/slider-4.jpg') ?>" class="d-block w-100" style="width:400px; height:430px" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body little-profile text-center">
                <div>
                    <img src="<?= base_url('assets/') ?>images/logo-smk.png" alt="user" width="90" />
                </div>
                <h2 class="mt-1 mb-1 font-weight-bold brand"><?= $sekolah['nama_sekolah'] ?></h2>
                <h3>"<?= $sekolah['slogan'] ?>"</h3>
                <span>Perizinan Operasional Berdasarkan <?= $sekolah['perizinan'] ?><br>
                    <?= $sekolah['alamat'] ?><br>
                    <i class="fa fa-envelope"> <?= $sekolah['email'] ?>&emsp;</i>
                    <i class="fa fa-phone"> <?= $sekolah['telepon'] ?>&emsp;</i>
                </span>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->