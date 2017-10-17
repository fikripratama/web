

<html>
	<head>
	<title>Kuesioner Penelitian Sistem Perdagangan Saham Online Indonesia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style type="text/css">
	select.error, textarea.error, input.error, label.error {
		color:#FF0000;
		font-size:11px;
	}
	
	.block { display: block; }
	form.kuesioner label.error { display: none; }
	</style>
	<script src="jquery/jquery.js"></script>
	<script src="jquery/jquery.validate.js"></script>
	<script>
	$(function() {
		  $("#kuesioner").validate({
			rules:{
				nama:"required",
				jabatan:"required",
				unit:"required",
				namars:"required",
				gender:"required",
				pendidikan:"required",
				umur:"required",
				lamapakai:"required",
				kualitas:"required",
				P1:"required",P2:"required",P3:"required",P4:"required",P5:"required",P6:"required",P7:"required",P8:"required",P9:"required",P10:"required",
				P11:"required",P12:"required",P13:"required",P14:"required",P15:"required",P16:"required",P17:"required",P18:"required",P19:"required",P20:"required",
				P21:"required",P22:"required",P23:"required",P24:"required",P25:"required",P26:"required",P27:"required",P28:"required",P29:"required",P30:"required",
				P31:"required",P32:"required",P33:"required",P34:"required",P35:"required",P36:"required",P37:"required",P38:"required",P39:"required",P40:"required",
				P41:"required",P42:"required",P43:"required",P44:"required"
			},
			
			messages: {
				
			},
			
			submitHandler: function(form) {
				form.submit();
			}
		 });
	});
	</script>
	</head>
	<body >
	<div style="width:1050px; margin:auto;">
		<div style="float:left;">
			<div style="float:left;">
				<img src="image/logo.png"/ width="70px"> 
			</div>
			<div style="float:left; margin-left: 20px;">
				<p>
					<span style="font-size:24px;"><strong>Kuesioner Penelitian Sistem Perdagangan Saham Online Indonesia 
					</strong></span>
				</p>
			</div>
		</div>
		<div class="clear"></div>
		<div class="garisbiru"></div>
		<table border="0" cellpadding="9" cellspacing="1" height="28" width="1050" style="margin-top:10px;">
			<tbody>
				<tr>
					<td>
						<span style="font-size:16px;">
							<span style="">
								Penelitian ini ditujukan untuk mengidentifikasi 
								<strong>faktor yang memengaruhi intensi untuk menggunakan Sistem Perdagangan Saham Online</strong>. 
								Hasil dari penelitian ini akan digunakan untuk mendukung penelitian S1 mahasiswa Fikri Pratama Afif dari Fakultas Ilmu Komputer Universitas Indonesia dengan topik penelitian 
								<em>Faktor yang Memengaruhi Intensi untuk Menggunakan Sistem Perdagangan Saham Online</em>. 
								Sistem perdagangan saham online adalah sebuah sistem yang menyediakan akses untuk berinvestasi saham seperti informasi maupun fasilitas perdagangan (trading) bagi para investor saham.
							</span>
							<br><br>
							<span>Kuesioner ini hanya ditujukan untuk 
								<strong>Pelaku Bisnis yang Menggunakan Sistem Perdagangan Saham Online</strong>. 
								Kuesioner ini terdiri dari dua bagian yaitu data diri responden dan penilaian terhadap pernyataan sesuai faktor yang diuji. 
								<strong>Pengisian kuesioner hanya akan memakan waktu sekitar 5 sampai 10 menit</strong>. 
							</span>
						</span>
						</td>
				</tr>
			</tbody>
		</table>
		<form action="pilihan_process.php" method="post" name="kuesioner" id="kuesioner" class="kuesioner" enctype="multipart/form-data"  onsubmit=""  />

		<?php include("table1.php");?>
		<?php include("table2.php");?>
		
		<div style=" margin-bottom:20px; padding-top:20px;">
			<input class="tombol" type="submit" name="save" value="Selesai" style="float:right; margin-right:30px; width: 120px;"/>
		</div>
		
		<div style="font-size: 14px;">
			<p>
				<br>
				<strong>*Disclaimer</strong>: Data-data yang diberikan hanya akan dipergunakan untuk kepentingan penelitian dan tidak akan diberikan kepada pihak ketiga. 
				<br> Jika ada pertanyaan, kritik, dan saran terkait kuesioner silahkan menghubungi 
				<strong>Fikri Pratama Afif</strong> pada nomor 
				<strong>(+62)81316566761</strong> atau email ke 
				<strong>fikri.pratama@ui.ac.id</strong>.
			</p>
			<p>	
				<strong>TERIMA KASIH ATAS PARTISIPASI ANDA</strong>
			</p>
		</div>
		
		</form>
		</div>
	</body>
</html>
