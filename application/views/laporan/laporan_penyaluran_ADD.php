<!DOCTYPE html>
<html>
<head>
	<title>Surat Penyaluran ADD</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<style type="text/css">

		@media print {
		  @page { margin: 0px; size: auto}
		  body { 
		  	margin:1.5cm;
		  }
		}

		body{
			font-family: "Bookman Old Style";
		}

		#tabel_penyaluran tr td{
			border: 1px solid;
			padding: 5px;
		}

		#tabel_penyaluran th{
			border: 1px solid;
			padding: 5px;	
		}

		.kop p{
			text-align: center;
			line-height: 0.5;
		}

		.kop-top{
			margin-top: 10px;
			margin-bottom: 15px;
			font-size: 20pt;
			font-weight: bold;
		}

		.kop-alamat{
			font-size: 10pt;
		}

		hr{
			margin-top: 0.5px;
			margin-bottom: 1px;
			border:0.5px solid black;
		}

		.konten{
			margin-top: 30px;
		}

		#titi_camat{
			margin-top: 200px;
		}

		#camat span{
			font-weight: bold;
			text-decoration: underline;
		}

	</style>
</head>
<body>

	<table class="kop" width="100%">
		<tr>
			<td width="40">
				<img src="<?php echo base_url('assets/img/logo.png') ?>" width="65%" height="30%" align="right">
			</td>
			<td width="30" style="margin-left: 20px">
				<p class="kop-top">PEMERINTAH KABUPATEN CIREBON</p>
				<p class="kop-top">KECAMATAN KALIWEDI</p>
				<p class="kop-alamat">Alamat : Ki Gesang Nomor 142 Telp. (0231) 357267 Kode Pos 45165</p>
				<p class="kop-alamat">KALIWEDI</p>
			</td>
			<td width="5">
				
			</td>
		</tr>
	</table>
	
	<hr id="kop-line1">
	<hr id="kop-line2">
	
<div class="konten">
	<table width="100%" >
		<tr id="title">
			<div id="judul">
				<td align="justify" colspan="5">
					<h4 align="center">LAPORAN DATA PENYALURAN</h4>
				</td>
			</div>
		</tr>
		
		<tr>
			<table id="isi1">
				<tbody>
					<div id="tabel">
						
						<tr>
							<table id="tabel_penyaluran">
								<thead>
									<tr>
										<th width="5%">NO</th>
										<th width="45%">NAMA DESA</th>
										<th width="15%">TANGGAL</th>
										<th width="10%">TAHAP</th>
									</tr>
								</thead>
								<tbody>
									<?php  
					                    $no = 1;
					                    foreach($penyaluran as $data):
					                  ?>
									<tr>
										<td align="center"><?php echo $no++ ?></td>
					                  	<td><?php echo $data->nama_desa ?></td>
					                  	<td><?php echo date('d-m-Y', strtotime($data->tanggal)) ?></td>
					                  	<td align="center"><?php echo $data->nama_tahap ?></td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</tr>
						
					</div>

					<div id="titi_camat">
						<tr>
							<table>
								<tbody>
									<tr>
										<td width="80%"></td>
										<td align="justify">CAMAT KALIWEDI</td>
									</tr>
									<tr>
										<table height="70px"></table>
									</tr>
									<tr>
										<table id="camat">
											<tr>
												<td width="70%"></td>
												<td align="center"><span>Drs. H. Dedi Susilo, MM</span></td>
											</tr>
											<tr>
												<td></td>
												<td align="center">Pembina Tingkat 1</td>
											</tr>
											<tr>
												<td></td>
												<td align="center">NIP. 19681029 198803 1 003</td>
											</tr>
										</table>
									</tr>
								</tbody>
							</table>
						</tr>
					</div>
				</tbody>
			</table>
		</tr>
		<tr>
			<table height="60px"></table>
		</tr>
	</table>
</div>


<script>
	window.print();
   	window.onafterprint = function() {
        history.go(-1);
    }; 
</script>


</body>
</html>