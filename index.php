<?php
  include 'function.php';
   $curhatan = query("SELECT * FROM curhatan ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
</head>
<link rel="stylesheet" href="style.css">
<!-- icon boastrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<style>
  .navbar .brand a {
    text-decoration: none;
  }

  .isi .container .row .col {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .kegiatan {
    width: 90%;
    background-color: silver;
    margin: 50px auto auto auto;
    padding: 20px;
  }

  .bg-secondary.bg-gradient {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
  }

  .footer .sosmed a {
    text-decoration: none;
    color: black;
  }

  .footer {
    color: black;
  }

  .kegiatan .row .col .img {
    width: 300px;
    height: 300px;
    margin-top: 30px;
    background-image: url(img/<?=$kegiatan['img'] ?>);
    background-size: cover;
    background-position: center;
  }

  .row {
    margin: auto;
  }

  /* .bio{
    width: 50%;
    margin: auto;

  } */
  .table {
    width: 40%;
  }

  #home {
    background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(tae.jpg);
      height: 600px;
      position: relative;
  }
  #home .container .row{
      width: 60%;
      margin: auto;
      text-align: center;
      position: absolute;
      top: 200px;
      right: auto;
      left: 250px;
      color: white;
  }

  /*  */
</style>

<body>

  <section class>
    <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
      <div class="container-fluid">
        <div class="brand d-flex justify-content-between align-items-center">
          <a href="#home" style="text-decoration:none;" class="logo d-flex">
            <!-- <img src="logo.png" width="150" alt="" class="ms-4 border-3-light"> -->
            <h3 class="ms-3  text-bold fw-bold text-dark">Ririn.com</h3>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="nav navbar-nav ms-auto  ">
            <li class="bar nav-item active">
              <a class="nav-link me-5 " href="#index">Home</a>
            </li>
            <li class="bar nav-item">
              <a class="link nav-link me-5 " href="#kegiatan">Content</a>
            </li>
            
            <li class="bar nav-item">
              <a class="nav-link me-5 " href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section id="home" class="isi bg-secondary">
    <div class="container ">
      <div class="row ">
          <h1 class="fw-bold">Personal Blog</h1>
          <h1 class="fw-bold">Andi Ani Nurdianingrat</h1>
          <h5 style="text-align:center;">Hi~ I'm a student</h5>
          <h5 style="text-align:center;">Website ini dibuat untuk memenuhi tugas dari matakuliah pemrograman web 2</h5>
          <!-- <div>
            <button type="button" class="btn btn-warning">
              <h6>Selengkapnya</h6>
            </button>
          </div> -->
      </div>
    </div>
  </section>

  <section class="kegiatan ">
    <h2 id="kegiatan">Content</h2>
    <div class=" d-flex justify-content-between ">
      <div class="row g-2 d-flex justify-content-between">

        <?php foreach ($curhatan as $curhat) : ?>

        <div class="col col-lg-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $curhat['title'];?></h5>
              <p class="card-text"><?= substr($curhat['content'], 0, 60); ?>...</p>
              <a href="content.php?id=<?= $curhat ['id']?>" class="btn btn-secondary">Read More -></a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

 

  <section class="footer bg-secondary">
    <div class="container-fluid  mt-5 p-3 d-flex justify-content-evenly">

      <div class="row">
        <div class="col-sm-12 col-lg-4 col-md-12">
          <div class="sosmed">
            <h5>SOCIAL MEDIA</h5>
            <h6><a href="https://instagram.com/_rrnnn?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram">
                  _rrnnn</i></a></h6>
            <h6><a href="https://twitter.com/ririnwhoami?t=qbYzgkB4R-vbMAkoEWcIGw&s=08"><i class="bi bi-twitter">ririnwhoami</i></a></h6>
          </div>
        </div>
        <div class="col-sm-12 col-lg-4 col-md-12">
          <div class="address">
            <h5>ADDRESS</h5>
            <h6> <i class="bi bi-geo-alt"></i> Sulawesi Selatan, Kab. Barru, Jl Abdul kadir jaelani, BTN Graha Mandiri Bottoe Blok A No.11 </h6>
          </div>
        </div>
        <div class=" col-sm-12 col-lg-4 col-md-12">
          <div id="contact" class="contact">
            <h5>CONTACT</h5>
            <h6><i class="bi bi-telephone"></i> <i class="bi bi-whatsapp"></i>+6288804078965</h6>
            <h6><i class="bi bi-envelope"></i> anurdianingrat@gmail.com</h6>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>


</body>

</html>