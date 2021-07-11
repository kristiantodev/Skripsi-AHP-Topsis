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
        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Data Guru</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right mb-1">
                            <a href="<?= base_url('data_guru/tambah_guru'); ?>" class="btn btn-info btn-sm"><i class="fas fa-user-plus "></i> Tambah Guru
                            </a>
                            <!-- <a href="<?= base_url('data_guru/import'); ?>" class="btn btn-success btn-sm"><i class="fas fa-download "></i> Import Data
                            </a> -->
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="font-weight-bold" width="20px">No</th>
                                        <th class="font-weight-bold">Foto</th>
                                        <th class="font-weight-bold">NIP</th>
                                        <th class="font-weight-bold">Nama Guru</th>
                                        <th class="font-weight-bold">Jenis Kelamin</th>
                                        <th class="font-weight-bold">Status</th>
                                        <th class="font-weight-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dataguru as $key => $data) : ?>
                                        <tr style="text-align: center;">
                                            <td width="40px"><?= $no++ ?>.</td>
                                            <td>
                                                <img src="<?= base_url("assets/uploads/profil/") . $data->image ?>" class="rounded-circle" width="31" height="31">
                                            </td>
                                            <td width="150px"><?= $data->nip ?></td>
                                            <td><?= $data->nama_guru ?></td>
                                            <td><?= $data->jk ?></td>
                                            <td>
                                                <?php if ($data->active == '1') { ?>
                                                    <a href="<?= base_url('data_guru/nonaktif_status_guru/' . $data->nip); ?>" class="badge badge-success tombol-nonaktifstatus"> ACTIVE </span>
                                                    <?php } else { ?>
                                                        <a href="<?= base_url('data_guru/aktif_status_guru/' . $data->nip); ?>" class="badge badge-danger tombol-aktifstatus"> NOT ACTIVE </span>
                                                        <?php } ?>
                                            </td>
                                            <td width="200px">
                                                <a href="<?= base_url('data_guru/detail_guru/' . $data->nip); ?>" class="btn btn-info btn-sm" title="Detail">
                                                    <i class="far fa-user"></i>
                                                </a>
                                                <a href="<?= base_url('data_guru/edit_guru/' . $data->nip); ?>" class="btn btn-success btn-sm" title="Edit">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="<?php echo site_url('data_guru/hapus_guru'); ?>/<?= $data->nip; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin data <?= $data->nama_guru ?> ingin di hapus?')">
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
    <!-- ============================================================== -->