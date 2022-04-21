<?php 
include 'function.php';
$id=$_GET['id'];

$curhatan = query("SELECT * FROM curhatan WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .footer .sosmed a {
    text-decoration: none;
    color: black;
  }
  .footer{
    color: black;
  }
</style>

<!-- icon boastrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
<section class>
    <nav class="navbar  navbar-expand-lg navbar-light bg-secondary ">
      <div class="container-fluid">
        <div class="brand d-flex justify-content-between align-items-center">
          <a href="index.php" style="text-decoration:none;" class="logo d-flex">
            <!-- <img src="logo.png" width="150" alt="" class="ms-4 border-3-light"> -->
            <h3 class="ms-3  text-bold fw-bold text-light" >Ririn.com</h3>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="nav navbar-nav ms-auto  ">
            <li class="bar nav-item active">
              <a class="nav-link me-5 " href="index.php#home">Home</a>
            </li>
            <li class="bar nav-item">
              <a class="link nav-link me-5 " href="index.php#curhatan">Content</a>
            </li>
            <li class="bar nav-item">
              <a class="nav-link me-5 " href="index.php#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section>
          <div class="container ">
                <div class="text ">
                    <h3><?= $curhatan['title']; ?></h3>
                    <p><span>Ririn.com-</span> <?= $curhatan['content']; ?></p>
                </div>
                
          </div>
      </section>

      

      <section class="footer bg-secondary">
    <div class="container  mt-5 p-3 d-flex justify-content-evenly">
      <div class="sosmed">
        <h5>SOCIAL MEDIA</h5>
        <h6><a href="https://instagram.com/_rrnnn?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram"> _rrnnn</i></a></h6>
        <h6><a href="https://twitter.com/ririnwhoami?t=qbYzgkB4R-vbMAkoEWcIGw&s=08"><i class="bi bi-twitter"> ririnwhoami</i></a></h6>
      </div>

      <div class="contact">
        <h5>CONTACT</h5>
        <h6>+6288804078965</h6>
        <h6>anurdianingrat@gmail.com</h6>
      </div>
      <div class="address">
        <h5>ADDRESS</h5>
        <h6>Sulawesi Selatan, Kab. Barru, Jl Abdul kadir jaelani, BTN Graha Mandiri Bottoe Blok A No.11 </h6>
      </div>
    </div>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              


</body>
</html>