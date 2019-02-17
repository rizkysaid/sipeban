<?php
$this->load->view('template/head');
$this->load->view('template/navbar');
$this->load->view('template/sidebar');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <!--konten-->
      <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Petugas</h3>
                <a href="<?php echo site_url('petugas/tambah') ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabelpetugas" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center" >No.</th>
                  <th class="text-center" width="20%">NIP</th>
                  <th class="text-center" width="15%">Nama Petugas</th>
                  <th class="text-center" width="20%">Alamat</th>
                  <th class="text-center" width="11%">No Telp</th>
                  <th class="text-center" width="3%">Username</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center" width="13%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php  
                    $no = 1;
                    foreach($petugas as $data):
                  ?>
                <tr>
                  <td align="center"><?php echo $no++ ?></td>
                  <td><?php echo $data->nip ?></td>
                  <td><?php echo $data->nama ?></td>
                  <td><?php echo $data->alamat ?></td>
                  <td align="center"><?php echo $data->notelp ?></td>
                  <td align="center"><?php echo $data->username ?></td>
                  <td align="center"><?php echo $data->keterangan ?></td>
                  <td align="center">
                    <a href="<?php echo site_url('petugas/edit/'. $data->id_petugas) ?>" class="btn btn-sm btn-warning" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo site_url('petugas/hapus/'. $data->id_petugas) ?>" class="btn btn-sm btn-danger hapus" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
      </div>
</div>     
<?php
$this->load->view('template/js');
?>

<script>
  $(document).ready(function(){
    $('#tabelpetugas').DataTable({
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
