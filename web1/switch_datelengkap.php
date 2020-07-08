<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
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
</body>
</html>