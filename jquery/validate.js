function validate()
{
	if ($('input[name=gender]:checked').length <=0 )
	{
		//alert("Jenis Kelamin belum terisi");
		$(".gender").css('display','block');
		return false;
	}
	
	if ($('input[name=umur]:checked').length <=0 )
	{
		$(".gender").css('display','block');
		return false;
	}
	
	if ($('input[name=pekerjaan]:checked').length <=0 )
	{
		alert("Pekerjaan belum terisi");
		return false;
	}
	
	if ($('input[name=pendapatan]:checked').length <=0 )
	{
		alert("Pendapatan belum terisi");
		return false;
	}

	if ($('input[name=pendidikan]:checked').length <=0 )
	{
		alert("Pendidikan belum terisi");
		return false;
	}
	
	var namars = document.forms["kuesioner"]["namars"].value;
	if (namars==null || namars =="")
	{
		alert("Pertanyaan nomor 7 bagian pertama belum terisi");
		return false;
	}
	
	/*if (!document.forms["kuesioner"]["alasan_memilih"].checked)
	{
		alert("Pertanyaan nomor 8 bagian pertama belum terisi");
		return false;
	}
	
	if ($('input[name=bagian]:checked').size() <=0 )
	{
		alert("Pertanyaan nomor 9 bagian pertama belum terisi");
		return false;
	}
	
	if ($('input[name=kegiatan]:checked').length <=0 )
	{
		alert("Pertanyaan nomor 10 bagian pertama belum terisi");
		return false;
	}*/
	
	if ($('input[name=pembayaran]:checked').length <=0 )
	{
		alert("Pertanyaan nomor 11 bagian pertama belum terisi");
		return false;
	}
	
	if ($('input[name=A01]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 1 bagian kedua belum terisi");
		return false;
	}
	if ($('input[name=A02]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 2 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A03]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 3 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A04]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 4 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A05]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 5 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A06]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 6 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A07]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 7 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A08]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 8 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A09]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 9 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A10]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 10 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A11]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 11 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A12]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 12 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A13]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 13 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A14]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 14 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A15]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 15 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A16]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 16 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A17]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 17 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A18]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 18 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A19]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 19 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A20]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 20 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A21]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 21 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A22]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 22 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A23]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 23 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A24]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 24 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A25]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 25 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A26]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 26 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A27]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 27 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A28]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 28 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A29]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 29 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A30]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 30 bagian kedua belum terisi");
		return false;
	}if ($('input[name=A31]:checked').length <=0 )
	{
		alert("Nilai Kenyataan pada pertanyaan nomor 31 bagian kedua belum terisi");
		return false;
	}
	
}