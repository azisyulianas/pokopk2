<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="gaya.css">
    <link href="\PK2\Gambar\Icon_eevee-removebg-preview(1).png" rel="icon">
    <title>My Own Pokedex</title>
</head>
<?php
  session_start();
  include('login.php');
?>
<body>
    <nav id="NavBar" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="\PK2\Gambar\Icon_eevee-removebg-preview(1).png" alt="" width="40" height="30">
                PokeALi
            </a>
          <div class="collapse navbar-collapse" id="navbarText">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto" style="float: right !important; margin-right: 15px;">
                  <a class="nav-link" href="#">Home</a>
                  <?php
                    if(isset($_SESSION['nama'])){
                      echo '<a href="../PK2/keluar.php" class="nav-link borderlin">Keluar</a>';
                    } else {
                      echo '
                      <a class="nav-link borderlin" id="SignUp" data-bs-toggle="modal" data-bs-target="#SignUp">Sign Up</a>
                      <a class="nav-link borderlin" id="Login" data-bs-toggle="modal" data-bs-target="#LoginUser">Login</a>
                      ';
                    }
                    ?>
                </div>
              </div>
          </div>
        </div>
    </nav>