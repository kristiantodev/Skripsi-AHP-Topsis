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
                <h3 class="text-themecolor text-uppercase mb-0">Tentang Aplikasi</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Tentang Aplikasi</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Tentang Aplikasi</h4>
                    </div>
                    <div class="card-body">
                        <p style="font-size: 15px; text-align: justify">
                            <span class="font-weight-bold">Aplikasi Penentuan Siswa Bermasalah Bidang Akademik</span> ini digunakan untuk menilai siswa-siswi yang bermasalah dalam bidang akademik. Dimana terdapat kriteria-kriteria yang dinilai ialah <span class="font-weight-bold"> Nilai Raport, Kehadiran, Kedisiplinan Pengumpulan Tugas, dan Pemahaman Materi.</span> Aplikasi ini menggunakan gabungan <span class="font-italic font-weight-bold"> Metode AHP (Analytic Hierarchy Process) dan TOPSIS (Technique For Order Preference By Similarity To Ideal Solution).</span> Metode AHP digunakan untuk menentukan bobot kriteria siswa bermasalah. Sedangkan Metode TOPSIS digunakan untuk melakukan perangkingan pada siswa bermasalah untuk didapatkan hasil akhirnya. <br><br>

                            Penilaian ini dilakukan oleh Guru Walikelas tiap siswa yang menilai beberapa aspek kriteria dengan cara memilih angka (1-5) pada kolom skor sebagai berikut :<br>
                        </p>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="font-weight-bold">Range Nilai Kriteria</th>
                                        <th class="font-weight-bold">Keterangan</th>
                                        <th class="font-weight-bold">Penilaian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <td class="font-weight-bold text-inverse"> > 90 </td>
                                        <td><span class="badge badge-info">Sangat Baik</span></td>
                                        <td class="font-weight-bold text-info"> 1 </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td class="font-weight-bold text-inverse"> 81 - 90 </td>
                                        <td><span class="badge badge-success">Baik</span></td>
                                        <td class="font-weight-bold text-info"> 2 </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td class="font-weight-bold text-inverse"> 71 - 80 </td>
                                        <td><span class="badge badge-secondary">Cukup</span></td>
                                        <td class="font-weight-bold text-info"> 3 </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td class="font-weight-bold text-inverse"> 61 - 70 </td>
                                        <td><span class="badge badge-warning">Kurang</span></td>
                                        <td class="font-weight-bold text-info"> 4 </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td class="font-weight-bold text-inverse">
                                            <= 60 </td>
                                        <td><span class="badge badge-danger">Sangat Kurang</span></td>
                                        <td class="font-weight-bold text-info"> 5 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->