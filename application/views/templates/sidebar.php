<?php if ($this->session->userdata('id_level') == "1") { ?>
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar bg-dark">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile position-relative" style="background: url(<?= base_url('assets/images/background/profile-bg.jpg') ?>)">
                <!-- User profile image -->
                <div class="profile-img">
                    <img src="<?= base_url('assets/uploads/profil/') . $session['image'] ?>" alt="user" class="profile-pic rounded-circle">
                </div>
                <!-- User profile text-->
                <div class="profile-text">
                    <a href="<?= base_url('profilku'); ?>"><?= $session['nama_user'] ?></a>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav bg-dark">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('admin') ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Dashboard </span></a></li>

                    <li class="nav-devider"></li>

                    <li class="nav-small-cap">PERSONAL</li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('profil_sekolah') ?>" aria-expanded="false"><i class="mdi mdi-school"></i><span class="hide-menu">Profil Sekolah </span></a>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-folder-multiple"></i><span class="hide-menu">Data Master</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url('data_guru') ?>"><i class="mdi mdi-account-circle"></i> Data Guru</a></li>
                            <li><a href="<?= base_url('data_siswa') ?>"><i class="mdi mdi-account-circle"></i> Data Siswa</a></li>
                            <li><a href="<?= base_url('periode') ?>"><i class="far fa-calendar-alt"></i> Periode</a></li>
                            <li><a href="<?= base_url('kriteria') ?>"><i class="mdi mdi-bookmark"></i> Kriteria</a></li>
                        </ul>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-animation"></i><span class="hide-menu">Data SPK</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url('data_spk/bobot') ?>"><i class="mdi mdi-pencil"></i> Bobot Kriteria</a></li>
                            <li><a href="<?= base_url('data_spk/ranking') ?>"><i class="mdi mdi-pen"></i> Perangkingan</a></li>
                            <li><a href="#"><i class="mdi mdi-file"></i> Laporan</a></li>
                        </ul>
                    </li>

                    <li class="nav-devider"></li>

                    <li class="nav-small-cap">SETTING</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span class="hide-menu">Manag. Users</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?= base_url('data_user') ?>"><i class="mdi mdi-account"></i> Data User</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('tentang_aplikasi'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">Tentang Aplikasi</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer bg-dark">
            <!-- item-->
            <a href="<?= base_url('tentang_aplikasi'); ?>" class="link" data-toggle="tooltip" title="Tentang Aplikasi"><i class="fas fa-info-circle"></i></a>
            <a href="<?= base_url('login/logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            <a href="#" class="link" data-toggle="tooltip"></a>
        </div>
        <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

<?php } else if ($this->session->userdata('id_level') == "2") { ?>

    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar bg-dark">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile position-relative" style="background: url(<?= base_url('assets/images/background/profile-bg.jpg') ?>)">
                <!-- User profile image -->
                <div class="profile-img">
                    <img src="<?= base_url('assets/uploads/profil/') . $session['image'] ?>" alt="user" class="profile-pic rounded-circle">
                </div>
                <!-- User profile text-->
                <div class="profile-text">
                    <a href="<?= base_url('profilku'); ?>"><?= $session['nama_user'] ?></a>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav bg-dark">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('guru_walikelas') ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Dashboard </span></a></li>

                    <li class="nav-devider"></li>

                    <li class="nav-small-cap">PERSONAL</li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('profilku') ?>" aria-expanded="false"><i class="fas fa-user-circle"></i><span class="hide-menu">Profil Guru</span></a>
                    </li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('penilaian/') ?>" aria-expanded="false"><i class="mdi mdi-library-books"></i><span class="hide-menu">Penilaian Kriteria</span></a>
                    </li>

                    <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-animation"></i><span class="hide-menu">Penilaian</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#"><i class="mdi mdi-pencil"></i> Bobot Kriteria</a></li>
                            <li><a href="#"><i class="mdi mdi-pen"></i> Perangkingan</a></li>
                            <li><a href="#"><i class="mdi mdi-file"></i> Laporan</a></li>
                        </ul>
                    </li> -->

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('tentang_aplikasi'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">Tentang Aplikasi</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer bg-dark">
            <!-- item-->
            <a href="<?= base_url('tentang_aplikasi'); ?>" class="link" data-toggle="tooltip" title="Tentang Aplikasi"><i class="fas fa-info-circle"></i></a>
            <a href="<?= base_url('login/logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            <a href="#" class="link" data-toggle="tooltip"></a>
        </div>
        <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

<?php } else { ?>

    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar bg-dark">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile position-relative" style="background: url(<?= base_url('assets/images/background/profile-bg.jpg') ?>)">
                <!-- User profile image -->
                <div class="profile-img">
                    <img src="<?= base_url('assets/uploads/profil/') . $session['image'] ?>" alt="user" class="profile-pic rounded-circle">
                </div>
                <!-- User profile text-->
                <div class="profile-text">
                    <a href="<?= base_url('profilku'); ?>"><?= $session['nama_user'] ?></a>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav bg-dark">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('guru_bk') ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Dashboard </span></a></li>

                    <li class="nav-devider"></li>

                    <li class="nav-small-cap">PERSONAL</li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('profilku') ?>" aria-expanded="false"><i class="fas fa-user-circle"></i><span class="hide-menu">Profil Guru</span></a>
                    </li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-library-books"></i><span class="hide-menu">Detail Penilaian</span></a>
                    </li>

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url('tentang_aplikasi'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">Tentang Aplikasi</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer bg-dark">
            <!-- item-->
            <a href="<?= base_url('tentang_aplikasi'); ?>" class="link" data-toggle="tooltip" title="Tentang Aplikasi"><i class="fas fa-info-circle"></i></a>
            <a href="<?= base_url('login/logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            <a href="#" class="link" data-toggle="tooltip"></a>
        </div>
        <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

<?php } ?>