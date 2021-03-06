<!DOCTYPE html>
<html>
<head>
	<title>Surat Pencairan ADD</title>
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
			border: 1px solid black;
			margin-top: 20px;
		}

		#judul{
			margin-top: 10px;
		}


		#title p{
			font-size: 12pt;
			font-weight: bold;
			line-height: 0.75;
		}

		#titi-header1{
			font-size: 10pt;
			margin-top: 10px;
			margin-left: 15px;
			margin-right: 15px; 
			line-height: 1.5;	
		}

		#isi1{
			font-size: 10pt;
			margin-top: 10px;
			margin-left: 15px;
			margin-right: 15px; 
			line-height: 1.5;	
		}

		#isi-rincian{
			margin-left: 10px;
		}

		#camat span{
			font-weight: bold;
			text-decoration: underline;
		}

		#lampiran{
			font-size: 10pt;
			margin-top: 10px;
			margin-left: 15px;
			margin-right: 15px; 
			line-height: 1.5;	
		}
		#kop-line1{
			border: 2px solid black;
		}
		#kop-line2{
			border: 1px solid black;
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
	<table width="100%" rules="rows">
		<tr id="title">
			<div id="judul">
				<td align="justify" colspan="5">
					<p align="center">REKOMENDASI</p>
					<p align="center">PENCAIRAN ALOKASI DANA DESA <?php echo $penyaluran->nama_romawi ?></p>
					<p align="center">TAHUN ANGGARAN <?php echo $thn->tahun ?></p>
				</td>
			</div>
		</tr>
		<tr>
			<td width="100%">
				<table id="titi-header1">
					<tbody>
						<tr>
							<td width="20%"><span>Nomor Register</span></td>           
							<td width="10"><span>:</span></td>           
							<td width="40%"><span>978.4 /&nbsp&nbsp&nbsp&nbsp – Kec</span></td>         
						</tr>
						<tr>           
							<td><span>Tanggal</span></td>           
							<td><span>:</span></td>           
							<td><span><?php echo date('d F Y', strtotime($penyaluran->tanggal)) ?></span></td>         
						</tr>
						<tr height="10px">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp K e p a d a</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>Yth. Direktur Bank Jabar Banten</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp KCP Arjawinangun </td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp di</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
								<span style="text-decoration: underline;">Arjawinangun</span></td>
						</tr>
						<tr height="10px">
							<td>
								
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<table id="isi1">
				<tbody>
					<tr>
						<td><justify>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Berdasarkan ketentuan Ayat 4 Pasal 43 Peraturan Bupati Cirebon Nomor 104 Tahun 2017 entang Alokasi Dana Desa (ADD) Tahun Anggaran 2018, Serta Berdasarkan Surat Kuwu Desa <?php echo $penyaluran->nama_desa ?> tanggal "input tanggal" Nomor "no surat" Perihal Permohonan Pencairan Alokasi Dana Desa (ADD) Tahap <?php echo $penyaluran->nama_tahap ?> dengan ini kami merekomendasikan untuk pencairan sebagaimana data tersebut dibawah ini :</justify></td>
					</tr>
					<tr height="5px">
						<td></td>
					</tr>
					<tr>
						<table>
							<tbody>
								<tr>
									<td width="25%"><span>&nbsp&nbsp&nbsp&nbsp - Desa </span></td>           
									<td width="2%"><span>:</span></td>           
									<td width="50%"><span><?php echo $penyaluran->nama_desa ?></span></td>
								</tr>
								<tr>
									<td><span>&nbsp&nbsp&nbsp&nbsp - Kecamatan</span></td>  
									<td><span>:</span></td>           
									<td><span>Kaliwedi</span></td>
								</tr>
								<tr>
									<td><span>&nbsp&nbsp&nbsp&nbsp - Kegiatan </span></td>           
									<td><span>:</span></td>           
									<td><span>Tersebut dibawah</span></td>
								</tr>
								<tr>
									<td><span>&nbsp&nbsp&nbsp&nbsp - Jumlah</span></td>           
									<td><span>:</span></td>           
									<td><span>Rp. <?php echo number_format($total->total, 0,',', '.') ?></span></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td><?php echo terbilang($total->total) ?></td>
								</tr>
								<tr height="10px"></tr>
								
							</tbody>
						</table>
					</tr>
					<tr>
						<td><span>&nbsp&nbsp Dengan Rincian</span></td>           
						<td><span>:</span></td>           
					</tr>
					<tr>
						<table id="isi-rincian">
							<tr>
								<?php $no=1; foreach ($rincian as $data): ?>
								<td width="65%"><span><?php echo $no++ .". &nbsp".$data->nama_rincian ?></span></td>
								<td width="5%"><span>Rp.</span></td>
								<td width="10%" align="right"><span><?php echo number_format($data->nominal, 0,',', '.') ?></span></td>
								<td width="20%"></td>
							</tr>
								<?php endforeach; ?>
						</table>
					</tr>
					<tr>
						<table height="40px">
						</table>
					</tr>
					<tr>
						<td><span>&nbsp&nbsp&nbsp&nbsp Demikian agar menjadi maklum.</span></td>
					</tr>
					<tr>
						<table height="10px"></table>
					</tr>
					<tr>
						<table>
							<tbody>
								<tr>
									<td width="80%"></td>
									<td align="justify">CAMAT KALIWEDI</td><br>
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
				</tbody>
			</table>
		</tr>
		<tr>
			<table height="60px"></table>
		</tr>
	</table>
</div>
<table id="lampiran">
	<tbody>
		<tr>
			<td>
				&nbsp&nbsp Lampiran :
			</td>
		</tr>
		<tr>
			<td>
				&nbsp&nbsp&nbsp&nbsp - Kwitansi
			</td>
		</tr>
	</tbody>
</table>

<script>
	window.print();
   	window.onafterprint = function() {
        history.go(-1);
    }; 
</script>


</body>
</html>