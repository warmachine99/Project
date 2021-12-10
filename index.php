<?php

session_start();
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
    <link rel="stylesheet" href="css/index.css">

    <title>Index Page</title>
  </head>
  <body>
    <!-- navbar brand / title --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column mt-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Global Sports Games</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <?php if(!isset($_SESSION['Admin_ID'])){
                echo '<a class="nav-link active" aria-current="page" href="views/login.php"> Sign In </a>';
              } else echo '<a class="nav-link active" aria-current="page" href="views/admin.php">Hi, '.$_SESSION['Admin_Name'].' | Manage Functions</a>';?>
              
              
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- desciption and button links -->   
        <section id="intro">
          <div class="container-lg">
            <div class="row g-4 justify-content-center align-items-center">
              <div class="col-md-5 text-center text-md-start">
                <h1>
                  <div class="display-2">Welcome to the</div>
                  <div class="display-5 text-muted">Global Sports Games</div>
                </h1>
                <p class="lead my-4 text-muted">Experience the excitement and self-recognition of being a world-renowned athlete! Compete against many for the greatest rewards. Not an athlete? Catch the most thrilling performances and support your countries representatives.</p>
              </div>
                <div class="d-grip gap-1 d-md-flex justify-content-center ">
                  <a class="btn btn-info" href="views/landingpage.php">Catch the latest news</a>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                  <span class="img" data-bs-placement="bottom" title="image cover">
                  <img src="https://www.pngall.com/wp-content/uploads/1/Sports-PNG-Image.png" class="img-fluid img-cus" alt="sports">
                  </span>
                </div>
            </div>
          </div>
        </section>

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