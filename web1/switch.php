<!DOCTYPE html>
<html>
<head>
	<title>switch</title>
</head>
<body>

	<?php 

	$day=date('l');
	switch ($day){
		case 'Sunday':
		$hari="minggu";
		break;
		case 'Monday':
		$hari='senin';
		break;
		case 'Tuesday':
		$hari='selasa';
		break;
		case 'Wednesday':
		$hari='rabu';
		break;
		case 'Thursday';
		$hari='kamis';
		break;
		case 'Friday';
		$hari='jumat';
		break;
		case 'Saturday';
		$hari='sabtu';
		break;
	}
	echo "$day <br>";
	echo "$hari"; 
	?> 

</body>
</html>