<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar bg-dark">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= base_url('admin') ?>">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <img src="<?= base_url('assets/') ?>images/logo-smk.png" style="width:25px; height:25px" alt="homepage" class="dark-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                        <!-- dark Logo text -->
                        <img src="<?= base_url('assets/') ?>images/logo-text-smk.png" width="200" alt="homepage" class="dark-logo" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= base_url('assets/uploads/profil/') . $session['image'] ?>" alt="user" class="profile-pic rounded-circle">
                            <span><?= $session['nama_user'] ?></span></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="<?= base_url('assets/uploads/profil/') . $session['image'] ?>" alt="user">
                                        </div>
                                        <div class="u-text">
                                            <h6><?= $session['nama_user'] ?></h6>
                                            <a href="<?= base_url('profilku'); ?>" class="btn btn-rounded btn-info btn-sm">Lihat Profil</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="<?= base_url('login/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->