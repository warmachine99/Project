<?php

require_once("../controllers/athleteController.php");

$sporting_event = selectAllSports_controller();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/landingpage.css">

  <title>Sports Event Page</title>
</head>

<body>
  <!-- navbar brand / title -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light flex-column mt-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">Global Sports Games</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="landingpage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="athlete.php">Athletes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="sports.php">Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sponsor.php">Sponsors</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-3 mb-4 border-bottom header-dark bg-dark">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="sports.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-light text-decoration-none">
        <span class="fs-1">Sporting Events</span>
      </a>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <?php

      foreach ($sporting_event as $event_type) {
      ?>

        <div class="col order-1" style="margin: 15px;">
          <div class="card" style="width: 18rem;">
            <img src="../Images/<?= $event_type['event_img'] ?>" class="card-img-top" alt="sport">
            <div class="card-body">
              <p class="card-text"><?= $event_type['event_type'] ?></p>

            </div>
          </div>
        </div>

      <?php
      }
      ?>

    </div>
    </div>
      <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->

<footer class="footer-main p-20 content-center mt-4">

  <p>Contact us: support@gsg.com</p>
  <div>
    <i class="fab fa-instagram me-3"></i>
    <i class="fab fa-twitter me-3"></i>
    <i class="fab fa-facebook me-3"></i>
  </div>
  <p>© 2020–2021 Global Sport Games - All rights are reserved</p>
</footer>
</body>

</html>