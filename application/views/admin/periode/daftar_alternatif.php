<!--============================================================== -->
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
        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase"><i class="fas fa-edit"></i> Daftar Alernatif</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right mb-1">
                            <a href="<?= base_url('periode/tambah_alternatif/') . $id_periode; ?>" class="btn btn-info btn-sm">
                                <i class="fa fa-user-plus "></i> Tambah Alternatif
                            </a>
                            <a href="<?= base_url('periode'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-undo "></i> Kembali
                            </a>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="font-weight-bold" width="20px">No</th>
                                        <th class="font-weight-bold">Tahun Akademik</th>
                                        <th class="font-weight-bold">Semester</th>
                                        <th class="font-weight-bold">NIS</th>
                                        <th class="font-weight-bold">Nama Siswa</th>
                                        <th class="font-weight-bold">Nama Walikelas</th>
                                        <th class="font-weight-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($alternatif as $key => $data) : ?>
                                        <tr style="text-align: center;">
                                            <td width="40px"><?= $no++ ?>.</td>
                                            <td><?= $data->tahun_akademik ?></td>
                                            <td><?= $data->semester ?></td>
                                            <td><?= $data->nis ?></td>
                                            <td><?= $data->nama_siswa ?></td>
                                            <td><?= $data->nama_guru ?></td>
                                            <td width="100px">
                                                <a href="<?php echo site_url('periode/hapus_alternatif'); ?>/<?= $data->id_alternatif; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin di hapus ?')">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->