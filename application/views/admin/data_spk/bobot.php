<script type="text/javascript" defer>

var c11 = 1;
var c12 = 1;
var c13 = 1;
var c14 = 1;

var c21 = 1;
var c22 = 1;
var c23 = 1;
var c24 = 1;

var c31 = 1;
var c32 = 1;
var c33 = 1;
var c34 = 1;

var c41 = 1;
var c42 = 1;
var c43 = 1;
var c44 = 1;

var total=4;
var totalCol2=4;
var totalCol3=4;
var totalCol4=4;

var r11 = 0.25;
var r12 = 0.25;
var r13 = 0.25;
var r14 = 0.25;

var r21 = 0.25;
var r22 = 0.25;
var r23 = 0.25;
var r24 = 0.25;

var r31 = 0.25;
var r32 = 0.25;
var r33 = 0.25;
var r34 = 0.25;

var r41 = 0.25;
var r42 = 0.25;
var r43 = 0.25;
var r44 = 0.25;

var totalAvg=1;
var totalAvg2=1;
var totalAvg3=1;
var totalAvg4=1;

var avg=0.25;
var avg2=0.25;
var avg3=0.25;
var avg4=0.25;


function C21(){

var options = document.getElementById("product-select").value;
  if (options == "1") {
    document.getElementById("c21").innerHTML = 1;
    c21 = 1;
    c12 = 1;
  }else if (options == "3") {
    document.getElementById("c21").innerHTML = 0.33;
    c21=0.33;
    c12=3;
  }else if (options == "5"){
    document.getElementById("c21").innerHTML = 0.2;
    c21=0.2;
    c12=5;
  }else if (options == "0.2"){
    document.getElementById("c21").innerHTML = 5;
    c21=5;
    c12=0.5;
  }else if (options == "0.33"){
    document.getElementById("c21").innerHTML = 3;
    c21=3;
    c12=0.33;
  }

  total=c11+c21+c31+c41;
  document.getElementById("total1").innerHTML = total;
  totalCol2=c12+c22+c32+c42;
  document.getElementById("total2").innerHTML = totalCol2;

  r11=c11/total;
  r21=c21/total;
  r31=c31/total;
  r41=c41/total;

  document.getElementById("r11").innerHTML=r11;
  document.getElementById("r21").innerHTML=r21;
  document.getElementById("r31").innerHTML=r31;
  document.getElementById("r41").innerHTML=r41;

  r12=c12/totalCol2;
  r22=c22/totalCol2;
  r32=c32/totalCol2;
  r42=c42/totalCol2;

  document.getElementById("r12").innerHTML=r12;
  document.getElementById("r22").innerHTML=r22;
  document.getElementById("r32").innerHTML=r32;
  document.getElementById("r42").innerHTML=r42;

  r13=c13/totalCol3;
  r23=c23/totalCol3;
  r33=c33/totalCol3;
  r43=c43/totalCol3;

  document.getElementById("r13").innerHTML=r13;
  document.getElementById("r23").innerHTML=r23;
  document.getElementById("r33").innerHTML=r33;
  document.getElementById("r43").innerHTML=r43;

  r14=c14/totalCol4;
  r24=c24/totalCol4;
  r34=c34/totalCol4;
  r44=c44/totalCol4;

  document.getElementById("r14").innerHTML=r14;
  document.getElementById("r24").innerHTML=r24;
  document.getElementById("r34").innerHTML=r34;
  document.getElementById("r44").innerHTML=r44;

  totalAvg = (r11+r12+r13+r14).toFixed(3);
  totalAvg2 = (r21+r22+r23+r24).toFixed(3);
  totalAvg3 = (r31+r32+r33+r34).toFixed(3);
  totalAvg4 = (r41+r42+r43+r44).toFixed(3);

  document.getElementById("totalAvg").innerHTML=totalAvg;
   document.getElementById("totalAvg2").innerHTML=totalAvg2;
    document.getElementById("totalAvg3").innerHTML=totalAvg3;
     document.getElementById("totalAvg4").innerHTML=totalAvg4;

 avg = (totalAvg/4).toFixed(3);
 avg2 = (totalAvg2/4).toFixed(3);
 avg3 = (totalAvg3/4).toFixed(3);
 avg4 = (totalAvg4/4).toFixed(3);

 document.getElementById("avg").innerHTML=avg;
 document.getElementById("avg2").innerHTML=avg2;
 document.getElementById("avg3").innerHTML=avg3;
 document.getElementById("avg4").innerHTML=avg4;

 document.getElementById("bobot1").value=avg;
 document.getElementById("bobot2").value=avg2;
 document.getElementById("bobot3").value=avg3;
 document.getElementById("bobot4").value=avg4;

}

function C31(){

var options2 = document.getElementById("criteria31").value;
  if (options2 == "1") {
    document.getElementById("c31").innerHTML = 1;
    c31 = 1;
    c13=1;
  }else if (options2 == "3") {
    document.getElementById("c31").innerHTML = 0.33;
    c31 = 0.33;
    c13=3;
  }else if (options2 == "5"){
    document.getElementById("c31").innerHTML = 0.2;
    c31 = 0.2;
    c13=5;
  }else if (options2 == "0.2"){
    document.getElementById("c31").innerHTML = 5;
    c31 = 5;
    c13 = 0.2;
  }else if (options2 == "0.33"){
    document.getElementById("c31").innerHTML = 3;
    c31=3;
    c13=0.33;
  }

  total=c11+c21+c31+c41;
  document.getElementById("total1").innerHTML = total;

  totalCol3=c13+c23+c33+c43;
  document.getElementById("total3").innerHTML = totalCol3;

  r11=c11/total;
  r21=c21/total;
  r31=c31/total;
  r41=c41/total;

  document.getElementById("r11").innerHTML=r11;
  document.getElementById("r21").innerHTML=r21;
  document.getElementById("r31").innerHTML=r31;
  document.getElementById("r41").innerHTML=r41;

  r12=c12/totalCol2;
  r22=c22/totalCol2;
  r32=c32/totalCol2;
  r42=c42/totalCol2;

  document.getElementById("r12").innerHTML=r12;
  document.getElementById("r22").innerHTML=r22;
  document.getElementById("r32").innerHTML=r32;
  document.getElementById("r42").innerHTML=r42;

  r13=c13/totalCol3;
  r23=c23/totalCol3;
  r33=c33/totalCol3;
  r43=c43/totalCol3;

  document.getElementById("r13").innerHTML=r13;
  document.getElementById("r23").innerHTML=r23;
  document.getElementById("r33").innerHTML=r33;
  document.getElementById("r43").innerHTML=r43;

  r14=c14/totalCol4;
  r24=c24/totalCol4;
  r34=c34/totalCol4;
  r44=c44/totalCol4;

  document.getElementById("r14").innerHTML=r14;
  document.getElementById("r24").innerHTML=r24;
  document.getElementById("r34").innerHTML=r34;
  document.getElementById("r44").innerHTML=r44;

  totalAvg = (r11+r12+r13+r14).toFixed(3);
  totalAvg2 = (r21+r22+r23+r24).toFixed(3);
  totalAvg3 = (r31+r32+r33+r34).toFixed(3);
  totalAvg4 = (r41+r42+r43+r44).toFixed(3);

  document.getElementById("totalAvg").innerHTML=totalAvg;
   document.getElementById("totalAvg2").innerHTML=totalAvg2;
    document.getElementById("totalAvg3").innerHTML=totalAvg3;
     document.getElementById("totalAvg4").innerHTML=totalAvg4;

 avg = (totalAvg/4).toFixed(3);
 avg2 = (totalAvg2/4).toFixed(3);
 avg3 = (totalAvg3/4).toFixed(3);
 avg4 = (totalAvg4/4).toFixed(3);

 document.getElementById("avg").innerHTML=avg;
 document.getElementById("avg2").innerHTML=avg2;
 document.getElementById("avg3").innerHTML=avg3;
 document.getElementById("avg4").innerHTML=avg4;

 document.getElementById("bobot1").value=avg;
 document.getElementById("bobot2").value=avg2;
 document.getElementById("bobot3").value=avg3;
 document.getElementById("bobot4").value=avg4;
}

function C32(){

var options32 = document.getElementById("criteria32").value;
  if (options32 == "1") {
    document.getElementById("c32").innerHTML = 1;
    c32=1;
    c23=1;
  }else if (options32 == "3") {
    document.getElementById("c32").innerHTML = 0.33;
    c32=0.33;
    c23= 3;
  }else if (options32 == "5"){
    document.getElementById("c32").innerHTML = 0.2;
    c32=0.2;
    c23=5;
  }else if (options32 == "0.2"){
    document.getElementById("c32").innerHTML = 5;
    c32=5;
    c23=0.2;
  }else if (options32 == "0.33"){
    document.getElementById("c32").innerHTML = 3;
    c32=3;
    c23=0.33;
  }

  totalCol2=c12+c22+c32+c42;
  document.getElementById("total2").innerHTML = totalCol2;

  totalCol3=c13+c23+c33+c43;
  document.getElementById("total3").innerHTML = totalCol3;

  r11=c11/total;
  r21=c21/total;
  r31=c31/total;
  r41=c41/total;

  document.getElementById("r11").innerHTML=r11;
  document.getElementById("r21").innerHTML=r21;
  document.getElementById("r31").innerHTML=r31;
  document.getElementById("r41").innerHTML=r41;

  r12=c12/totalCol2;
  r22=c22/totalCol2;
  r32=c32/totalCol2;
  r42=c42/totalCol2;

  document.getElementById("r12").innerHTML=r12;
  document.getElementById("r22").innerHTML=r22;
  document.getElementById("r32").innerHTML=r32;
  document.getElementById("r42").innerHTML=r42;

  r13=c13/totalCol3;
  r23=c23/totalCol3;
  r33=c33/totalCol3;
  r43=c43/totalCol3;

  document.getElementById("r13").innerHTML=r13;
  document.getElementById("r23").innerHTML=r23;
  document.getElementById("r33").innerHTML=r33;
  document.getElementById("r43").innerHTML=r43;

  r14=c14/totalCol4;
  r24=c24/totalCol4;
  r34=c34/totalCol4;
  r44=c44/totalCol4;

  document.getElementById("r14").innerHTML=r14;
  document.getElementById("r24").innerHTML=r24;
  document.getElementById("r34").innerHTML=r34;
  document.getElementById("r44").innerHTML=r44;

  totalAvg = (r11+r12+r13+r14).toFixed(3);
  totalAvg2 = (r21+r22+r23+r24).toFixed(3);
  totalAvg3 = (r31+r32+r33+r34).toFixed(3);
  totalAvg4 = (r41+r42+r43+r44).toFixed(3);

  document.getElementById("totalAvg").innerHTML=totalAvg;
   document.getElementById("totalAvg2").innerHTML=totalAvg2;
    document.getElementById("totalAvg3").innerHTML=totalAvg3;
     document.getElementById("totalAvg4").innerHTML=totalAvg4;

 avg = (totalAvg/4).toFixed(3);
 avg2 = (totalAvg2/4).toFixed(3);
 avg3 = (totalAvg3/4).toFixed(3);
 avg4 = (totalAvg4/4).toFixed(3);

 document.getElementById("avg").innerHTML=avg;
 document.getElementById("avg2").innerHTML=avg2;
 document.getElementById("avg3").innerHTML=avg3;
 document.getElementById("avg4").innerHTML=avg4;

 document.getElementById("bobot1").value=avg;
 document.getElementById("bobot2").value=avg2;
 document.getElementById("bobot3").value=avg3;
 document.getElementById("bobot4").value=avg4;

}

function C41(){

var options3 = document.getElementById("criteria41").value;
  if (options3 == "1") {
    document.getElementById("c41").innerHTML = 1;
    c41=1;
    c14=1;
  }else if (options3 == "3") {
    document.getElementById("c41").innerHTML = 0.33;
    c41=0.33;
    c14=3;
  }else if (options3 == "5"){
    document.getElementById("c41").innerHTML = 0.2;
    c41=0.2;
    c14=5;
  }else if (options3 == "0.2"){
    document.getElementById("c41").innerHTML = 5;
    c41=5;
    c14=0.2;
  }else if (options3 == "0.33"){
    document.getElementById("c41").innerHTML = 3;
    c41=3;
    c14=0.33
  }

  total=c11+c21+c31+c41;
  document.getElementById("total1").innerHTML = total;

  totalCol4=c14+c24+c34+c44;
  document.getElementById("total4").innerHTML = totalCol4;

  r11=c11/total;
  r21=c21/total;
  r31=c31/total;
  r41=c41/total;

  document.getElementById("r11").innerHTML=r11;
  document.getElementById("r21").innerHTML=r21;
  document.getElementById("r31").innerHTML=r31;
  document.getElementById("r41").innerHTML=r41;

  r12=c12/totalCol2;
  r22=c22/totalCol2;
  r32=c32/totalCol2;
  r42=c42/totalCol2;

  document.getElementById("r12").innerHTML=r12;
  document.getElementById("r22").innerHTML=r22;
  document.getElementById("r32").innerHTML=r32;
  document.getElementById("r42").innerHTML=r42;

  r13=c13/totalCol3;
  r23=c23/totalCol3;
  r33=c33/totalCol3;
  r43=c43/totalCol3;

  document.getElementById("r13").innerHTML=r13;
  document.getElementById("r23").innerHTML=r23;
  document.getElementById("r33").innerHTML=r33;
  document.getElementById("r43").innerHTML=r43;

  r14=c14/totalCol4;
  r24=c24/totalCol4;
  r34=c34/totalCol4;
  r44=c44/totalCol4;

  document.getElementById("r14").innerHTML=r14;
  document.getElementById("r24").innerHTML=r24;
  document.getElementById("r34").innerHTML=r34;
  document.getElementById("r44").innerHTML=r44;

  totalAvg = (r11+r12+r13+r14).toFixed(3);
  totalAvg2 = (r21+r22+r23+r24).toFixed(3);
  totalAvg3 = (r31+r32+r33+r34).toFixed(3);
  totalAvg4 = (r41+r42+r43+r44).toFixed(3);

  document.getElementById("totalAvg").innerHTML=totalAvg;
   document.getElementById("totalAvg2").innerHTML=totalAvg2;
    document.getElementById("totalAvg3").innerHTML=totalAvg3;
     document.getElementById("totalAvg4").innerHTML=totalAvg4;

 avg = (totalAvg/4).toFixed(3);
 avg2 = (totalAvg2/4).toFixed(3);
 avg3 = (totalAvg3/4).toFixed(3);
 avg4 = (totalAvg4/4).toFixed(3);

 document.getElementById("avg").innerHTML=avg;
 document.getElementById("avg2").innerHTML=avg2;
 document.getElementById("avg3").innerHTML=avg3;
 document.getElementById("avg4").innerHTML=avg4;

 document.getElementById("bobot1").value=avg;
 document.getElementById("bobot2").value=avg2;
 document.getElementById("bobot3").value=avg3;
 document.getElementById("bobot4").value=avg4;

}

function C42(){

var options42 = document.getElementById("criteria42").value;
  if (options42 == "1") {
    document.getElementById("c42").innerHTML = 1;
    c24=1;
    c42=1;
  }else if (options42 == "3") {
    document.getElementById("c42").innerHTML = 0.33;
    c24=3;
    c42=0.33;
  }else if (options42 == "5"){
    document.getElementById("c42").innerHTML = 0.2;
    c24=5;
    c42=0.2;
  }else if (options42 == "0.2"){
    document.getElementById("c42").innerHTML = 5;
    c24=0.2;
    c42=5;
  }else if (options42 == "0.33"){
    document.getElementById("c42").innerHTML = 3;
    c24=0.33;
    c42=3;
  }

  totalCol2=c12+c22+c32+c42;
  document.getElementById("total2").innerHTML = totalCol2;

   totalCol4=c14+c24+c34+c44;
  document.getElementById("total4").innerHTML = totalCol4;

  r11=c11/total;
  r21=c21/total;
  r31=c31/total;
  r41=c41/total;

  document.getElementById("r11").innerHTML=r11;
  document.getElementById("r21").innerHTML=r21;
  document.getElementById("r31").innerHTML=r31;
  document.getElementById("r41").innerHTML=r41;

  r12=c12/totalCol2;
  r22=c22/totalCol2;
  r32=c32/totalCol2;
  r42=c42/totalCol2;

  document.getElementById("r12").innerHTML=r12;
  document.getElementById("r22").innerHTML=r22;
  document.getElementById("r32").innerHTML=r32;
  document.getElementById("r42").innerHTML=r42;

  r13=c13/totalCol3;
  r23=c23/totalCol3;
  r33=c33/totalCol3;
  r43=c43/totalCol3;

  document.getElementById("r13").innerHTML=r13;
  document.getElementById("r23").innerHTML=r23;
  document.getElementById("r33").innerHTML=r33;
  document.getElementById("r43").innerHTML=r43;

  r14=c14/totalCol4;
  r24=c24/totalCol4;
  r34=c34/totalCol4;
  r44=c44/totalCol4;

  document.getElementById("r14").innerHTML=r14;
  document.getElementById("r24").innerHTML=r24;
  document.getElementById("r34").innerHTML=r34;
  document.getElementById("r44").innerHTML=r44;

  totalAvg = (r11+r12+r13+r14).toFixed(3);
  totalAvg2 = (r21+r22+r23+r24).toFixed(3);
  totalAvg3 = (r31+r32+r33+r34).toFixed(3);
  totalAvg4 = (r41+r42+r43+r44).toFixed(3);

  document.getElementById("totalAvg").innerHTML=totalAvg;
   document.getElementById("totalAvg2").innerHTML=totalAvg2;
    document.getElementById("totalAvg3").innerHTML=totalAvg3;
     document.getElementById("totalAvg4").innerHTML=totalAvg4;

 avg = (totalAvg/4).toFixed(3);
 avg2 = (totalAvg2/4).toFixed(3);
 avg3 = (totalAvg3/4).toFixed(3);
 avg4 = (totalAvg4/4).toFixed(3);

 document.getElementById("avg").innerHTML=avg;
 document.getElementById("avg2").innerHTML=avg2;
 document.getElementById("avg3").innerHTML=avg3;
 document.getElementById("avg4").innerHTML=avg4;

 document.getElementById("bobot1").value=avg;
 document.getElementById("bobot2").value=avg2;
 document.getElementById("bobot3").value=avg3;
 document.getElementById("bobot4").value=avg4;

}

function C43(){

var options43 = document.getElementById("criteria43").value;
  if (options43 == "1") {
    document.getElementById("c43").innerHTML = 1;
    c43=1;
    c34=1;
  }else if (options43 == "3") {
    document.getElementById("c43").innerHTML = 0.33;
    c43=0.33;
    c34=3;
  }else if (options43 == "5"){
    document.getElementById("c43").innerHTML = 0.2;
    c43=0.2;
    c34=5;
  }else if (options43 == "0.2"){
    document.getElementById("c43").innerHTML = 5;
    c43=5;
    c34=0.2;
  }else if (options43 == "0.33"){
    document.getElementById("c43").innerHTML = 3;
    c43=3;
    c34=0.33;
  }

   totalCol4=c14+c24+c34+c44;
  document.getElementById("total4").innerHTML = totalCol4;

  totalCol3=c13+c23+c33+c43;
  document.getElementById("total3").innerHTML = totalCol3;

  r11=c11/total;
  r21=c21/total;
  r31=c31/total;
  r41=c41/total;

  document.getElementById("r11").innerHTML=r11;
  document.getElementById("r21").innerHTML=r21;
  document.getElementById("r31").innerHTML=r31;
  document.getElementById("r41").innerHTML=r41;

  r12=c12/totalCol2;
  r22=c22/totalCol2;
  r32=c32/totalCol2;
  r42=c42/totalCol2;

  document.getElementById("r12").innerHTML=r12;
  document.getElementById("r22").innerHTML=r22;
  document.getElementById("r32").innerHTML=r32;
  document.getElementById("r42").innerHTML=r42;

  r13=c13/totalCol3;
  r23=c23/totalCol3;
  r33=c33/totalCol3;
  r43=c43/totalCol3;

  document.getElementById("r13").innerHTML=r13;
  document.getElementById("r23").innerHTML=r23;
  document.getElementById("r33").innerHTML=r33;
  document.getElementById("r43").innerHTML=r43;

  r14=c14/totalCol4;
  r24=c24/totalCol4;
  r34=c34/totalCol4;
  r44=c44/totalCol4;

  document.getElementById("r14").innerHTML=r14;
  document.getElementById("r24").innerHTML=r24;
  document.getElementById("r34").innerHTML=r34;
  document.getElementById("r44").innerHTML=r44;

  totalAvg = (r11+r12+r13+r14).toFixed(3);
  totalAvg2 = (r21+r22+r23+r24).toFixed(3);
  totalAvg3 = (r31+r32+r33+r34).toFixed(3);
  totalAvg4 = (r41+r42+r43+r44).toFixed(3);

  document.getElementById("totalAvg").innerHTML=totalAvg;
   document.getElementById("totalAvg2").innerHTML=totalAvg2;
    document.getElementById("totalAvg3").innerHTML=totalAvg3;
     document.getElementById("totalAvg4").innerHTML=totalAvg4;

 avg = (totalAvg/4).toFixed(3);
 avg2 = (totalAvg2/4).toFixed(3);
 avg3 = (totalAvg3/4).toFixed(3);
 avg4 = (totalAvg4/4).toFixed(3);

 document.getElementById("avg").innerHTML=avg;
 document.getElementById("avg2").innerHTML=avg2;
 document.getElementById("avg3").innerHTML=avg3;
 document.getElementById("avg4").innerHTML=avg4;

 document.getElementById("bobot1").value=avg;
 document.getElementById("bobot2").value=avg2;
 document.getElementById("bobot3").value=avg3;
 document.getElementById("bobot4").value=avg4;

}

function showBobot(){
    document.getElementById("bobot1").value=avg;
}
   
 </script>
<!--============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor text-uppercase mb-3">Kriteria</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('admin') ?>">Kriteria</a>
                    </li>
                    <li class="breadcrumb-item">Analisis Kriteria</li>
                    <li class="breadcrumb-item active">Bobot Kriteria</li>
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
                        <h4 class="m-0 font-weight-bold text-primary">Analisis Bobot Kriteria dengan Metode AHP</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="m-0 font-weight-bold text-primary">Perbandingan Berpasangan</h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                        <th class="font-weight-bold" width="320px"></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <td align="center"  bgcolor="#FFFACD">
                                           1
                                        </td>
                                        <td align="center">
<select id="product-select" name="id" class="" onchange="C21()">
      <option value="1">1</option>
      <option value="3">3</option>
      <option value="5">5</option>
      <option value="0.2">0.2</option>
      <option value="0.33">0.33</option>
    </select>
    
                                        </td>
                                        <td align="center">
<select id="criteria31" name="id" class="" onchange="C31()">
      <option value="1">1</option>
      <option value="3">3</option>
      <option value="5">5</option>
      <option value="0.2">0.2</option>
      <option value="0.33">0.33</option>
    </select> 
                                        </td>
                                        <td align="center">
<select id="criteria41" name="id" class="" onchange="C41()">
      <option value="1">1</option>
      <option value="3">3</option>
      <option value="5">5</option>
      <option value="0.2">0.2</option>
      <option value="0.33">0.33</option>
    </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="c21">1</span>
                                        </td>
                                        <td align="center"  bgcolor="#FFFACD">
                                           1 
                                        </td>
                                        <td align="center">
<select id="criteria32" name="id" class="" onchange="C32()">
      <option value="1">1</option>
      <option value="3">3</option>
      <option value="5">5</option>
      <option value="0.2">0.2</option>
      <option value="0.33">0.33</option>

    </select> 
                                        </td>
                                        <td align="center">
    <select id="criteria42" name="id" class="" onchange="C42()">
      <option value="1">1</option>
      <option value="3">3</option>
      <option value="5">5</option>
      <option value="0.2">0.2</option>
      <option value="0.33">0.33</option>
    </select> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="c31">1</span> 
                                        </td>
                                        <td align="center">
                                           <span id="c32">1</span>  
                                        </td>
                                        <td align="center"  bgcolor="#FFFACD">
                                          1 
                                        </td>
                                        <td align="center">
<select id="criteria43" name="id" class="" onchange="C43()">
      <option value="1">1</option>
      <option value="3">3</option>
      <option value="5">5</option>
      <option value="0.2">0.2</option>
      <option value="0.33">0.33</option>
    </select> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="c41">1</span> 
                                        </td>
                                        <td align="center">
                                           <span id="c42">1</span>  
                                        </td>
                                        <td align="center">
                                           <span id="c43">1</span>  
                                        </td>
                                        <td align="center"  bgcolor="#FFFACD">
                                           1 
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                        <th class="font-weight-bold" width="220px"><font color="white">TOTAL</font></th>
                                        <th class="font-weight-bold"><font color="white"><span id="total1">4</span></font></th>
                                        <th class="font-weight-bold"><font color="white"><span id="total2">4</span></font></th>
                                        <th class="font-weight-bold"><font color="white"><span id="total3">4</span></font></th>
                                        <th class="font-weight-bold"><font color="white"><span id="total4">4</span></font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                
                            </table>
                        </div>

                        <h5 class="m-0 font-weight-bold text-primary">Hasil tiap sell dibagi total kolom :</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                        <th class="font-weight-bold" width="320px"></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white">Total</font></th>
                                        <th class="font-weight-bold"><font color="white">Rata-rata</font></th>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="r11">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="r12">0.25</span> 
                                        </td>
                                        <td align="center">
                                           <span id="r13">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="r14">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="totalAvg">1</span>
                                        </td>
                                         <td align="center">
                                           <span id="avg">0.25</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="r21">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="r22">0.25</span> 
                                        </td>
                                        <td align="center">
                                           <span id="r23">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="r24">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="totalAvg2">1</span>
                                        </td>
                                         <td align="center">
                                           <span id="avg2">0.25</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="r31">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="r32">0.25</span> 
                                        </td>
                                        <td align="center">
                                           <span id="r33">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="r34">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="totalAvg3">1</span>
                                        </td>
                                         <td align="center">
                                           <span id="avg3">0.25</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" bgcolor="#5F9EA0"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                        <td align="center">
                                           <span id="r41">0.25</span> 
                                        </td>
                                        <td align="center">
                                           <span id="r42">0.25</span> 
                                        </td>
                                        <td align="center">
                                           <span id="r43">0.25</span>
                                        </td>
                                        <td align="center">
                                          <span id="r44">0.25</span>
                                        </td>
                                        <td align="center">
                                           <span id="totalAvg4">1</span>
                                        </td>
                                         <td align="center">
                                           <span id="avg4">0.25</span>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                        <th class="font-weight-bold" width="220px" colspan="6"><font color="white">Total</font></th>
                                        <th class="font-weight-bold"><font color="white">1</font></th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                        <th colspan="4" class="font-weight-bold"><font color="white">Bobot Kriteria yang terbentuk :</font></th>
                                    </tr>
                                    <tr style="text-align: center;" bgcolor="#5F9EA0">
                                        <th class="font-weight-bold"><font color="white"><?php echo $c1->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c2->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c3->kriteria ?></font></th>
                                        <th class="font-weight-bold"><font color="white"><?php echo $c4->kriteria ?></font></th>
                                    </tr>
                                </thead>
                                <tbody>
<form action="<?php echo site_url('data_spk/edit'); ?>" method="post">
                                    <tr align="center">
                                        <td>
                                            <input type="text" readonly required name="bobot1" class="input" id="bobot1"></td>
                                        <td>
                                            <input type="text" readonly required name="bobot2" class="input" id="bobot2"></td>
                                        <td><input type="text" readonly required name="bobot3" class="input" id="bobot3"></td>
                                        <td><input type="text" readonly required name="bobot4" class="input" id="bobot4"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light col-12">
                                    <i class="fa fa-save"></i>&nbsp; Update Bobot Kriteria</button>
                                        </td>
                                    </tr>
                   </form>                 
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
    <!-- ==============================================================