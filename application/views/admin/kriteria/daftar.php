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
                <h3 class="text-themecolor text-uppercase mb-3">Kriteria</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item active">Kriteria</li>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Kriteria</h4>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="font-weight-bold" width="20px">No</th>
                                        <th class="font-weight-bold">Kriteria</th>
                                        <th class="font-weight-bold">Bobot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kriteria as $key => $data) : ?>
                                        <tr style="text-align: center;">
                                            <td width="40px"><?= $no++ ?>.</td>
                                            <td><?= $data->kriteria ?></td>
                                            <td><?= $data->bobot ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr style="text-align: center;" class="text-bold">
                                        <th colspan="2" class="font-weight-bold" bgcolor="#007acc">Total Bobot</th>
                                        <th class="font-weight-bold" bgcolor="#006bb3">
                                            <?= $sumbobot ?>
                                        </th>
                                    </tr>
                                </tfoot>
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
    <!-- ==============================================================