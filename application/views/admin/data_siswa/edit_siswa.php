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
                <h3 class="text-themecolor text-uppercase mb-0">Data Siswa</h3>
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
        <div class="row el-element-overlay">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fa fa-edit"></i> Form Edit Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('data_siswa/update_siswa/' . $datasiswa->nis); ?>">
                            <input type="hidden" id="id" name="id" value="<?= $datasiswa->nis; ?>">

                            <div class="form-group row mb-3 mb-3">
                                <h4 for="nis" class="col-sm-4 text-center col-form-label">NIS</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-link"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan NIS" value="<?= $datasiswa->nis ?>">
                                    </div>
                                    <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="nama_siswa" class="col-sm-4 text-center col-form-label">Nama Siswa</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-address-card"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukan Nama Siswa" value="<?= $datasiswa->nama_siswa ?>">
                                    </div>
                                    <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="jk" class="col-sm-4 text-center col-form-label">Jenis Kelamin</h4>
                                <div class="col-sm-8">
                                    <div class="demo-radio-button">
                                        <input <?= $datasiswa->jk == 'Laki-laki' ? "checked" : "" ?> type="radio" name="jk" id="jk1" class="with-gap radio-col-blue" value="Laki-laki" />
                                        <label for="jk1">Laki-laki</label>
                                        <input <?= $datasiswa->jk == 'Perempuan' ? "checked" : "" ?> type="radio" name="jk" id="jk2" class="with-gap radio-col-blue" value="Perempuan" />
                                        <label for="jk2">Perempuan</label>
                                    </div>
                                    <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <h4 for="id_kelas" class="col-sm-4 text-center col-form-label">Kelas</h4>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="btn btn-success" id="basic-addon1">
                                                <i class="fas fa-home"></i>
                                            </span>
                                        </div>
                                        <select name="id_kelas" id="id_kelas" class="form-control" data-style="btn-default btn-outline">
                                            <option disabled selected>-- Pilih Kelas --</option>
                                            <?php $no = 1;
                                            foreach ($kelas as $key => $data) :
                                                if ($datasiswa->id_kelas == $data['id_kelas']) {
                                                    $selected = "selected";
                                                } else {
                                                    $selected = "";
                                                }
                                            ?>
                                                <option <?= $selected; ?> value="<?= $data['id_kelas']; ?>">
                                                    <?= $no++ ?>. <?= $data['kelas']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                        <textarea class="form-control" id="alamat" name="alamat" type="text" style="height: 70px" placeholder="Masukan Alamat"><?= $datasiswa->alamat ?></textarea>
                                    </div>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 ml-md-auto">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-save"></i> Update</button>
                                    <a href="<?= base_url('data_siswa'); ?>" class="btn btn-danger btn-sm">
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