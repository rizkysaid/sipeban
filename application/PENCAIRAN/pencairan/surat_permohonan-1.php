<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@media print {
		  @page { margin: 0 }
		  body { margin: 1cm}
		}

		#kop-line{
			border: 1px groove black;
		}
		#kop{
			line-height: 0.25;
			font-family: "Bookman Old Style";
		}
		#kop p{
			line-height: 0.3;
			font-size: 8pt;
		}
		#isi{
			font-family: "Bookman Old Style";
			border: 1px solid black;
		}
		#title p{
			font-weight: bold;
			line-height: 0.3;
		}
		#titi-header1{
			line-height: 0.5;	
		}

	</style>

	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

</head>
<body class="halaman">
	<div id="konten">
		<table id="kop" width="100%">
			<tr>
				<td width="40">
					<img src="<?php echo base_url('assets/img/logo.png') ?>" width="70%" height="30%" align="right">
				</td>
				<td width="30">
					<h2 align="center">PEMERINTAH KABUPATEN CIREBON</h2>
					<h2 align="center">KECAMATAN KALIWEDI</h2>
					<p align="center">Alamat : Ki Gesang Nomor 142 Telp. (0231) 357267 Kode Pos 45165</p>
					<p align="center">KALIWEDI</p>
				</td>
				<td width="30">
					
				</td>
			</tr>
		</table>

		<hr align="center" id="kop-line" ">

		<table id="isi" width="100%" rules="rows">
			<tr id="title">
				<td align="justify" colspan="5">
					<p align="center">PERMOHONAN</p>
					<p align="center">PENYALURAN ADD <?php echo $penyaluran->nama_romawi ?></p>
					<p align="center">TAHUN ANGGARAN <?php echo $thn->tahun ?></p>
				</td>
			</tr>
			<tr>
				<td align="justify" colspan="5">
					<table id="titi-header1">
						<tbody>
							<tr>
								<td width="90"><span style="font-size: 8pt;">Nomor Register</span></td>           
								<td width="10"><span style="font-size: 8pt;">:</span></td>           
								<td width="248"><span style="font-size: 8pt;">147.224 /   – Kec</span></td>         
							</tr>
							<tr>           
								<td><span style="font-size: 8pt;">Tanggal</span></td>           
								<td><span style="font-size: 8pt;">:</span></td>           
								<td><span style="font-size: 8pt;"><?php echo date('d-m-Y', strtotime($penyaluran->tanggal)) ?></span></td>         
							</tr>
						</tbody>
					</table>
					<table >
						<td align='left'>data1</td><td align='right'>data1</td><td align='left'>data1</td>
						 <td align='left'>data2</td><td align='right'>data2</td><td align='left'>data2</td>
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>