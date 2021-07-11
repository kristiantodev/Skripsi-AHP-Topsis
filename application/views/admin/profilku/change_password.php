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
                <h3 class="text-themecolor text-uppercase mb-0">Profilku</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Profilku</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fa fa-edit"></i> Form Change Password</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('profilku/change_password'); ?>">
                            <input type="hidden" id="id" name="id" value="<?= $session['id_user']; ?>'">

                            <div class="form-group row mb-3">
                                <h4 for="nama_user" class="col-sm-4 col-form-label text-center">Nama</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button"><i class="fas fa-address-card"></i></button>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $session['nama_user']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="old_password" class="col-sm-4 text-center col-form-label">Old Password</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-lock"></i>
                                            </button>
                                        </div>
                                        <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Password Lama...">
                                    </div>
                                    <?= form_error('old_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="new_password" class="col-sm-4 text-center col-form-label">New Password</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-lock"></i>
                                            </button>
                                        </div>
                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Password Baru..." value="<?= set_value('new_password') ?>">
                                    </div>
                                    <?= form_error('new_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="passconfirm" class="col-sm-4 text-center col-form-label">Repeat Password</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" type="button">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Password Confirmation..." value="<?= set_value('passconfirm') ?>">
                                    </div>
                                    <?= form_error('passconfirm', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4 mx-auto">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Change</button>
                                    <a href="<?= base_url('profilku'); ?>" class="btn btn-danger btn-sm">
                                        <i class="fa fa-undo"></i> Back
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->