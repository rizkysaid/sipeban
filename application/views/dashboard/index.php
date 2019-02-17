<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>

<div class="col-sm-12 col-sm-offset-3 col-md-8 col-md-offset-2 main">
      <!--konten-->
    <div class="card col-lg-3" style="width: 18rem;">
		  <img class="card-img-top text-center" style="width: 150px; height: auto;" src="<?= base_url()?>assets/img/user.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <a href="<?php echo base_url('petugas') ?>" class="btn btn-primary col-lg-12">DATA PETUGAS</a>
		  </div>
	</div>

	<div class="card col-lg-3" style="width: 18rem;">
		  <img class="card-img-top text-center" style="width: 150px; height: auto;" src="<?= base_url()?>assets/img/doc.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <a href="<?php echo base_url('penyaluran') ?>" class="btn btn-primary col-lg-14">DATA PENYALURAN</a>
		  </div>
	</div>
	<div class="card col-lg-3" style="width: 18rem;">
		  <img class="card-img-top text-center" style="width: 150px; height: auto;" src="<?= base_url()?>assets/img/money.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <a href="<?php echo base_url('pencairan') ?>" class="btn btn-primary col-lg-12">DATA PENCAIRAN</a>
		  </div>
	</div>
	<div class="card col-lg-3" style="width: 18rem;">
		  <img class="card-img-top text-center" style="width: 127px; height: auto;" src="<?= base_url()?>assets/img/docS.png" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <a href="<?php echo base_url('laporan') ?>" class="btn btn-primary col-lg-12">DATA LAPORAN</a>
		  </div>
	</div>
</div>
<?php
$this->load->view('template/footer');
?>