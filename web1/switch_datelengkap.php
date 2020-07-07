<?php
$day=date('l');
// echo "$day";
switch($day){
	case 'Sunday';
	$hari='Minggu';
	break;
	case 'Monday';
	$hari='Senin';
	break;
	case 'Tuesday';
	$hari='Selasa';
	break;
	case 'Wednesday';
	$hari='Rabu';
	break;
	case 'Thursday';
	$hari='Kamis';
	break;
	case 'Friday';
	$hari='Jumat';
	break;
	case 'Saturday';
	$hari='Sabtu';
	break;
	
}
$month=date('F');
switch($month){
	case 'January';
	$Bulan='Januari';
	break;
	case 'February';
	$Bulan='Februari';
	break;
	case 'March';
	$Bulan='Maret';
	break;
	case 'April';
	$Bulan='April';
	break;
	case 'May';
	$bulan='Mei';
	break;
	case 'June';
	$Bulan='Juni';
	break;
	case 'July';
	$Bulan='Juli';
	break;
	case 'August';
	$Bulan='Agustus';
	break;
	case 'September';
	$Bulan='September';
	break;
	case 'October';
	$Bulan='Oktober';
	break;
	case 'November';
	$Bulan='November';
	break;
	case 'December';
	$Bulan='Desember';
	break;
}
echo date('H:i:s').','.$hari.$Bulan.date('Y')





?>