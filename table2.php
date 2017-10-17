		<div style="margin-top:60px;"></div>
		<p>
			<strong><u>Petunjuk</u></strong>: Berilah nilai untuk masing-masing faktor dibawah ini. Pemberian nilai bertujuan untuk mengetahui pengaruh masing-masing indikator (pernyataan) terhadap intensi untuk menggunakan sistem perdagangan saham online.
		</p>
		<p><span style="font-size:12px;"><strong>Ket. Skala: 1 = sangat tidak setuju; 2 = tidak setuju; 3 = netral; 4 = setuju; 5 = sangat setuju</strong> </span></p>
		<table class="table2" cellspacing="0">
			<tbody>
				<tr>
					<th rowspan="2" style="text-align: center; vertical-align: middle; width: 30px;">
						No</th>
					<th rowspan="2" style="text-align: center; vertical-align: middle; width: 800px;">
						Pernyataan1</th>
					<th  class="left_border" colspan="5" style="text-align: center; vertical-align: middle;">
						Nilai</th>
					<th  class="" colspan="1" style="text-align: center; vertical-align: middle; ">
					</th>
						
				</tr>
				<tr>
					<td class="left_border"  style="width: 25px; text-align: center;">
						<strong>1</strong></td>
					<td style="width: 25px; text-align: center;">
						<strong>2</strong></td>
					<td style="width: 25px; text-align: center;">
						<strong>3</strong></td>
					<td style="width: 25px; text-align: center;">
						<strong>4</strong></td>
					<td style="width: 25px; text-align: center;">
						<strong>5</strong></td>	
				</tr>
				
					<?php
						$pernyataan = array(
"Menggunakan sistem perdagangan saham online dapat <strong> menghemat waktu</strong> dibanding melakukan perdagangan saham secara konvensional (melalui pialang saham)",
"Menggunakan sistem perdagangan saham online bisa <strong>meningkatkan performa</strong> saya dalam melakukan perdagangan saham",
"SIMRS berguna dalam <strong>meningkatkan performa pekerjaan</strong>", 
"SIMRS dapat <strong>meningkatkan produktivitas</strong> saya dalam menyediakan layanan yang berkualitas",
"Penggunaan SIMRS tidak merubah <strong>(sesuai) cara saya bekerja</strong>",
"Penggunaan SIMRS tidak merubah <strong>(sesuai) preferensi praktek saya</strong>",
"SIMRS dapat digunakan <strong>sesuai dengan kebutuhan penyediaan layanan yang saya berikan</strong>",
"<strong>Mudah bagi saya untuk menggunakan SIMRS</strong>",
"<strong>SIMRS mudah digunakan untuk melakukan pekerjaan </strong>yang saya lakukan",
"<strong>Mudah bagi saya untuk terampil dalam menggunakan SIMRS</strong>",
"<strong>SIMRS mudah untuk dipelajari</strong>",
"<strong>Kerahasiaan, ketersediaan dan menjaga data tetap konsisten atau valid</strong> merupakan fitur penting dari SIMRS",
"SIMRS menyediakan <strong>fitur yang dapat mencegah orang yang tidak berwenang dalam mengakses data di SIMRS</strong>",
"SIMRS menyediakan <strong>fitur yang dapat mencegah atau mengurangi kesalahan pengguna </strong>untuk mencegah kesalahan pengobatan",
"SIMRS menyediakan <strong>fitur yang dapat mencegah kodifikasi yang tidak sah oleh orang yang tidak berwenang</strong> untuk melindungi data supaya tetap konsisten atau valid",
"Saya <strong>bisa menyelesaikan pekerjaan saya dengan SIMRS walaupun saya belum pernah menggunakan sistem</strong> seperti ini sebelumnya",
"Saya <strong>bisa menyelesaikan pekerjaan dengan menggunakan SIMRS jika saya telah menggunakan sistem serupa</strong> untuk melakukan pekerjaan yang sama",
"Saya dapat <strong>merealisasikan hasil pelatihan terkait TI/SIMRS sehingga dapat menggunakan SIMRS</strong>",
"<strong>Orang yang penting bagi saya menyarankan untuk menggunakan SIMRS</strong>",
"Saya <strong>menggunakan SIMRS karena rekan kerja saya juga menggunakannya</strong>",
"<strong>Orang-orang yang mempengaruhi perilaku saya berpikir</strong> bahwa <strong>saya harus menggunakan SIMRS</strong>",
"<strong>Luaran informasi</strong> yang dikeluarkan oleh SIMRS <strong>jelas dan mudah dibaca</strong>",
"<strong>Luaran informasi</strong> yang dikeluarkan oleh SIMRS <strong>tepat dan konsisten</strong>",
"<strong>Luaran</strong> yang disediakan oleh SIMRS <strong>mendukung saya dalam melakukan tugas-tugas yang saya kerjakan</strong>",
"<strong>SIMRS menyediakan luaran dalam format yang mudah dimengerti</strong>",
"SIMRS <strong>menyediakan semua fungsi terkait dalam menyelesaikan pekerjaan saya</strong>",
"SIMRS <strong>dapat mengintegrasikan informasi yang diperlukan dari sistem lain yang terkait</strong>",
"SIMRS <strong>memiliki response time yang cepat</strong>",
"SIMRS memberikan <strong>layanan 24/7 atau kapanpun saya butuhkan</strong>",
"Manajemen <strong>menginstruksikan penggunaan SIMRS</strong>",
"<strong>Manajemen memberikan masa transisi yang wajar dari sistem yang lama (misal manual) ke sistem yang baru (misal dengan aplikasi)</strong>",
"<strong>Manajemen menyediakan lingkungan kerja yang mendukung</strong> seperti tempat kerja yang menyenangkan, jumlah komputer yang cukup, beban kerja yang sesuai, dsb",
"<strong>Manajemen memberikan dorongan (misal insentif) untuk berinovasi melalui penggunaan SIMRS</strong>",
"Saya memiliki <strong>buku panduan berikut instruksi yang jelas dalam menggunakan SIMRS</strong>",
"<strong>Terdapat unit/tenaga khusus yang membantu saya jika mengalami kesulitan dalam menggunakan SIMRS</strong>",
"<strong>Saya memiliki sumber daya (misal komputer, laptop, jaringan, dsb) yang diperlukan dalam menggunakan SIMRS</strong>",
"Saya <strong>mendapatkan pelatihan SIMRS</strong>",
"Saya <strong>terlibat dalam proses komunikasi untuk mensosialisasikan SIMRS</strong>",
"Saya <strong>terlibat dalam perancangan SIMRS</strong>"
,"Saya <strong>terlibat dalam implementasi SIMRS</strong>",
"Saya akan <strong>menggunakan SIMRS dalam pekerjaan saya</strong>",
"Saya <strong>berniat</strong> untuk <strong>menggunakan SIMRS dalam pekerjaan</strong> saya <strong>sesering mungkin</strong>",
"Saya akan <strong>mengajak rekan kerja untuk menggunakan SIMRS</strong>", 
"Saya memprediksi terdapat <strong>banyak kesempatan dalam menggunakan SIMRS</strong> pada pekerjaan yang saya lakukan"
);
											
											//$pernyataan = array('a','b');
											$counter = 1;
											$size = sizeof($pernyataan);
											//echo $size;
											while($size > 0){
													
													echo '
													<tr>
														<td style="text-align: center; vertical-align: top;">
															'.$counter.'. </td>
														<td class="spaceBottom_narrow" style="text-align: left; vertical-align: top;">
															'.$pernyataan[$counter-1].'</td>
														<td  class="left_border" style="text-align: center; vertical-align: middle;">
															<input name="P'.$counter.'" type="radio" value="1" /> </td>
														<td style="text-align: center; vertical-align: middle;">
															<input name="P'.$counter.'" type="radio" value="2" /></td>
														<td style="text-align: center; vertical-align: middle;">
															<input name="P'.$counter.'" type="radio" value="3" /></td>
														<td style="text-align: center; vertical-align: middle;">
															<input name="P'.$counter.'" type="radio" value="4" /></td>
														<td style="text-align: center; vertical-align: middle;">
															<input name="P'.$counter.'" type="radio" value="5" /></td>	
														<td>
															<label class="error" for="P'.$counter.'">*belum diisi</label>
														</td>
													</tr>
													';
													$size--;
													$counter++;
												}
					?>	
			</tbody>
		</table>
		