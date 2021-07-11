<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Data Siswa</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item active">Data Siswa</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fas fa-image"></i> Images</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <?php if ($datasiswa->jk == "Laki-laki") { ?>
                                <img src="<?= base_url('assets/uploads/profil/siswa-cowo.png') ?>" alt="" class="rounded-circle" width="250" height="250" />
                                <h4 class="card-title mt-2"><?= $datasiswa->nama_siswa ?></h4>
                                <h6 class="card-subtitle">Siswa</h6>
                            <?php } else { ?>
                                <img src="<?= base_url('assets/uploads/profil/siswa-cewe.png') ?>" alt="" class="rounded-circle" width="250" height="250" />
                                <h4 class="card-title mt-2"><?= $datasiswa->nama_siswa ?></h4>
                                <h6 class="card-subtitle">Siswa</h6>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Detail Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-3 mb-3">
                                <h4 for="nis" class="col-sm-4 col-form-label text-center">NIS</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button"><i class="fas fa-link"></i></button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datasiswa->nis; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="nama_siswa" class="col-sm-4 col-form-label text-center">Nama</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button"><i class="fas fa-address-card"></i></button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datasiswa->nama_siswa; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="jk" class="col-sm-4 col-form-label text-center">Jenis Kelamin</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="mdi mdi-gender-male-female"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datasiswa->jk; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="id_kelas" class="col-sm-4 col-form-label text-center">Kelas</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-home"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datasiswa->kelas; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="alamat" class="col-sm-4 col-form-label text-center">Alamat</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success mx-auto" type="button">
                                                <i class="ti-location-pin"></i>
                                            </button>
                                        </div>
                                        <textarea class="form-control" type="text" style="height: 70px" readonly><?= $datasiswa->alamat; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ml-md-auto ">
                                <a href="<?= base_url('data_siswa'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->