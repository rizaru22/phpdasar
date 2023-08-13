<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Navigasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
   main{
      font-size: 40pt;
    }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand ps-3" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?halaman=home">Home</a>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minggu Ke-1
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?halaman=latihan1">latihan 1</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=latihan2">latihan 2</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=operatorAritmatika">operator aritmatik</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=operatorAssignment">operator assignment</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=operatorString">operator string</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minggu Ke-2
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?halaman=comparison">comparison</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=comparison1">comparison 1</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=comparison2">comparison 2</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=tugasIF1">tugasIF1</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=tugasIF2">tugasIF2</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=tugasIF3">tugasIF3</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=tugasIF4">tugasIF4</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=switchcase">Switch Case</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Perulangan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?halaman=for">Perulangan For</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=while">Perulangan While</a></li>
            <li><a class="dropdown-item" href="index.php?halaman=dowhile">Perulangan Do While</a></li>
            
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
    <div class="container">
    <?php
    if (!empty($_GET['halaman'])) {
        $halaman = $_GET['halaman'];
        switch ($halaman) {
            case "home":
                include "home.php";
                break;
            case "latihan1":
                include "minggu1/latihan1.php";
                break;
            case "latihan2":
                include "minggu1/latihan2.php";
                break;
            case "operatorAritmatika":
                include "minggu1/operatorAritmatika.php";
                break;
            case "operatorAssignment":
                include "minggu1/operatorAssignment.php";
                break;
            case "operatorString":
                include "minggu1/operatorString.php";
                break;
            case "comparison":
                include "minggu2/comparison.php";
                break;
            case "comparison1":
                include "minggu2/comparison1.php";
                break;
            case "comparison2":
                include "minggu2/comparison2.php";
                break;
            case "tugasIF1":
                include "minggu2/tugasIF1.php";
                break;
            case "tugasIF2":
                include "minggu2/tugasIF2.php";
                break;
            case "tugasIF3":
                include "minggu2/tugasIF3.php";
                break;
            case "tugasIF4":
                include "minggu2/tugasIF4.php";
                break;
            case "switchcase":
                include "minggu2/switchcase.php";
                break;
            case "for":
                include "perulangan/for.php";
                break;
            case "while":
                include "perulangan/while.php";
                break;
            case "dowhile":
                include "perulangan/dowhile.php";
                break;
            
        
        }
    }else{
      header("location:index.php?halaman=home");
    }
    ?>
    </div>
</main>

<footer>

</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>