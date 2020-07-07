<!DOCTYPE html>
<html>
<head>
	<title>fungsi if</title>
</head>
<body>

<!-- 	<?php 
	$a=$_POST['angka1'];
	if($a<10){
		echo "variabel a adalah lebih kecil dari 10";	
	}else{
		echo "variabel a adalah lebih besar dari 10";
	}
	?> -->

	<?php 
	$a=$_POST['angka1'];
	if($a>80){
	echo "Grade A";	
}elseif ($a>70){
echo "Grade B";
}elseif ($a>50){
echo "Grade C";
}else{
echo "Grade E";
}
?> 
<button><a href="form_latihanphp2.php">kembali</a></button>
</body>
</html>