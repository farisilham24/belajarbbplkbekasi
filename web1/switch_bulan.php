<!DOCTYPE html>
<html>
<head>
	<title>switch month</title>
</head>
<body>

	<?php 
	$Month=date('F');
	switch ($Month){
		case 'January':
		$bulan="januari";
		break;
		case 'February':
		$bulan='februari';
		break;
		case 'March':
		$bulan='maret';
		break;
		case 'April':
		$bulan='April';
		break;
		case 'May';
		$bulan='mei';
		break;
		case 'June';
		$bulan='juni';
		break;
		case 'July';
		$bulan='juli';
		break;
		case 'August':
		$bulan='agustus';
		break;
		case 'September';
		$bulan='september';
		break;
		case 'October';
		$bulan='oktober';
		break;
		case 'November';
		$bulan='november';
		break;
		case 'December';
		$bulan='desember';
		break;
	}
	echo "$Month <br>"; 
	echo "$bulan";
	?> 

</body>
</html>