<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>

<div class="col-md-12 col-sm-offset-3 col-md-8 col-md-offset-2 main">
    <div class="panel panel-default col-lg-12">
		<div class="panel-heading"><h4>Laporan Desa yang Mengajukan Penyaluran</h4></div>
		<div class="panel-body">
			<!-- <input type="text" class="form-control col-lg-12"/ placeholder="Masukan bulan dan tahun"> -->
        <div class="col-md-12">
          <form action="<?php echo site_url('laporan/print_penyaluran') ?>" name="form_penyaluran">
          <!-- <input type="text" class="form-control" id="periode" name="periode" placeholder="Masukan bulan dan tahun"/> -->
            <div class="row">
              <div class="col-md-2">
                <label>Periode</label>
              </div>
              <div class="col-md-5">  
                <select name="bulan" class="form-control">
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="12">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
              <div class="col-md-5">
                <select name="tahun" class="form-control">
                  <?php
                  $mulai= date('Y') - 50;
                  for($i = $mulai;$i<$mulai + 100;$i++){
                      $sel = $i == date('Y') ? ' selected="selected"' : '';
                      echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                  }
                  ?>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12" style="margin-top: 20px;">
                  <input type="submit" class="btn btn-primary pull-right" id="ctk" value="CETAK" />
              </div>
            </div>
        </form>
      </div>
		</div>
	</div>
	<hr/>
	<div class="panel panel-default col-lg-12">
		<div class="panel-heading"><h4>Laporan Desa yang Mengajukan Pencairan</h4></div>
		<div class="panel-body">
			<div class="col-md-12">
          <form action="<?php echo site_url('laporan/print_pencairan') ?>" name="form_pencairan">
          <!-- <input type="text" class="form-control" id="periode" name="periode" placeholder="Masukan bulan dan tahun"/> -->
            <div class="row">
              <div class="col-md-2">
                <label>Periode</label>
              </div>
              <div class="col-md-5">  
                <select name="bulan" class="form-control">
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="12">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
              <div class="col-md-5">
                <select name="tahun" class="form-control">
                  <?php
                  $mulai= date('Y') - 50;
                  for($i = $mulai;$i<$mulai + 100;$i++){
                      $sel = $i == date('Y') ? ' selected="selected"' : '';
                      echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                  }
                  ?>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12" style="margin-top: 20px;">
                  <input type="submit" class="btn btn-primary pull-right" id="ctk" value="CETAK" />
              </div>
            </div>
        </form>
      </div>
	</div>
</div>
       
<?php
$this->load->view('template/js');
?>

<?php
$this->load->view('template/footer');
?>
