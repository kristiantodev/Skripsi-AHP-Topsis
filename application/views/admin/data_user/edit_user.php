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
        <div class="row el-element-overlay">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fa fa-edit"></i> Form Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('data_user/edit_user'); ?>" enctype="multipart/form-data">
                            <input type="hidden" id="id" name="id" value="<?= $datauser->id_user; ?>">

                            <div class="form-group row mb-3">
                                <h4 for="username" class="col-sm-4 text-center col-form-label">Username</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-link"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= $datauser->username ?>">
                                    </div>
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="nama_user" class="col-sm-4 text-center col-form-label">Nama</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-address-card"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan Nama" value="<?= $datauser->nama_user ?>">
                                    </div>
                                    <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= $datauser->email ?>">
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
                                            <option disable selected>-- Pilih Level --</option>
                                            <?php $no = 1;
                                            foreach ($level as $key => $data) :
                                                if ($datauser->id_level == $data['id_level']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                            ?>
                                                <option <?= $selected; ?> value="<?= $data['id_level']; ?>">
                                                    <?= $no++ ?>. <?= $data['level']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="image" class="col-sm-4 text-center col-form-label">Image</h4>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="<?= base_url("assets/uploads/profil/") . $datauser->image; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" name="image" id="image" for="image">
                                        </div>
                                    </div>
                                    <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 ml-md-auto">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-save"></i> Update</button>
                                    <a href="<?= base_url('data_user'); ?>" class="btn btn-danger btn-sm">
                                        <i class="fa fa-undo"></i> Kembali
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