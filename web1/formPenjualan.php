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
        <img src="assets/images/rsz_macaron.jpg" width="1100" height="500" style="width:100%; height:400px">
      </div>
      <div class="carousel-item">
        <img src="assets/images/rsz_ta5fph.jpg" width="1100" height="500" style="width:100%; height:400px">
      </div>
      <div class="carousel-item">
        <img src="assets/images/rsz_pa4pb8.jpg" width="1100" height="500" style="width:100%; height:400px">
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
          </ul>
          <form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2" type="text" placeholder="search" > 
            <button class="btn btn-success my-2 my-sm-0" type="button" >search</button>
          </form>
        </div>  
      </nav>

      <div class="container" >
        <h2 align="center">FORM PENJUALAN BARANG ELEKTRONIK</h2>
        <form action="prosesPenjualan.php" method="post">


          <select class="form-control" name="nama_barang" id="nama_barang">
            <option value="">Nama barang</option>
            <option value="Kipas">Kipas</option>
            <option value="Tv">Tv</option>
            <option value="Kulkas">Kulkas</option>
            <option value="AC">AC</option>
            <option value="Mesin Cuci">Salad Buah</option>  
          </select>


          <div class="form-group">
            <label for="harga"></label>
            <input type="number" class="form-control" placeholder="Harga Barang" name="harga_barang">
          </div>
          <div class="form-group">
            <label for="jumlah"></label>
            <input type="number" class="form-control" placeholder="Jumlah Barang" name="jumlah_barang">

          </div>
          <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
        </form>
      </div>
      <div class="col-12 col-md-4 col-lg-2" style="background-color: #0099ff;" align="justify"><img src="assets/images/business-icon.jpg" height="200" alt="" style="float: left;">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
</body>
</html>