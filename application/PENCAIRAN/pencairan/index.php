<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <!--konten-->
      <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Permohonan Pencairan</h3>
                <a href="<?php echo site_url('pencairan/tambah') ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabelpencairan" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center" width="5%">No.</th>
                  <th width="15%">Nama Desa</th>
                  <th>Nama Kegiatan</th>
                  <th class="text-center" width="5%">Tahap</th>
                  <th class="text-center" width="10%">Tanggal</th>
                  <th class="text-center" width="13%">Lihat Rincian</th>
                  <th class="text-center" width="20%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php  
                    $no = 1;
                    foreach($pencairan as $data):
                  ?>
                <tr>
                  <td align="center"><?php echo $no++ ?></td>
                  <td><?php echo $data->nama_desa ?></td>
                  <td><?php echo $data->nama_kegiatan ?></td>
                  <td align="center"><?php echo $data->tampil_tahap ?></td>
                  <td align="center"><?php echo date('d-m-Y', strtotime($data->tanggal)) ?></td>
                  <td align="center"><a href="<?php echo site_url('rincian/index/'. $data->id_pencairan) ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-list"></i> Rincian</a></td>
                  <td align="center">
                    <a href="<?php echo site_url('pencairan/get_data_print/'. $data->id_pencairan) ?>" class="btn btn-sm btn-primary" title="Print"><i class="glyphicon glyphicon-print"></i></a>
                    <a href="<?php echo site_url('pencairan/edit/'. $data->id_pencairan) ?>" class="btn btn-sm btn-warning" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo site_url('pencairan/hapus/'. $data->id_pencairan) ?>" class="btn btn-sm btn-danger hapus" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
    </div>
</div>
</div>     
<?php
$this->load->view('template/js');
?>

<script>
  $(document).ready(function(){
    $('#tabelpencairan').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
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

</script>

<?php
$this->load->view('template/footer');
?>
