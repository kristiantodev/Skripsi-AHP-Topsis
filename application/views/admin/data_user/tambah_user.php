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
                    <li class="breadcrumb-item active">Data user</li>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fas fa-edit"></i> Form Tambah User</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('data_user/tambah_user'); ?>">
                            <div class="form-group row mb-3">
                                <h4 for="nama_user" class="col-sm-4 text-center col-form-label">Nama Lengkap</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-address-card"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan Nama" value="<?= set_value('nama_user') ?>">
                                    </div>
                                    <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="username" class="col-sm-4 text-center col-form-label">Username</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-link"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username') ?>">
                                    </div>
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="password" class="col-sm-4 text-center col-form-label">Password</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" value="<?= set_value('password') ?>">
                                    </div>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="passconfirm" class="col-sm-4 text-center col-form-label">Repeat Password</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" id="passconfirm" name="passconfirm" placeholder="Masukan Password Confirmation" value="<?= set_value('passconfirm') ?>">
                                    </div>
                                    <?= form_error('passconfirm', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="email" class="col-sm-4 text-center col-form-label">Email</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="ti-email"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('password') ?>">
                                    </div>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="level" class="col-sm-4 text-center col-form-label">Level</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="far fa-user"></i>
                                            </span>
                                        </div>
                                        <select name="level" id="level" class="form-control" data-style="btn-default btn-outline">
                                            <option value="" disabled selected>-- Pilih Level --</option>
                                            <?php $no = 1;
                                            foreach ($level as $key => $data) : ?>
                                                <option value="<?= $data['id_level']; ?>">
                                                    <?= $no++ ?>. <?= $data['level']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 ml-md-auto">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?= base_url('data_user'); ?>" class="btn btn-danger btn-sm">
                                        <i class="fa fa-undo"></i> Kembali
                                    </a>
                                </div>
                            </div>
                        </form>
                        </>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->