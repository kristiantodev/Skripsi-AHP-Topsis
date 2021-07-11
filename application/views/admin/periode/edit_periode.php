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
                <h3 class="text-themecolor text-uppercase mb-0">Periode</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item active">Periode</li>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fas fa-edit"></i> Form Edit Periode</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('periode/edit_periode'); ?>">
                            <input type="hidden" id="id" name="id" value="<?= $periode->id_periode; ?>">

                            <div class="form-group row mb-3">
                                <h4 for="tahun_akademik" class="col-sm-3 text-center col-form-label">Tahun Akademik</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="far fa-calendar-alt"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik" placeholder="Masukan Tahun Akademik" value="<?= $periode->tahun_akademik ?>">
                                    </div>
                                    <?= form_error('tahun_akademik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="semester" class="col-sm-3 text-center col-form-label">Semester</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-success" type="button">
                                                <i class="far fa-calendar-check"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" id="semester" name="semester" placeholder="Masukan Semester" value="<?= $periode->semester ?>">
                                    </div>
                                    <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 mx-auto">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Update</button>
                                    <a href="<?= base_url('periode'); ?>" class="btn btn-danger btn-sm">
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