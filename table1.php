		<p>
			<strong><u>Petunjuk</u></strong>: 
			Jawablah seluruh pertanyaan dan pilih salah satu jawaban untuk pertanyaan pilihan
			</p>
		
      
		<table  class="table1">
			<tbody>
			
					<th>
					<tr>
						<td  style="width: 20px"></td>
						<td  style="width: 320px"></td>
						<td  style="width: 200px"></td>
						<td  style="width: 200px"></td>
						<td  style="width: 30px"></td>
					</tr>
					</th>

				<tr style="border-bottom:1px solid #937d63;" >
					<td style="width: 20px; text-align: center; vertical-align: top;">1.</td>
					<td style="width: 200px;vertical-align: top;">Nama atau Email</td>
					<td class="spaceBottom" colspan="1" style="width: 150px;"><input type="text" name="nama" size="80"></td>
					<td ><label class="error" for="nama">*belum diisi</label></td>
				</tr>

				<tr>
					<td colspan="1" rowspan="1" style="text-align: center; vertical-align: top; width: 20px;">2.</td>
					<td colspan="1" rowspan="1" style="vertical-align: top;">Umur</td>
					<td class="spaceBottom"> <select name="umur" style = "min-width:100%">
						 <option value="< 20 tahun">< 20 tahun </option>
						  <option value="20-30 tahun">20-30 tahun</option>
						  <option value="30-40 tahun">30-40 tahun</option>
						  <option value="40-50 tahun">40-50 tahun</option>
						  <option value="> 50 tahun">> 50 tahun</option>
						</select> </td>
					<td><label class="error" for="umur">*belum diisi</label></td>
				</tr>

				<tr>
					<td colspan="1" style="text-align: center; vertical-align: top; width: 20px;">3.</td>
					<td rowspan="1" style="text-align: left; vertical-align: top;">Jenis Kelamin</td>
					<td><input type="radio" name="gender" value="Laki-laki">Laki-laki
					<input type="radio" name="gender" value="Perempuan">Perempuan</td>
					<td class="spaceBottom"><label class="error" for="gender">*belum diisi</label></td>
				</tr>

				<tr>
					<td colspan="1" rowspan="1" style="text-align: center; vertical-align: top; width: 20px;">4.</td>
					<td colspan="1" rowspan="1" style="vertical-align: top;">Pendidikan Terakhir</td>
					<td class="spaceBottom"> <select name="pendidikan" style = "min-width:100%">
						<option value="SD">SD</option>
						<option value="SMP">SMP</option>
						<option value="SMA">SMA</option>
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
						</select> </td>
					<td><label class="error" for="pendidikan">*belum diisi</label></td>
				</tr>

				<tr>
					<td colspan="1" rowspan="1" style="text-align: center; vertical-align: top; width: 20px;">5.</td>
					<td colspan="1" rowspan="1" style="vertical-align: top;">Pekerjaan</td>
					<td class="spaceBottom"> <select name="pekerjaan" style = "min-width:100%">
						<option value="Pelajar">
							Pelajar
						</option>
						<option value="PNS">
							Pegawai Negeri Sipil (PNS)
						</option>
						<option value="Pegawai BUMN">
							Pegawai BUMN
						</option>
						<option value="Wirausaha">
							Wiraswasta
						</option>
						<option value="Pegawai Swasta">
							Pegawai Perusahaan Swasta
						</option>
						<option value="Ibu Rumah Tangga">
							Ibu Rumah Tangga
						</option>
						<option value="Lainnya">
							Lainnya
						</option>
						</select> </td>
					<td><label class="error" for="pekerjaan">*belum diisi</label></td>
				</tr>
				
				<tr>
					<td colspan="1" rowspan="2" style="text-align: center; vertical-align: top; width: 20px;">6.</td>
					<td colspan="1" rowspan="2" style="text-align: left; vertical-align: top;">Pendapatan Bersih perbulan</td>
					<td>
						<input type="radio" name="pendapatan" value="<1 juta"><1 juta
						<input type="radio" name="pendapatan" value="1-3 juta">1-3 juta
						<input type="radio" name="pendapatan" value="3-5 juta">3-5 juta
					</td>
					<td class="spaceBottom"><label class="error" for="pendapatan">*belum diisi</label></td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="pendapatan" value="5-7 juta">5-7 juta
						<input type="radio" name="pendapatan" value="7-10 juta">7-10 juta
						<input type="radio" name="pendapatan" value=">10 juta">>10 juta
					</td>
				</tr>

				<tr>
					<td colspan="1" style="text-align: center; vertical-align: top; width: 20px;">7.</td>
					<td colspan="1" style="text-align: left; vertical-align: top;">Status</td>
					<td>
						<input type="radio" name="status" value="Belum Menikah">Belum Menikah
						<input type="radio" name="status" value="Sudah Menikah">Sudah Menikah
					</td>
					<td class="spaceBottom"><label class="error" for="status">*belum diisi</label></td>
				</tr>
				
				<tr>
					<td colspan="1" rowspan="3" style="text-align: center; vertical-align: top; width: 20px;">8.</td>
					<td colspan="1" rowspan="3" style="vertical-align: top;">Lini Perdagangan Saham yang Digunakan<span style="font-size:13px;font-weight:bold"></br>(dapat dipilih lebih dari satu jawaban)</span></td>
					<td><input type="checkbox" name="lini[]" value="website">Situs (Website)</td>
					<td><label class="error" for="lini[]"> *belum diisi</label></td>		
				</tr>			
				<tr>
					<td><input type="checkbox" name="lini[]" value="aplikasi desktop">Aplikasi Desktop (di Komputer)</td>
				</tr>
				<tr>		
					<td><input type="checkbox" name="lini[]" value="aplikasi mobile">Aplikasi Mobile (di HP)</td>
				</tr>

				<tr>
					<td colspan="1" rowspan="6" style="text-align: center; vertical-align: top; width: 20px;">6.</td>
					<td colspan="1" rowspan="6" style="text-align: left; vertical-align: top;">Situs Perdagangan Saham yang Digunakan</td>
					<td>
						<input type="radio" name="situsDigunakan" value="HOTS">Home Online Trading System (HOTS) - Mirae Aset Sekuritas
					</td>
					<td class="spaceBottom"><label class="error" for="situsDigunakan">*belum diisi</label></td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="situsDigunakan" value="IPOTStock">IPOTStock - Indo Premier Sekuritas
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="situsDigunakan" value="MOTS">Mandiri Online Trading System (MOTS) - Mandiri Sekuritas
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="situsDigunakan" value="POEMS">Philip's Online ELectronic Mart System (POEMS) - Philip Sekuritas
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="situsDigunakan" value="Direct Trading">Direct Trading - Bahana Sekuritas
					</td>
				</tr>
				<tr>
					<td class="spaceBottom"  colspan="2"><input type="radio" name="situsDigunakan" value="lain">
						Lainnya, yaitu <input type="text" name="situsDigunakanLain" size="40">
					</td>
				</tr>

				<tr>
					<td colspan="1" rowspan="1" style="text-align: center; vertical-align: top; width: 20px;">10.</td>
					<td colspan="1" rowspan="1" style="vertical-align: top;">Lama Penggunaan Situs</td>
					<td class="spaceBottom"> <select name="lamaPenggunaan" style = "min-width:100%">
						<option value="<1 tahun"><1 tahun</option>
						<option value="1-3 tahun">1-3 tahun</option>
						<option value="3-5 tahun">3-5 tahun</option>
						<option value=">5 tahun">>5 tahun</option>
						</select> </td>
					<td><label class="error" for="lamaPenggunaan">*belum diisi</label></td>
				</tr>

				<tr>
					<td colspan="1" rowspan="4" style="text-align: center; vertical-align: top; width: 20px;">11.</td>
					<td colspan="1" rowspan="4" style="vertical-align: top;">Aktivitas yang Dilakukan pada Situs<span style="font-size:13px;font-weight:bold"></br>(dapat dipilih lebih dari satu jawaban)</span></td>
					<td><input type="checkbox" name="aktivitas[]" value="mencari informasi terkait saham">Mencari informasi terkait saham (harga jual, harga beli, prospek, dsb)</td>
					<td><label class="error" for="aktivitas[]"> *belum diisi</label></td>		
				</tr>			
				<tr>
					<td><input type="checkbox" name="aktivitas[]" value="konsultasi atau belajar">Konsultasi atau belajar mengenai perdagangan saham</td>
				</tr>
				<tr>		
					<td><input type="checkbox" name="aktivitas[]" value="membeli saham">Melakukan pembelian saham</td>
				</tr>
				<tr>		
					<td><input type="checkbox" name="aktivitas[]" value="menjual saham">Melakukan penjualan saham</td>
				</tr>

				<tr>
					<td colspan="1" rowspan="5" style="text-align: center; vertical-align: top; width: 20px;">12.</td>
					<td colspan="1" rowspan="5" style="vertical-align: top;">Alasan pemilihan situs<span style="font-size:13px;font-weight:bold"></br>(dapat dipilih lebih dari satu jawaban)</span></td>
					<td><input type="checkbox" name="alasan[]" value="terdapat fasilitas dan informasi untuk membeli dan menjual saham">Terdapat fasilitas dan informasi untuk membeli dan menjual saham</td>
					<td><label class="error" for="alasan[]"> *belum diisi</label></td>		
				</tr>			
				<tr>
					<td><input type="checkbox" name="alasan[]" value="aksesibilitas yang baik">Situs memiliki aksesibilitas yang baik (ada versi mobile dan apps)</td>
				</tr>
				<tr>		
					<td><input type="checkbox" name="alasan[]" value="saran dari keluarga atau orang terdekat">Keluarga atau orang terdekat saya menyarankan saya menggunakan situs tersebut</td>
				</tr>
				<tr>		
					<td><input type="checkbox" name="alasan[]" value="reputasi yang baik">Situs tersebut memiliki reputasi atau popularitas yang baik</td>
				</tr>
				<tr>
					<td class="spaceBottom"  colspan="2"><input type="checkbox" name="alasan[]" value="lain">Lainnya, yaitu <input type="text" name="alasanlain" size="40"></td>
				</tr>
				
				<tr style="border-bottom:1px solid #937d63;" >
					<td style="width: 20px; text-align: center; vertical-align: top;">11.</td>
					<td colspan="4" style="width: 200px;vertical-align: top;"> Bagaimana kualitas aplikasi SIMRS yang baik sehingga dapat diterima dan dimanfaatkan oleh pengguna? (misal aplikasi SIMRS menggunakan 
					fitur yang mudah digunakan seperti touch screen sehingga lebih cepat mengakses aplikasi, dsb.)</td>
				</tr>
				<tr style="border-bottom:1px solid #937d63;" >
					<td colspan="1"></td>
					<td class="spaceBottom" colspan="4" style="width: 150px;"><textarea name="kualitas" rows="2" cols="100"></textarea></td>	
					<td><label class="error" for="kualitas">*belum diisi</label></td>
				</tr>
			</tbody>
		</table>
		<div style="margin-top:30px;"></div>
		
		
		