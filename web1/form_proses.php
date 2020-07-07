<!DOCTYPE html>
<html>
<head>
	<title>fungsi if</title>
</head>
<body>


	<?php 
	$username=$_POST["nama1"];
	$password=$_POST["password"];
	if($username=="faris"){
		if($password=="1"){
			echo "anda berhasil login";
		}else{
			echo "password anda salah";
		}
	}else{
		echo"username salah";
	}
	?> 


	<button><a href="form_login.php">kembali</a></button>
</body>
</html>