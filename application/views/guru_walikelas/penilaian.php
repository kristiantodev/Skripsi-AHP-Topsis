<!-- ============================================================== -->
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
                <h3 class="text-themecolor text-uppercase mb-0">Data Penilaian</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Alternatif</li>
                    <li class="breadcrumb-item active">Penilaian Alternatif</li>
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
                        <h4 class="m-0 font-weight-bold text-primary text-uppercase">Data Penilaian  Alternatif</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-right mb-1">
                            <a data-toggle="modal" data-target="#modal-pilih" class="btn btn-dark waves-effect waves-light"><font color="white"><i class="fas fa-user-plus"></i> Tambah Alternatif</font></a>
                            
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th class="font-weight-bold" width="20px">No</th>
                                        <th class="font-weight-bold">NIS</th>
                                        <th class="font-weight-bold">Nama Siswa</th>
                                        <th class="font-weight-bold">Jenis Kelamin</th>
                                        <th class="font-weight-bold">Periode Penilaian</th>
                                        <th class="font-weight-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;
         foreach ($alternatifPenilaian as $s): ?>
                                    <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $s->nis ?></td>
                                    <td><?php echo $s->nama_siswa ?></td>
                                    <td><?php echo $s->jk ?></td>
                                    <td><?php echo $s->tahun_akademik ?> - <?php echo $s->semester ?></td>
                                    <td>
                                        <?php if ($s->status_isi_nilai == 1){ ?>  
                                    <a data-toggle="modal" data-target="#modal-nilai<?php echo $s->id_alternatif ?>" class="btn btn-success waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Lihat Nilai <?php echo $s->nama_siswa ?>"><font color="white"><i class="fas fa-check "></i> &nbsp;Telah Dinilai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></a>
                 <?php }else{ ?>
                    <a data-toggle="modal" data-target="#modal-penilaian<?php echo $s->id_alternatif ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Alternatif : <?php echo $s->nama_siswa ?>"><font color="white">
                        <i class="fas fa-edit"></i> &nbsp;Beri Penilaian&nbsp;&nbsp;
                    </font></span></a>
                 <?php } ?>
                                    </td>
                                    <tr>
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

    <div class="modal fade text-left" id="modal-pilih" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Pilih Mahasiswa yang Dinilai : </font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <form action="<?php echo site_url('penilaian/tambah'); ?>" method="post">
                      <div class="modal-body">

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Periode Penilaian</label>
                          <select name="id_periode" id="select" required readonly class="custom-select">

                  <?php foreach ($dataPeriode as $p): ?>
                  <option value="<?php echo $p->id_periode ?>"><?php echo $p->tahun_akademik ?> - <?php echo $p->semester ?></option>
                  <?php endforeach; ?>

                </select>
                        </fieldset>

                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Pilih Siswa yang Dinilai :</label><br>
                          <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                                    <th width="30"><b></b></th>
                                    <th><b>Pilih Siswa</b></th>
                                    <th><b>Kelas</b></th>
                           </tr> 
                           </thead>
                           <tbody>        
                          <?php $no=1; $no2=1; foreach ($alternatif as $alum):?>

                                       <tr>
                <td width="30" align="center"></td>
                                            <td>
                                                <input type="checkbox" id="vehicle<?php echo $no2++; ?>" name="pilihanku[]" value="<?php echo $alum->id_siswa ?>">
<label for="vehicle<?php echo $no++; ?>"><?php echo $alum->nama_siswa ?></label></td>
                                            <td><?php echo $alum->kelas ?></td>
                                      </tr>
                  <?php endforeach;?>
                  </tbody>
                  </table>
                        </fieldset>
                                  
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>


                   <!-- Modal -->
<?php $no=1;
         foreach ($alternatifPenilaian as $s): ?>
                  <div class="modal fade text-left" id="modal-penilaian<?php echo $s->id_alternatif ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-lg">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Penilaian Siswa : <?php echo $s->nis ?> - <?php echo $s->nama_siswa ?></font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('penilaian/beri_penilaian'); ?>" method="post">
                     <input type="hidden" readonly value="<?=$s->id_alternatif;?>" name="id_alternatif" class="form-control" >
                      <div class="modal-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                                    <th width="30"><b>No</b></th>
                                    <th ><b>Kriteria</b></th>
                                    <th width="200"><b>Beri Penilaian (1-5)</b></th>
                           </tr> 
                           </thead>
                           <tbody>        
                          <tr>
                              <td>1</td>
                              <td><?php echo $c1->kriteria ?></td>
                              <td>
                                  <select name="c1" id="select" required class="custom-select">
                  <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                              </td>
                          </tr>

                          <tr>
                              <td>2</td>
                              <td><?php echo $c2->kriteria ?></td>
                              <td>
                                  <select name="c2" id="select" required class="custom-select">
                  <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                              </td>
                          </tr>

                          <tr>
                              <td>3</td>
                              <td><?php echo $c3->kriteria ?></td>
                              <td>
                                  <select name="c3" id="select" required class="custom-select">
                  <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                              </td>
                          </tr>

                          <tr>
                              <td>4</td>
                              <td><?php echo $c4->kriteria ?></td>
                              <td>
                                  <select name="c4" id="select" required class="custom-select">
                  <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                              </td>
                          </tr>
                  </tbody>
                  </table>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>



                   <!-- Modal -->
<?php $no=1;
         foreach ($alternatifPenilaian as $s): ?>
                  <div class="modal fade text-left" id="modal-nilai<?php echo $s->id_alternatif ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Data Penilaian Siswa (<?php echo $s->nis ?> - <?php echo $s->nama_siswa ?>)</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/indikator/edit'); ?>" method="post">
                     
                      <div class="modal-body">
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                                    <th width="30"><b>No</b></th>
                                    <th ><b>Kriteria</b></th>
                                    <th width="200"><b>Beri Penilaian (1-5)</b></th>
                           </tr> 
                           </thead>
                           <tbody>  
                           <?php 
         foreach ($dataNilai as $n): ?>    

         <?php if ($s->id_alternatif == $n->id_alternatif){ ?>  
                          <tr>
                              <td>1</td>
                              <td><?php echo $c1->kriteria ?></td>
                              <td align="center">
                                  <?php echo $n->nilai_c1 ?>
                              </td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td><?php echo $c2->kriteria ?></td>
                              <td align="center">
                                  <?php echo $n->nilai_c2 ?>
                              </td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td><?php echo $c3->kriteria ?></td>
                              <td align="center">
                                  <?php echo $n->nilai_c3 ?>
                              </td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td><?php echo $c4->kriteria ?></td>
                              <td align="center">
                                  <?php echo $n->nilai_c4 ?>
                              </td>
                          </tr>
                          <?php } ?>
                          <?php endforeach; ?>
                  </tbody>
                  </table>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>