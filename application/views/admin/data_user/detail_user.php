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
                <h3 class="text-themecolor text-uppercase mb-0">Data User</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">Management Users</li>
                    <li class="breadcrumb-item active">Data User</li>
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
                            <img src="<?= base_url('assets/uploads/profil/') . $datauser->image ?>" alt="" class="rounded-circle" width="250" height="250" />
                            <h4 class="card-title mt-2"><?= $datauser->nama_user ?></h4>
                            <h6 class="card-subtitle"><?= $datauser->level ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Detail User</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-3">
                                <h4 for="username" class="col-sm-4 col-form-label text-center">Username</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button"><i class="fas fa-link"></i></button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datauser->username; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="nama_user" class="col-sm-4 col-form-label text-center">Nama</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button"><i class="fas fa-address-card"></i></button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datauser->nama_user; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="email" class="col-sm-4 col-form-label text-center">Email</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="ti-email"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datauser->email; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="id_level" class="col-sm-4 col-form-label text-center">Level</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="far fa-user"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $datauser->level; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="status" class="col-sm-4 col-form-label text-center">Status</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="far fa-sun"></i>
                                            </button>
                                        </div>
                                        <?php if ($datauser->active == '1') { ?>
                                            <input type="text" class="form-control" value="Aktif" readonly>
                                        <?php } else { ?>
                                            <input type="text" class="form-control" value="Tidak Aktif" readonly>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="date_created" class="col-sm-4 col-form-label text-center">Tanggal Buat</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="far fa-calendar-alt"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= date('d F Y', strtotime($datauser->date_created)); ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ml-md-auto ">
                                <a href="<?= base_url('data_user'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Kembali</a>
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