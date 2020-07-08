<?php  
if(isset($_POST['hitung'])){
	$nama_barang = $_POST['nama_barang'];
	$harga_barang = $_POST['harga_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
	$total_harga = $harga_barang*$jumlah_barang;
}else {
	$nama_barang = "";
	$harga_barang = "";
	$jumlah_barang = "";
	$total_harga = ""; 
}
						// setcookie("total_harga",$total_harga);
						// echo "Nama Barang: $combo1<br>";
						// echo "Harga Barang: $harga_barang<br>";
						// echo "Jumlah barang: $jumlah_barang<br>";
						// echo "Total Harga: $total_harga<br>";
						// echo "Uang Bayar: <form><input type='number' name='uang_bayar'>
						// </form> ";
						// echo "<form action='prosesKembalian.php' method='post'><button type='submit' class='btn btn-primary'>Hitung</button></form>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<!-- ini awal carousel -->
	<div id="demo" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>  
		<!-- The slideshow -->
		<!-- <div class="carousel-inner">
			<div class="carousel-item active">
				<img src="D:/htmldasar/aset/flower.jpg" width="1100" height="500" style="width:100%; height:400px">
			</div>
			<div class="carousel-item">
				<img src="D:/htmldasar/aset/flower.jpg" width="1100" height="500" style="width:100%; height:400px">
			</div>
			<div class="carousel-item">
				<img src="D:/htmldasar/aset/flower.jpg" width="1100" height="500" style="width:100%; height:400px">
			</div>
		</div> -->

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<!-- ini akhir carausel -->

	<div class= "countainer-fluid">
		<div class="row">
			<div class= "col-12 bg-primary text-light">
				<!-- <img src="assets/images/macaron.jpg" alt=""> -->
				<!-- <source srcset="assets/images/rsz_macaron.jpg" type="image/svg+xml"> -->
					<!--  <img src="assets/images/rsz_macaron.jpg" class="img-fluid img-thumbnail" alt="..." style="width:100%; height:400px" > -->
				</div>

				<!-- awal navbar -->
				<nav class="navbar col-12 navbar-expand-lg navbar-light sticky-top" style="background-color: #0099ff;">
					<a class="navbar-brand" href="LatihanBootstrap4.html">Navigation</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="LatihanBootstrap4.html">Home</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link active" href="formPenjualan.php">Form Penjualan</a>
							</li>    
						</ul>
						<form class="form-inline my-2 my-lg-0 ">
							<input class="form-control mr-sm-2" type="text" placeholder="search" > 
							<button class="btn btn-success my-2 my-sm-0" type="button" >search</button>
						</form>
					</div>  
				</nav>

				<div class="container" >
					<h2 align="center">FORM PEMBAYARAN</h2>
					<form action="prosesKembalian.php"	method="POST">
						<div class="form-group">
							<label for="nama">Nama Barang:</label>
							<input type="name" class="form-control" name="nama_barang" value="<?php echo $nama_barang;?>" readonly>
						</div>
						<div class="form-group">
							<label for="harga">Harga Barang:</label>
							<input type="number" class="form-control"  name="harga_barang" value="<?php echo $harga_barang;?>" readonly>
						</div>
						<div class="form-group">
							<label for="jumlah">Jumlah Barang:</label>
							<input type="number" class="form-control"  name="jumlah_barang" value="<?php echo $jumlah_barang;?>" readonly>
						</div>
						<div class="form-group">
							<label for="total">Total:</label>
							<input type="number" class="form-control" name="total_harga" value="<?php echo $total_harga;?>" id="total" readonly>
						</div>
						<div class="form-group">
							<label for="total">Uang Bayar:</label>
							<input type="number" class="form-control" name="uang_bayar" value="<?php echo $uang_bayar;?>" id="bayar">
						</div>
						<button type="submit" class="btn btn-primary">Hitung</button>
					</form>
				</div>
				<div class="col-12 col-md-4 col-lg-2" style="background-color: #0099ff;" align="justify"><img src="assets/images/business-icon.jpg" height="200" alt="" style="float: left;">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-12 text-light" align="center" style="background-color: #0099ff;"> 2020</div>
			</div>
		</div>
		<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script>
			function getKembali(){
				var total_harga = document.getElementById('total').value
			}
		</script>
	</body>
	</html>