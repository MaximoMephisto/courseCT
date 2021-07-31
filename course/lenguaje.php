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
<body id="body-lenguaje">
    <div class="col-12 col-sm-12 text-center mt-3">
        <div class="bienvenida">
            <?php echo "¡Welcome! " .$_SESSION['usuario'] ."<br> Select your language"?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 mt-3">
                <div class="card">
                    <img class="card-img-top" src="../css/images/ingles.png" alt="Ingles">
                    <div class="card-body text-center">
                        <h5 class="card-title">English</h5>
                        <a href="course" class="btn btn-dark">Go to study</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="../css/images/español.png" alt="Español">
                    <div class="card-body text-center">
                        <h5 class="card-title">Español</h5>
                        <a href="course_es" class="btn btn-dark">¡A estudiar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>