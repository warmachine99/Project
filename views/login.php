<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">

    <title>Login Page</title>
  </head>

    <body>
        <div class="justify-content-center" id="main-section">
            <div class="card col-5" id="login-card">
                <div class="card-body">
                    <form class="row g-3" action="../actions/adminAction.php" method="POST">
                        <h3>Log in</h3>
                        <div class="row">
                        <div class="col-6">
                          <label for="Email" class="form-label">Email</label>
                          <input type="text" id="email" class="form-control" name="email">
                          <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"-->
                        </div>
                        
                        <div class="col-6">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                          <div class="col-12" id="button2">
                            <button type="submit" class="btn btn-primary my-2" name="login">Log in</button>
                          </div>
                          <a href="../index.php" class="btn btn-link my-2">Go to previous page</a></p>
                            </label>
                          </div>
                        </div>
                    </form>
             
                    </div>
    
               </div>
            </div>
        </div>
        
        <!-- <script>
    var input = document.getElementById('email');
    input.oninvalid = function(event) {
    event.target.setCustomValidity('Phone number should only contain numbers.');
}
  </script> -->
    </body>

</html>