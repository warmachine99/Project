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

    <title>Landing Page</title>
  </head>
  <body>
    <!-- navbar brand / title --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column mt-3">
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
              <a class="nav-link" href="sports.php">Sports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sponsor.php">Sponsors</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="news" class="mt-4"></section>
      <div class="container-lg">
        <div class="text-center">
          <h2>The Global Sports Games</h2>
          <p class="lead text-muted">In recent times, sports has become a form of entertainment and self-achievement for those who possess such talents and skills. Every four years, this event is organized, for various sports for people all over the world. The thrill and self-recognition associated with competing against many for the 1st position drives athletes to strengthen their talents and skills over the 3 years, in preparation for the Global Sport Games.</p>
        </div>

      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://static.timesofisrael.com/www/uploads/2021/08/AP21219370302658.jpg" class="d-block w-100" alt="fencing">
          </div>
          <div class="carousel-item">
            <img src="https://content.thriveglobal.com/wp-content/uploads/2020/12/5-facts-about-archery-which-help-you-in-your-ambition-and-career.jpg" class="d-block w-100" alt="archery">
          </div>
          <div class="carousel-item">
            <img src="https://images.squarespace-cdn.com/content/v1/5cd8e599c2ff617c46aaf6c9/1564344730714-JYTL4P6U3B1AD53O3PNE/image-asset.jpeg?format=1000w" class="d-block w-100" alt="gymnastics">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

        <section id="news" class="bg-light mt-5">
          <div class="container-lg">
            <div class="text-center">
              <h2>News</h2>
              <p class="lead text-muted">Catch the lastest news on your favorite stars!</p>
            </div>
          </section>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://bexel.com/wp-content/uploads/2017/07/Bexel-Rentals-Mylan-World-TeamTennis-Quantum5X-player-mic.jpg" class="d-block w-100" alt="tennis">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Tennis</h5>
                    <p>Liya Wang and Daniella Coleman go head to head on the tennis court.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://media-cldnry.s-nbcnews.com/image/upload/newscms/2021_31/3497557/1332966467.jpg" class="d-block w-100" alt="volleyball">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Volleyball</h5>
                    <p>The Americans play agressively in the hopes of crushing the Brazilians.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://www.paralympic.org/sites/default/files/images/171020105248526_Amy%2BTruesdale.jpg" class="d-block w-100" alt="taekwondo">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Taekwondo</h5>
                    <p>Edwita Mc-Addy and Caroline Brown kick it off at the taekwondo arena</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
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
    