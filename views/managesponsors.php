<?php
require_once("../controllers/sponsorController.php");
$sponsors = selectAllSponsors_controller();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin.css">


    <title>AdminSponsor Page</title>
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
                        <a class="nav-link active" aria-current="page" href="managesponsors.php">Manage Sponsors</a>
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

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sponsor</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Sponsor type</th>
                    <th scope="col">Actions</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sponsors as $sponsor) {
                    echo '
                        <tr>
                            <td class="d-none">' . $sponsor['sponsor_id'] . '</td>
                            <td>' . $sponsor['sponsor_name'] . '</td>
                            <td>' . $sponsor['email'] . '</td>
                            <td>' . $sponsor['telNo'] . '</td>
                            <td>' . $sponsor['sponsor_type'] . '</td>
                            <td>
                                <a href="updatesponsor.php?id='.$sponsor['sponsor_id'].'" class="btn btn-success"> Update </a>
                            </td>
                            <td>
                                <button class="btn btn-danger deleteBtn"> Delete </button>
                            </td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Delete Modal -->


    <div class="modal" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Delete Sponsor</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../actions/sponsorAction.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id='delId' name='id'>
                        Are you sure you want to delete this sponsor?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> No, Cancel</button>
                        <button type="submit" class="btn btn-danger" name="delete">Yes, delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.deleteBtn').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#delId').val(data[0]);

            });
        });
    </script>
   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

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