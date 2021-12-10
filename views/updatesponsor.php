<?php
  require_once("../controllers/sponsorController.php");
  $sponsors = selectOneSponsor_controller($_GET['id']);
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
  <link rel="stylesheet" href="../css/admin.css">

  <title>Update Page</title>
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
            <a class="nav-link" aria-current="page" href="admin.php">Manage Atheletes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="managesponsors.php">Manage Sponsors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../actions/logout.php">Sign out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-3 mb-4 border-bottom header-dark bg-dark">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-light text-decoration-none">
        <span class="fs-1">Admin dashboard</span>
      </a>
    </div>
  </header>

  <div class="card col-5" id="athlete-card">
    <div class="card-body">
      <form class="row g-3" action="../actions/sponsorAction.php" method="POST">
        <h1>Update Sponsor</h1>
        <div class="row">
          <div class="col-md-10">
            <label for="sponsor" class="form-label">Sponsor</label>
            <input type="text" class="form-control" id="sponsor" name="sponsor" value="<?=$sponsors['sponsor_name']?>">
          </div>
          <div class="col-md-10">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?=$sponsors['email']?>">
          </div>
          <div class="col-md-10">
            <label for="telephone" class="form-label">Telephone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" value="<?=$sponsors['telNo']?>">
          </div>
        </div>
        <div class="col-md-10">
          <label for="sponsor-type" class="form-label">Sponsor Type</label>
          <select id="doping" class="form-select" name="sponsor_type">
            <option selected value="<?=$sponsors['sponsor_type']?>"><?=$sponsors['sponsor_type']?></option>
            <option>financial</option>
            <option>in-kind</option>
          </select>
        </div>
        <div class="d-grip gap-1 d-md-flex justify-content-md-end ">
          <input type="hidden" class="form-control" id="id" name="id" value="<?=$sponsors['sponsor_id']?>">
          <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </div>
    </label>
  </div>
  </div>
  </form>
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

  <footer class="footer-main p-20 d-flex content-center flex-column mt-4">

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