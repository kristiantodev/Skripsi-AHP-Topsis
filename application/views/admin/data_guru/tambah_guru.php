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
                <h3 class="text-themecolor text-uppercase mb-0">Data Guru</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item active">Data Guru</li>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fa fa-edit"></i> Form Tambah Guru</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('data_guru/tambah_guru'); ?>">
                            <div class="form-group row mb-3">
                                <h4 for="nip" class="col-sm-4 text-center col-form-label">NIP</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-link"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP" value="<?= set_value('nip') ?>">
                                    </div>
                                    <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="nama_guru" class="col-sm-4 text-center col-form-label">Nama Guru</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-address-card"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Masukan Nama Guru" value="<?= set_value('nama_guru') ?>">
                                    </div>
                                    <?= form_error('nama_guru', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="jk" class="col-sm-4 text-center col-form-label">Jenis Kelamin</h4>
                                <div class="col-sm-8">
                                    <div class="demo-radio-button">
                                        <input type="radio" name="jk" id="jk1" class="with-gap radio-col-blue" value="Laki-laki" />
                                        <label for="jk1">Laki-laki</label>
                                        <input type="radio" name="jk" id="jk2" class="with-gap radio-col-blue" value="Perempuan" />
                                        <label for="jk2">Perempuan</label>
                                    </div>
                                    <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="email" class="col-sm-4 text-center col-form-label">Email</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="ti-email"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email') ?>">
                                    </div>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="alamat" class="col-sm-4 text-center col-form-label">Alamat</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success mx-auto" type="button">
                                                <i class="ti-location-pin"></i>
                                            </button>
                                        </div>
                                        <textarea class="form-control" id="alamat" name="alamat" type="text" placeholder="Masukan Alamat"></textarea>
                                    </div>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 ml-md-auto">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?= base_url('data_guru'); ?>" class="btn btn-danger btn-sm">
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