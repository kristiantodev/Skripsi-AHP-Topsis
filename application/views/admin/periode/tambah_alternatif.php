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
                <h3 class="text-themecolor text-uppercase mb-0">Daftar Alternatif</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item">Periode</li>
                    <li class="breadcrumb-item active">Daftar Alternatif</li>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fas fa-edit"></i> Filter Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('periode/tambah_alternatif/') ?>">

                            <div class="form-group row mb-3">
                                <h4 for="siswa" class="col-sm-3 text-center col-form-label"></h4>
                                <div class="col-sm-7 text-center">
                                    <select name="id_siswa" id="id_siswa" class="form-control" data-style="btn-default btn-outline">
                                        <option disabled selected>-- Pilih Siswa --</option>
                                        <?php foreach ($siswa1 as $data) : ?>
                                            <option value="<?= $data['id_siswa']; ?>">
                                                <?= $data['nama_siswa']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Proses</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fas fa-edit"></i> Data Alternatif Terpilih</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('periode/tambah_alternatif/'); ?>">

                            <div class="form-group row mb-3">
                                <h4 for="siswa" class="col-sm-3 text-center col-form-label">Nama Siswa</h4>
                                <div class="col-sm-7 text-center">
                                    <input type="text" class="form-control" id="id_siswa" name="id_siswa" value="<?= $siswa2['nama_siswa'] ?>" disabled="">

                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <h4 for="siswa" class="col-sm-3 text-center col-form-label">Wali Kelas</h4>
                                <div class="col-sm-7 text-center">
                                    <input type="text" class="form-control" id="id_walikelas" name="id_walikelas" value="<?= $siswa2['nama_guru'] ?>" disabled="">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <i class="fa fa-save"></i> Simpan</button>
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