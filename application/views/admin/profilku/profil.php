<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor text-uppercase">Profilku</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Profilku</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- <div class="card"> -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class=" font-weight-bold text-primary text-uppercase">Profilku</h4>
                    </div>
                    <img class="card-img-top w-100 profile-bg-height" style="height:200px" src="<?= base_url('assets/images/background/bg-pencil.jpg') ?>" alt="Card image cap">
                    <div class="card-body little-profile">
                        <div class="text-right">

                            <a href="<?= base_url('profilku/edit_profil/' . $session['id_user']); ?>" class="btn btn-info btn-sm"><i class="far fa-edit "></i> Edit Profil</a>
                            <a href="<?= base_url('profilku/change_password/' . $session['id_user']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-key "></i> Change Password</a>

                        </div>
                        <div class="pro-img pl-4">
                            <img src="<?= base_url('assets/uploads/profil/') . $session['image'] ?>" alt="user" class="rounded-circle shadow-sm" style="width:130px; height:130px" />
                        </div>
                        <h3 class="card-title pl-4"><?= $session['nama_user'] ?></h3>
                        <h4 class="card-subtitle pl-4"><i class="fas fa-link"></i> <?= $session['username'] ?></h4>
                        <h4 class="card-subtitle pl-4"><i class="far fa-user"></i> <?= $session['level'] ?></h4>
                        <h4 class="card-subtitle pl-4"><i class="ti-email"></i> <?= $session['email'] ?></h4>

                        <?php if ($session['active'] == '1') { ?>
                            <h4 class="card-subtitle pl-4"><i class="far fa-sun"></i> Aktif</h4>
                        <?php } else { ?>
                            <h4 class="card-subtitle pl-4"><i class="far fa-sun"></i> Tidak Aktif</h4>
                        <?php } ?>

                        <h4 class="card-subtitle pl-4"><i class="far fa-calendar-alt"></i> <?= date('d F Y', strtotime($session['date_created'])); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->