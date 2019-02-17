<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">

      
      <div class="panel panel-default">
        <div class="panel-heading">Edit Data Rincian
          <a class="pull-right" href="<?php echo site_url('rincian/index/'.$rincian->id_penyaluran) ?>" ><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
        </div>
        <form role="form" action="<?php echo site_url('rincian/update') ?>" method="POST">
          <input type="hidden" name="location" value="<?php echo site_url('rincian/index/'.$rincian->id_penyaluran) ?>">
          <input type="hidden" name="id_rincian" value="<?php echo $rincian->id_rincian ?>">
          <div class="panel-body">
            <div class="form-group">
              <label>Rincian</label>
              <textarea name="nama_rincian" class="form-control" rows="3" placeholder="Masukan rincian..."><?php echo $rincian->nama_rincian ?></textarea>
            </div>
            <div class="form-group">
                <label for="nominal" class="control-label">Nominal</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="text" class="form-control" id="nominal" name="nominal" aria-describedby="basic-addon1" value="<?php echo $rincian->nominal ?>">
                </div>
            </div>
             <button type="submit" class="btn btn-primary submit">Submit</button>
             <a href="<?php echo site_url('rincian/index/'.$rincian->id_penyaluran) ?>" class="btn btn-default pull-right">Cancel</a>
          </div><!-- /.panel-body -->
        </form>
      </div><!-- /.panel -->
    </div>
      
  </div><!-- End of content -->     
<?php
$this->load->view('template/js');
?>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#tanggal').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    $('[data-mask]').inputmask();
    //Timepicker
    $('#tanggal').datepicker({
      lang:'id',
      timepicker:true,
      format:'dd/mm/yyyy'
    });
  });

  $('.submit').on('click', function(e){
    Swal({
      type: 'success',
      title: 'Data penyaluran berhasil disimpan',
      showConfirmButton: false,
      timer: 1500
    })
  });

</script>

<?php
$this->load->view('template/footer');
?>
