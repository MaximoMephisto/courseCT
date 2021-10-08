<?php 

session_start();

if (!isset($_SESSION['admin'])) {
    echo '
    <script>
        alert("Please login");
        window.location= "login";
    </script>
    ';

    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Register Users</title>
    <link rel="icon" type="image/png" href="../css/images/CT-logo.png">
    <link rel="stylesheet" href="../css/diseno.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ff041f84fb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.js" integrity="sha512-lUsN5TEogpe12qeV8NF4cxlJJatTZ12jnx9WXkFXOy7yFbuHwYRTjmctvwbRIuZPhv+lpvy7Cm9o8T9e+9pTrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"> 
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                CT | Dashboard
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Options
                        </h5>
                        <i class="fas fa-times" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                        </i>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registerAdmins">Admins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../php/close_session.php">Close session</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <header>
        <section id="register_users">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 mt-5 text-center">
                        <h2>USERS</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Register</h3>
                            </div>
                            <div class="card-body">
                                <form action="../php/register_user.php" method="POST">
                                    <input type="text" placeholder="Name" name="txtNombre" id="txtNombre" class="form-control my-1">
                                    <input type="text" placeholder="Mail" name="txtCorreo" id="txtCorreo" class="form-control my-1">
                                    <input type="password" placeholder="Password" name="txtClave" id="txtClave" class="form-control my-1">
                                    <div class="col-12 col-sm-12 mt-3 text-end">
                                        <button class="btn btn-dark">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Users list</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="table-dark text-center">
                                        <tr>
                                            <th>Name</th>
                                            <th>Mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
</body>
</html>