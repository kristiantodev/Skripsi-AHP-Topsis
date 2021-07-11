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
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="el-card-item pb-3">
                        <div class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center">
                            <img src="<?= base_url('assets/') ?>images/logo-smk.png" class="d-block position-relative w-100" alt="user" />
                            <div class="el-overlay w-100 overflow-hidden">
                                <ul class="list-style-none el-info text-white text-uppercase d-inline-block p-0">
                                    <li class="el-item d-inline-block my-0  mx-1">
                                        <a class="btn default btn-outline image-popup-vertical-fit el-link text-white border-white" href="<?= base_url('assets/') ?>images/logo-smk.png">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content text-center">
                            <h4 class="card-title mt-2">LOGO</h4>
                            <h5 class="card-subtitle">SMK NEGERI 1 KEDAWUNG</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Profil Sekolah</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right mb-1">
                            <a href="<?= base_url('profil_sekolah/edit/') . $sekolah['id_sekolah']; ?>" class="btn btn-info btn-sm">
                                <i class="fa fa-edit"></i> Edit Profil
                            </a>
                        </div>
                        <?= $this->session->flashdata('message'); ?>

                        <form class="form">
                            <div class="form-group mt-4 row">
                                <h4 for="example-text-input" class="col-sm-3 col-form-label">Nama Instansi</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="<?= $sekolah['nama_sekolah'] ?>" id="example-text-input" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h4 for="example-search-input" class="col-sm-3 col-form-label">Slogan</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" type="search" value="<?= $sekolah['slogan'] ?>" id="example-search-input" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h4 for="example-search-input" class="col-sm-3 col-form-label">Perizinan</h4>
                                <div class="col-sm-9">
                                    <textarea class="form-control" type="text" readonly><?= $sekolah['perizinan'] ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h4 for="example-text-input" class="col-sm-3 col-form-label">Telepon</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="<?= $sekolah['telepon'] ?>" id="example-text-input" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h4 for="example-search-input" class="col-sm-3 col-form-label">Email</h4>
                                <div class="col-sm-9">
                                    <input class="form-control" type="search" value="<?= $sekolah['email'] ?>" id="example-search-input" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h4 for="example-text-input" class="col-sm-3 col-form-label">Alamat</h4>
                                <div class="col-sm-9">
                                    <textarea class="form-control" type="text" readonly><?= $sekolah['alamat'] ?>
                                        </textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <!-- Nav tabs -->
            <h4>
                <ul class="nav nav-tabs profile-tab font-weight-bold text-uppercase" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#sambutan" role="tab">Sambutan</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#visi" role="tab">Visi</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#misi" role="tab">Misi</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tujuan" role="tab">Tujuan</a> </li>
                </ul>
            </h4>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="sambutan" role="tabpanel">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>Teknologi Informasi Web khususnya, menjadi sarana bagi SMK Negeri 1 Kedawung untuk memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula, sekolah siap menerima saran, tanggapan konstruktif dari semua pihak yang akhirnya sekolah akan mampu menjawab keinginan yang di butuhkan masyarakat yaitu; membekali peserta didik yang kompeten dan berkarakter sesuai dengan visi dan misi SMK Negeri 1 Kedawung.</h4><br>
                            <label>-- Kepala Sekolah --</label>
                            <h4>IR. SUCIPTO HADI WALUYO, MM</h4>
                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="visi" role="tabpanel">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="font-weight-bold">"TERWUJUDNYA SEKOLAH KEJURUAN YANG UNGGUL BERLANDASKAN RELIGI, PENGETAHUAN DAN SKILL YANG KOMPETITIF."</h4>
                        </div>
                    </div>
                </div>
                <!--third tab-->
                <div class="tab-pane" id="misi" role="tabpanel">
                    <div class="card-body">
                        <h4>
                            <p class="pl-4">
                                Misi yang dilakukan oleh SMK Negeri 1 Kedawung Cirebon untuk menunjang visinya, yakni :
                            </p>
                            <ol class="pl-5">
                                <li>Membina dan mengembangkan potensi peserta didik menjadi manusia yang beriman dan bertaqwa, memiliki mental yang tangguh, fisik yang prima, dan bertanggung jawab</li>
                                <li>Menanamkan dan memupuk peserta didik menjadi generasi yang memiliki rasa kebangsaan dan nasionalisme yang tinggi</li>
                                <li>Melaksanakan kurikulum yang sesuai dengan kebutuhan era globalisasi</li>
                                <li>Melaksanakan pembelajaran yang mengacu kepada standar sertifikasi profesi</li>
                                <li>Meningkatkan prestasi dan kreatifitas dalam akademik dan non akademik</li>
                                <li>Meningkatkan mutu pelayanan terhadap stakeholder</li>
                            </ol>
                        </h4>
                    </div>
                </div>
                <!--fourth tab-->
                <div class="tab-pane" id="tujuan" role="tabpanel">
                    <div class="card-body">
                        <h4>
                            <p class="pl-4">
                                Tujuan strategis institusi dirumuskan dalam Rencana Strategis SMK Negeri 1 Kedawung Cirebon, yakni :
                            </p>
                            <ol class="pl-5">
                                <li>Menyiapkan lulusan yang memiliki akhlak yang baik, memiliki fisik dan mental yang kuat</li>
                                <li>Menyiapkan lulusan yang memiliki rasa kebangsaan yang tinggi</li>
                                <li>Memiliki lulusan yang memiliki wawasan global</li>
                                <li>Menyiapkan lulusan yang memiliki skill yang sesuai standar sertifikasi profesi</li>
                                <li>Mencetak peserta didik yang berprestasi dan berkreativitas yang tinggi dan inovatif</li>
                                <li>Melaksanakan pelayanan prima</li>
                            </ol>
                        </h4>
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