<?php

	include("config.php");

	$nama = ( isset($_POST['nama']) ) ? $_POST['nama'] : '';
	$umur = ( isset($_POST['umur']) ) ? $_POST['umur'] : '';
	$gender = ( isset($_POST['gender']) ) ? $_POST['gender'] : '';
	$pendidikan = ( isset($_POST['pendidikan']) ) ? $_POST['pendidikan'] : '';
	$pekerjaan = ( isset($_POST['pekerjaan']) ) ? $_POST['pekerjaan'] : '';
	$pendapatan = ( isset($_POST['pendapatan']) ) ? $_POST['pendapatan'] : '';
	$status = ( isset($_POST['status']) ) ? $_POST['status'] : '';
	$lini = ( isset($_POST['lini']) ) ? $_POST['lini'] : '';
	$situsDigunakan = ( isset($_POST['situsDigunakan']) ) ? $_POST['situsDigunakan'] : '';		
	$lamaPenggunaan = ( isset($_POST['lamaPenggunaan']) ) ? $_POST['lamaPenggunaan'] : '';
	$aktivitas = ( isset($_POST['aktivitas']) ) ? $_POST['aktivitas'] : '';
	$alasan = ( isset($_POST['alasan']) ) ? $_POST['alasan'] : '';		
	
	$P1 = ( isset($_POST['P1']) ) ? $_POST['P1'] : '';
	$P2 = ( isset($_POST['P2']) ) ? $_POST['P2'] : '';
	$P3 = ( isset($_POST['P3']) ) ? $_POST['P3'] : '';
	$P4 = ( isset($_POST['P4']) ) ? $_POST['P4'] : '';
	$P5 = ( isset($_POST['P5']) ) ? $_POST['P5'] : '';
	$P6 = ( isset($_POST['P6']) ) ? $_POST['P6'] : '';
	$P7 = ( isset($_POST['P7']) ) ? $_POST['P7'] : '';
	$P8 = ( isset($_POST['P8']) ) ? $_POST['P8'] : '';
	$P9 = ( isset($_POST['P9']) ) ? $_POST['P9'] : '';
	$P10 = ( isset($_POST['P10']) ) ? $_POST['P10'] : '';
	$P11 = ( isset($_POST['P11']) ) ? $_POST['P11'] : '';
	$P12 = ( isset($_POST['P12']) ) ? $_POST['P12'] : '';
	$P13 = ( isset($_POST['P13']) ) ? $_POST['P13'] : '';
	$P14 = ( isset($_POST['P14']) ) ? $_POST['P14'] : '';
	$P15 = ( isset($_POST['P15']) ) ? $_POST['P15'] : '';
	$P16 = ( isset($_POST['P16']) ) ? $_POST['P16'] : '';
	$P17 = ( isset($_POST['P17']) ) ? $_POST['P17'] : '';
	$P18 = ( isset($_POST['P18']) ) ? $_POST['P18'] : '';
	$P19 = ( isset($_POST['P19']) ) ? $_POST['P19'] : '';
	$P20 = ( isset($_POST['P20']) ) ? $_POST['P20'] : '';
	$P21 = ( isset($_POST['P21']) ) ? $_POST['P21'] : '';
	$P22 = ( isset($_POST['P22']) ) ? $_POST['P22'] : '';
	$P23 = ( isset($_POST['P23']) ) ? $_POST['P23'] : '';
	$P24 = ( isset($_POST['P24']) ) ? $_POST['P24'] : '';
	$P25 = ( isset($_POST['P25']) ) ? $_POST['P25'] : '';
	$P26 = ( isset($_POST['P26']) ) ? $_POST['P26'] : '';
	$P27 = ( isset($_POST['P27']) ) ? $_POST['P27'] : '';
	$P28 = ( isset($_POST['P28']) ) ? $_POST['P28'] : '';
	$P29 = ( isset($_POST['P29']) ) ? $_POST['P29'] : '';
	$P30 = ( isset($_POST['P30']) ) ? $_POST['P30'] : '';
	$P31 = ( isset($_POST['P31']) ) ? $_POST['P31'] : '';
	$P32 = ( isset($_POST['P32']) ) ? $_POST['P32'] : '';
	$P33 = ( isset($_POST['P33']) ) ? $_POST['P33'] : '';
	$P34 = ( isset($_POST['P34']) ) ? $_POST['P34'] : '';
	$P35 = ( isset($_POST['P35']) ) ? $_POST['P35'] : '';
	$P36 = ( isset($_POST['P36']) ) ? $_POST['P36'] : '';
	$P37 = ( isset($_POST['P37']) ) ? $_POST['P37'] : '';
	$P38 = ( isset($_POST['P38']) ) ? $_POST['P38'] : '';
	$P39 = ( isset($_POST['P39']) ) ? $_POST['P39'] : '';
	$P40 = ( isset($_POST['P40']) ) ? $_POST['P40'] : '';
	$P41 = ( isset($_POST['P41']) ) ? $_POST['P41'] : '';
	$P42 = ( isset($_POST['P42']) ) ? $_POST['P42'] : '';
	$P43 = ( isset($_POST['P43']) ) ? $_POST['P43'] : '';
	$P44 = ( isset($_POST['P44']) ) ? $_POST['P44'] : '';
	$P45 = ( isset($_POST['P45']) ) ? $_POST['P45'] : '';
		
	$query = "INSERT into onlineTrading(nama, umur, gender, pendidikan, pekerjaan, pendapatan, status, lini, situsDigunakan, lamaPenggunaan, aktivitas, alasan, P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12, P13, P14, P15, P16, P17, P18, P19, P20, P21, P22, P23, P24, P25, P26, P27, P28, P29, P30, P31, P32, P33, P34, P35, P36, P37, P38, P39, P40, P41, P42, P43, P44, P45) 
	values('$nama','$umur', '$gender','$pendidikan','pekerjaan','$pendapatan','$status','$lini', '$situsDigunakan', '$lamaPenggunaan', '$aktivitas', '$alasan','$P1', '$P2','$P3','$P4','$P5','$P6','$P7','$P8','$P9','$P10','$P11','$P12','$P13','$P14','$P15','$P16','$P17','$P18','$P19','$P20','$P21','$P22','$P23', '$P24','$P25','$P26','$P27','$P28','$P29','$P30','$P31', '$P32','$P33','$P34','$P35','$P36','$P37', '$P38','$P39','$P40','$P41','$P42','$P43','$P44','$P45')";
		
	$item = mysql_query($query);
	
		echo "<script type='text/javascript'>
				
				alert('Jawaban Anda telah tersimpan. Terima Kasih atas partisipasi Anda');
				window.location='index.php';
				
		</script>";
?>
