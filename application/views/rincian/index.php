<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >

            <!--Keterangan Desa-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a href="<?php echo site_url('penyaluran/index') ?>" ><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                <a data-toggle="collapse" href="#collapse1" class="pull-right"><span class="glyphicon glyphicon-eye-open"></span> Lihat data</a>
              </div>
              <form role="form" action="#">
                <div class="panel-body collapse" id="collapse1">
                  <div class="form-group row">
                    <label class="col-sm-3">Desa</label>
                    <div class="col-sm-9">
                      <input type="text" name="" class="form-control" value="<?php echo $ket->nama_desa ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3">Nama Kegiatan</label>
                    <div class="col-sm-9">
                      <input type="text" name="" class="form-control" value="<?php echo $ket->nama_kegiatan ?>" disabled>
                    </div>
                  </div>
                </div>
              </form>
            </div><!-- /.panel -->

    <div class="panel panel-default col-md-4">
        <div class="panel-heading">Tambah Data Rincian
        </div>
        <form role="form" action="<?php echo site_url('rincian/simpan') ?>" method="POST">
          <input type="hidden" name="id_penyaluran" value="<?php echo $ket->id_penyaluran ?>">
          <div class="panel-body">
            <div class="form-group">
              <label>Rincian</label>
              <textarea name="nama_rincian" class="form-control" rows="3" placeholder="Masukan rincian..." autofocus></textarea>
            </div>
            <div class="form-group">
                <label for="nominal" class="control-label">Nominal</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Rp</span>
                    <input type="text" class="form-control" id="nominal" name="nominal" aria-describedby="basic-addon1">
                </div>
            </div>
             <button type="submit" class="btn btn-primary submit pull-right">Submit</button>
          </div><!-- /.panel-body -->
        </form>
      </div><!-- /.panel -->


      <!-- list rincian -->
      <div class="card col-md-8">
        <!-- /.card-header -->
        <div class="card-body">
          <table id="tabelrincian" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="text-center" width="5%">No.</th>
              <th class="text-center">Rincian</th>
              <th class="text-center" width="15%">Nominal</th>
              <th class="text-center" width="15%">Action</th>
            </tr>
            </thead>
            <tbody>
              <?php  
                $no = 1;
                foreach($rincian as $data):
              ?>
            <tr>
              <td align="center"><?php echo $no++ ?></td>
              <td><?php echo $data->nama_rincian ?></td>
              <td align="center"><?php echo number_format($data->nominal, 0,',', '.') ?></td>
              <td align="center">
                <a href="<?php echo site_url('rincian/edit/'. $data->id_rincian) ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="<?php echo site_url('rincian/hapus/'. $data->id_rincian) ?>" class="btn btn-sm btn-danger hapus"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" align="center">Total</td>
                  <td id="total" align="center"><strong><?php echo number_format($total->total, 0,',', '.') ?></strong></td>
                  <td></td>
                </tr>
              </tfoot>
          </table>
        </div>
      </div>

</div>     
<?php
$this->load->view('template/js');
?>

<script>
  $(document).ready(function(){
    $('#tabelrincian').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

$('.hapus').on('click', function(e){
  e.preventDefault();
  var url = $(this).attr('href');

    Swal({
      title: 'Anda yakin hapus data ini?',
      text: "Semua rincian data ini akan hilang!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
        Swal(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        window.location.replace(url);
      }
    })
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
