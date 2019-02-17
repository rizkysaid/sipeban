<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <!--konten-->
            <!-- general form elements -->
          <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading">Tambah Data Pencairan
                <a href="<?php echo site_url('pencarian/index') ?>" class="pull-right"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
              </div>

              <!-- /.panel-header -->
              <!-- form start -->
              <form role="form" action="<?php echo site_url('penyaluran/simpan') ?>" method="POST">
                <div class="panel-body">

                  <div class="form-group">
                    <label>Desa</label>
                    <select name="id_desa" class="form-control select2" style="width: 100%;">
                      <?php foreach($desa as $data): ?>
                        <option value="<?php echo $data->id_desa ?>" class="form-control"><?php echo $data->nama_desa ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <textarea name="nama_kegiatan" class="form-control" rows="3" placeholder="Masukan nama kegiatan..."></textarea>
                  </div>
                  <div class="form-group">
                    <label>Tahap</label>
                    <select name="id_tahap" class="form-control" style="width: 100%;">
                      <?php foreach($tahap as $data): ?>
                        <option value="<?php echo $data->id_tahap ?>" class="form-control"><?php echo $data->nama_tahap ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="tanggal" class="control-label">Tanggal</label>
                      <input type="text" class="form-control" id="tanggal" name="tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  </div>

                </div><!-- /.panel-body -->
                <div class="panel-footer">
                  <button type="submit" class="btn btn-primary submit">Submit</button>
                  <a href="<?php echo site_url('pencairan/index') ?>" class="btn btn-default pull-right">Cancel</a>
                </div>
              </form>
            </div><!-- /.panel -->
          </div><!-- col-md-10 -->
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
