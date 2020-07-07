<!DOCTYPE html>
<html>
<head>
	<title>fungsi if</title>
</head>
<body>


	<?php 
	$c=$_POST["angka1"];
	for($a=1;$a<=$c;$a++){
		for($b=1;$b<=$a;$b++){
			echo "*";
		}echo "<br>";
	}
	?> 


	<button><a href="form_for.php">kembali</a></button>
</body>
</html>