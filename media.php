<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">SISTEM INFORNAI PERPUSTAKAAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-3" >
<div class="row">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">
            Data Master
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="media.php" style="text-decoration: none; color: black;">Beranda</a></li>
            <li class="list-group-item"><a href="media.php?page=data_buku" style="text-decoration: none; color: black;">Data Buku</a></li>
            <li class="list-group-item"><a href="media.php?page=data_Kategori" style="text-decoration: none; color: black;">Kategori</a></li>
            <li class="list-group-item"><a href="media.php?page=data_pengarang" style="text-decoration: none; color: black;">Pengarang</a></li>
            <li class="list-group-item"><a href="media.php?page=data_penerbit" style="text-decoration: none; color: black;">Penerbit</a></li>
        </ul>
    </div>
    </div>
    <div class="col-md-8">
    <!-- untuk memanggil file yang terpisah -->
    <?php include "konten.php" ?>
    <!-- end untuk memanggil file yang terpisah -->
    </div>
</div>
</div>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>