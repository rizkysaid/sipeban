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
              <div class="panel-heading">Tambah Data Petugas
                <a href="<?php echo site_url('petugas/index') ?>" class="pull-right"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
              </div>

              <!-- /.panel-header -->
              <!-- form start -->
              <form role="form" action="<?php echo site_url('petugas/simpan') ?>" method="POST">
                <div class="panel-body">

                  <div class="form-group">
                    <label>NIP</label>
                    <input  type="text" name="nip" class="form-control" placeholder="Masukan NIP Petugas">

                  <div class="form-group">
                    <label>Nama</label>
                    <input  type="text" name="nama" class="form-control" placeholder="Masukan Nama Petugas">
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Petugas"></textarea>
                  </div>

                  <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="notelp" class="form-control" placeholder="Masukan Nomor Petugas">
                  </div>

                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username Petugas">
                  </div>

                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Masukan Keterangan">
                  </div>

                </div><!-- /.panel-body -->
                <div class="panel-footer">
                  <button type="submit" class="btn btn-primary submit">Submit</button>
                  <a href="<?php echo site_url('petugas/index') ?>" class="btn btn-default pull-right">Cancel</a>
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
    
    //Timepicker
    
  });


  $('.submit').on('click', function(e){
    Swal({
      type: 'success',
      title: 'Data petugas berhasil disimpan',
      showConfirmButton: false,
      timer: 1500
    }) 
  });


</script>

<?php
$this->load->view('template/footer');
?>
