<?php

session_start();

if (!isset($_SESSION['usuario'])) {
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
    <title>CT</title>
    <link rel="stylesheet" href="../css/diseno.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="body-course">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand p-1" href="#">CT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="m-lg-3">
                <div class="usuario-name">
                    <?php echo $_SESSION['usuario']; ?>
                </div>
            </div>
        </nav>
    </header>
    <a href="close_session.php">
        <button class="btn btn-danger">CLOSE</button>
    </a>
    <div class="col-12 text-center">
        <?php 
        
         echo "Hola " .$_SESSION['usuario'];

        ?>
    </div>

</body>
</html>