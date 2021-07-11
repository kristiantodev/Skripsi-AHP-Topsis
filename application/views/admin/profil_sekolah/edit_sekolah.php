<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor text-uppercase mb-0">Profil Sekolah</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Profil Sekolah</li>
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
            <div class="col-lg-7 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fa fa-edit"></i> Form Edit Profil Sekolah</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <input type="hidden" id="id" name="id" value="<?= $sekolah->id_sekolah; ?>">
                            <div class="form-group row mb-3">
                                <h4 for="example-text-input" class="col-sm-3 col-form-label">Nama Instansi</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" id="nama_sekolah" name="nama_sekolah" type="text" value="<?= $sekolah->nama_sekolah ?>">
                                    <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="example-search-input" class="col-sm-3 col-form-label">Slogan</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" id="slogan" name="slogan" type="text" value="<?= $sekolah->slogan ?>">
                                    <?= form_error('slogan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="example-search-input" class="col-sm-3 col-form-label">Perizinan</h4>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="perizinan" name="perizinan" type="text"><?= $sekolah->perizinan ?>
                                        </textarea>
                                    <?= form_error('perizinan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="example-text-input" class="col-sm-3 col-form-label">Telepon</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" id="telepon" name="telepon" type="text" value="<?= $sekolah->telepon ?>">
                                    <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="example-search-input" class="col-sm-3 col-form-label">Email</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" id="email" name="email" type="text" value="<?= $sekolah->email ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="example-text-input" class="col-sm-3 col-form-label">Alamat</h4>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="alamat" name="alamat" type="text"><?= $sekolah->alamat ?>
                                        </textarea>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 mx-auto">
                                    <button type="submit" name="edit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Update
                                    </button>
                                    <a href="<?= base_url('profil_sekolah'); ?>" class="btn btn-danger btn-sm">
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
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page Wrapper  -->
<!-- ============================================================== -->