
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
                <h3 class="text-themecolor text-uppercase mb-3">Penilaian Periode : <?php echo $periodeAktif->tahun_akademik?> - <?php echo $periodeAktif->semester?></h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Perhitungan</a>
                    </li>
                    <li class="breadcrumb-item">TOPSIS</li>
                    <li class="breadcrumb-item active">Perankingan</li>
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
                        <h4 class="m-0 font-weight-bold text-primary">Analisis Perankingan Alternatif dengan Metode TOPSIS</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="m-0 font-weight-bold text-primary">Hasil Penilaian Alternatif : </h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                      <th class="font-weight-bold"><font color="white">NIS</font></th>
                                        <th class="font-weight-bold"><font color="white">Nama Siswa</font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                    </tr>

                                    <?php $no=1;
         foreach ($alternatif as $s): ?>
                                    <tr>
                                    <td><?php echo $s->nis ?></td>
                                    <td><?php echo $s->nama_siswa ?></td>
                                    <td align="center"><?php echo $s->nilai_c1?></td>
                                    <td align="center"><?php echo $s->nilai_c2 ?></td>
                                    <td align="center"><?php echo $s->nilai_c3?></td>
                                    <td align="center"><?php echo $s->nilai_c4 ?></td>
                                    <tr>
                                         <?php endforeach; ?>
                                    
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                
                            </table>
                        </div>


                        <h5 class="m-0 font-weight-bold text-primary">Matriks Keputusan Ternomalisasi : </h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                      <th class="font-weight-bold"><font color="white">NIS</font></th>
                                        <th class="font-weight-bold"><font color="white">Nama Siswa</font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                    </tr>

                                    <?php $no=1; $n_c1=0; $n_c2=0; $n_c3=0; $n_c4=0;
         foreach ($alternatif as $s): ?>

          <?php

               $n_c1 = $n_c1 + pow($s->nilai_c1,2);
               $n_c2 = $n_c2 + pow($s->nilai_c2,2);
               $n_c3 = $n_c3 + pow($s->nilai_c3,2);
               $n_c4 = $n_c4 + pow($s->nilai_c4,2);

           ?>
               <?php endforeach; ?>

               <?php

               $nn_c1 = sqrt($n_c1);
               $nn_c2 = sqrt($n_c2);
               $nn_c3 = sqrt($n_c3);
               $nn_c4 = sqrt($n_c4);

                ?>

                                    <?php $no=1;
         foreach ($alternatif as $s): ?>

          <?php

               $nilai_normalisasi_c1 = number_format($s->nilai_c1/$nn_c1,3);
               $nilai_normalisasi_c2 = number_format($s->nilai_c2/$nn_c2,3);
               $nilai_normalisasi_c3 = number_format($s->nilai_c2/$nn_c3,3);
               $nilai_normalisasi_c4 = number_format($s->nilai_c2/$nn_c4,3);
           ?>
                                    <tr>
                                    <td><?php echo $s->nis ?></td>
                                    <td><?php echo $s->nama_siswa ?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_c1?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_c2 ?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_c3?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_c4 ?></td>
                                    <tr>
                                         <?php endforeach; ?>
                                    
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                
                            </table>
                        </div>

                              <h5 class="m-0 font-weight-bold text-primary">Matriks Keputusan Ternomalisasi Terbobot : </h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                      <th class="font-weight-bold"><font color="white">NIS</font></th>
                                        <th class="font-weight-bold"><font color="white">Nama Siswa</font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                    </tr>

                                    

                                    <?php $no=1; 
                                    $max1=0; 
                                    $max2=0; 
                                    $max3=0; 
                                    $max4=0; 

                                    $min1=10; 
                                    $min2=10; 
                                    $min3=10; 
                                    $min4=10;

         foreach ($alternatif as $s): ?>

          <?php

          $nilai_normalisasi_c1_1 = number_format($s->nilai_c1/$nn_c1,3);
               $nilai_normalisasi_c2_1 = number_format($s->nilai_c2/$nn_c2,3);
               $nilai_normalisasi_c3_1 = number_format($s->nilai_c2/$nn_c3,3);
               $nilai_normalisasi_c4_1 = number_format($s->nilai_c2/$nn_c4,3);

               $nilai_normalisasi_terbobot_c1 = number_format($nilai_normalisasi_c1_1/$nn_c1,3);
               $nilai_normalisasi_terbobot_c2 = number_format($nilai_normalisasi_c2_1/$nn_c2,3);
               $nilai_normalisasi_terbobot_c3 = number_format($nilai_normalisasi_c3_1/$nn_c3,3);
               $nilai_normalisasi_terbobot_c4 = number_format($nilai_normalisasi_c4_1/$nn_c4,3);

               if($max1 > $nilai_normalisasi_terbobot_c1){
                  $max1 = $max1;
               }else{
                $max1 = $nilai_normalisasi_terbobot_c1;
               }

               if ($min1 < $nilai_normalisasi_terbobot_c1) {
                 $min1= $min1;
               }else{
                $min1 = $nilai_normalisasi_terbobot_c1;
               }              

               if($max2 > $nilai_normalisasi_terbobot_c2){
                  $max2 = $max2;
               }else{
                $max2 = $nilai_normalisasi_terbobot_c2;
               }

               if ($min2 < $nilai_normalisasi_terbobot_c2) {
                 $min2= $min2;
               }else{
                $min2 = $nilai_normalisasi_terbobot_c2;
               }


               if($max3 > $nilai_normalisasi_terbobot_c3){
                  $max3 = $max3;
               }else{
                $max3 = $nilai_normalisasi_terbobot_c3;
               }

               if ($min3 < $nilai_normalisasi_terbobot_c3) {
                 $min3= $min3;
               }else{
                $min3 = $nilai_normalisasi_terbobot_c3;
               }

               if($max4 > $nilai_normalisasi_terbobot_c4){
                  $max4 = $max4;
               }else{
                $max4 = $nilai_normalisasi_terbobot_c4;
               }

               if ($min4 < $nilai_normalisasi_terbobot_c4) {
                 $min4= $min4;
               }else{
                $min4 = $nilai_normalisasi_terbobot_c4;
               }


           ?>
                                    <tr>
                                    <td><?php echo $s->nis ?></td>
                                    <td><?php echo $s->nama_siswa ?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_terbobot_c1?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_terbobot_c2 ?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_terbobot_c3?></td>
                                    <td align="center"><?php echo $nilai_normalisasi_terbobot_c4 ?></td>
                                    <tr>
                                         <?php endforeach; ?>
                                    
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                
                            </table>
                        </div>


                        <h5 class="m-0 font-weight-bold text-primary">Menentuan Nilai A+ dan A- : </h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                      <th class="font-weight-bold"><font color="white"></font></th>
                            
                                        <th class="font-weight-bold"><font color="white">A+</font></th>
                                        <th class="font-weight-bold"><font color="white">A-</font></th>
                                    </tr>

                        
                                    
                                </thead>
                                <tbody>
                                    <tr align="center">
                                      <td>Y1</td>
                                      <td><?php echo $max1?></td>
                                      <td><?php echo $min1?></td>
                                    </tr>

                                    <tr align="center">
                                      <td>Y2</td>
                                      <td><?php echo $max2?></td>
                                      <td><?php echo $min2?></td>
                                    </tr>

                                    <tr align="center">
                                      <td>Y3</td>
                                      <td><?php echo $max3?></td>
                                      <td><?php echo $min3?></td>
                                    </tr>

                                    <tr align="center">
                                      <td>Y4</td>
                                      <td><?php echo $max4?></td>
                                      <td><?php echo $min4?></td>
                                    </tr>

                                </tbody>
                                
                            </table>
                        </div>


                        <h5 class="m-0 font-weight-bold text-primary">Jarak solusi ideal positif dan negatif : </h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                      <th class="font-weight-bold"><font color="white"></font></th>
                            
                                        <th class="font-weight-bold"><font color="white"></font></th>
                                        <th class="font-weight-bold"><font color="white"></font></th>
                                        <th class="font-weight-bold"><font color="white"></font></th>
                                    </tr>

                        
                                    
                                </thead>
                                <tbody>

                                  <?php $a=1; $b=1;

         foreach ($alternatif as $s): ?>

          <?php

          $nilai_normalisasi_c1_2 = number_format($s->nilai_c1/$nn_c1,3);
               $nilai_normalisasi_c2_2 = number_format($s->nilai_c2/$nn_c2,3);
               $nilai_normalisasi_c3_2 = number_format($s->nilai_c2/$nn_c3,3);
               $nilai_normalisasi_c4_2 = number_format($s->nilai_c2/$nn_c4,3);

               $nilai_normalisasi_terbobot_c1_1 = number_format($nilai_normalisasi_c1_2/$nn_c1,3);
               $nilai_normalisasi_terbobot_c2_1 = number_format($nilai_normalisasi_c2_2/$nn_c2,3);
               $nilai_normalisasi_terbobot_c3_1 = number_format($nilai_normalisasi_c3_2/$nn_c3,3);
               $nilai_normalisasi_terbobot_c4_1 = number_format($nilai_normalisasi_c4_2/$nn_c4,3);

               $Dplus = number_format(sqrt(
                             (pow($max1-$nilai_normalisasi_terbobot_c1_1,2)) +
                             (pow($max2-$nilai_normalisasi_terbobot_c2_1,2)) +
                             (pow($max3-$nilai_normalisasi_terbobot_c3_1,2)) +
                             (pow($max4-$nilai_normalisasi_terbobot_c4_1,2))
                           ),3);

               $Dmin  = number_format(sqrt(
                        (pow($nilai_normalisasi_terbobot_c1_1 - $min1 ,2)) + 
                        (pow($nilai_normalisasi_terbobot_c2_1 - $min2 ,2)) +
                        (pow($nilai_normalisasi_terbobot_c3_1 - $min3 ,2)) +
                        (pow($nilai_normalisasi_terbobot_c4_1 - $min4 ,2))
               ),3);


           ?>
           
                                    <tr align="center">
                                      <td>D<?php echo $a++?>+</td>
                                      <td><?php echo $Dplus?></td>
                                      <td>D<?php echo $b++?>-</td>
                                      <td><?php echo $Dmin?></td>
                                    </tr>
<?php endforeach; ?>
                                  

                                </tbody>
                                
                            </table>
                        </div>


                        <h5 class="m-0 font-weight-bold text-primary">Nilai Preferensi : </h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                      <th class="font-weight-bold"><font color="white">No.</font></th>
                            
                                        <th class="font-weight-bold"><font color="white">NIS</font></th>
                                        <th class="font-weight-bold"><font color="white">Nama Siswa</font></th>
                                        <th class="font-weight-bold"><font color="white">Nilai Preferensi</font></th>
                                    </tr>

                        
                                    
                                </thead>
                                <tbody>

                                  <?php $a=1; $b=1;

         foreach ($alternatif as $s): ?>

          <?php

          $nilai_normalisasi_c1_2 = number_format($s->nilai_c1/$nn_c1,3);
               $nilai_normalisasi_c2_2 = number_format($s->nilai_c2/$nn_c2,3);
               $nilai_normalisasi_c3_2 = number_format($s->nilai_c2/$nn_c3,3);
               $nilai_normalisasi_c4_2 = number_format($s->nilai_c2/$nn_c4,3);

               $nilai_normalisasi_terbobot_c1_1 = number_format($nilai_normalisasi_c1_2/$nn_c1,3);
               $nilai_normalisasi_terbobot_c2_1 = number_format($nilai_normalisasi_c2_2/$nn_c2,3);
               $nilai_normalisasi_terbobot_c3_1 = number_format($nilai_normalisasi_c3_2/$nn_c3,3);
               $nilai_normalisasi_terbobot_c4_1 = number_format($nilai_normalisasi_c4_2/$nn_c4,3);

               $Dplus = number_format(sqrt(
                             (pow($max1-$nilai_normalisasi_terbobot_c1_1,2)) +
                             (pow($max2-$nilai_normalisasi_terbobot_c2_1,2)) +
                             (pow($max3-$nilai_normalisasi_terbobot_c3_1,2)) +
                             (pow($max4-$nilai_normalisasi_terbobot_c4_1,2))
                           ),3);

               $Dmin  = number_format(sqrt(
                        (pow($nilai_normalisasi_terbobot_c1_1 - $min1 ,2)) + 
                        (pow($nilai_normalisasi_terbobot_c2_1 - $min2 ,2)) +
                        (pow($nilai_normalisasi_terbobot_c3_1 - $min3 ,2)) +
                        (pow($nilai_normalisasi_terbobot_c4_1 - $min4 ,2))
               ),3);

               $nilaiPreferensi = number_format($Dmin/($Dmin+$Dplus),3);


           ?>
           
                                    <tr>
                                      <td align="center"><?php echo $a++?></td>
                                      <td align="center"><?php echo $s->nis?></td>
                                      <td><?php echo $s->nama_siswa?></td>
                                      <td align="center"><?php echo $nilaiPreferensi?></td>
                                    </tr>
<?php endforeach; ?>
                                  

                                </tbody>
                                
                            </table>
                        </div>

 <h5 class="m-0 font-weight-bold text-primary">Hasil Akhir Perangkingan : <br><br></h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
 
  <canvas id="rank" height="100"></canvas>

   </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>

      <script src="<?php echo base_url();?>assets/js2/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>

     <script>
    
$(function () {

'use strict';

if( $('#rank').length > 0 ){
    var ctx2 = document.getElementById("rank").getContext("2d");
    var data2 = {
      labels: [

<?php foreach ($alternatif as $grafik): ?>
          "<?php echo $grafik->nis ?> - <?php echo $grafik->nama_siswa ?>",
         <?php endforeach; ?>

      ],
      datasets: [
        {
          label: "Nilai Preferensi",
          backgroundColor: "#0285b4",
          borderColor: "#0285b4",
          data: [

<?php $a=1; $b=1;

         foreach ($alternatif as $s): ?>

          <?php

          $nilai_normalisasi_c1_2 = number_format($s->nilai_c1/$nn_c1,3);
               $nilai_normalisasi_c2_2 = number_format($s->nilai_c2/$nn_c2,3);
               $nilai_normalisasi_c3_2 = number_format($s->nilai_c2/$nn_c3,3);
               $nilai_normalisasi_c4_2 = number_format($s->nilai_c2/$nn_c4,3);

               $nilai_normalisasi_terbobot_c1_1 = number_format($nilai_normalisasi_c1_2/$nn_c1,3);
               $nilai_normalisasi_terbobot_c2_1 = number_format($nilai_normalisasi_c2_2/$nn_c2,3);
               $nilai_normalisasi_terbobot_c3_1 = number_format($nilai_normalisasi_c3_2/$nn_c3,3);
               $nilai_normalisasi_terbobot_c4_1 = number_format($nilai_normalisasi_c4_2/$nn_c4,3);

               $Dplus = number_format(sqrt(
                             (pow($max1-$nilai_normalisasi_terbobot_c1_1,2)) +
                             (pow($max2-$nilai_normalisasi_terbobot_c2_1,2)) +
                             (pow($max3-$nilai_normalisasi_terbobot_c3_1,2)) +
                             (pow($max4-$nilai_normalisasi_terbobot_c4_1,2))
                           ),3);

               $Dmin  = number_format(sqrt(
                        (pow($nilai_normalisasi_terbobot_c1_1 - $min1 ,2)) + 
                        (pow($nilai_normalisasi_terbobot_c2_1 - $min2 ,2)) +
                        (pow($nilai_normalisasi_terbobot_c3_1 - $min3 ,2)) +
                        (pow($nilai_normalisasi_terbobot_c4_1 - $min4 ,2))
               ),3);

               $nilaiPreferensi = number_format($Dmin/($Dmin+$Dplus),3);


           ?>
           <?php echo $nilaiPreferensi ?>,
<?php endforeach; ?>
          ]
        }
      ]
    };
    
    var hBar = new Chart(ctx2, {
      type:"horizontalBar",
      data:data2,
      
      options: {
        tooltips: {
          mode:"label"
        },
        scales: {
          yAxes: [{
            stacked: true,
            gridLines: {
              color: "rgba(135,135,135,0)",
            },
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#0285b4"
            }
          }],
          xAxes: [{
            stacked: true,
            gridLines: {
              color: "rgba(135,135,135,0)",
            },
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#0285b4"
            }
          }],
          
        },
        elements:{
          point: {
            hitRadius:40
          }
        },
        animation: {
          duration: 3000
        },
        responsive: true,
        legend: {
          display: false,
        },
        tooltip: {
          backgroundColor:'rgba(33,33,33,1)',
          cornerRadius:0,
          footerFontFamily:"'Poppins'"
        }
        
      }
    });
  }

    

  }); // End of use strict
    </script>    