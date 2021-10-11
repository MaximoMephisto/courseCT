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
    <link rel="icon" type="image/png" href="../css/images/CT-logo.png">
    <link rel="stylesheet" href="../css/diseno.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ff041f84fb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="body-lenguaje">
    <div class="col-12 col-sm-12 text-center mt-5">
        <div class="bienvenida">
            <?php echo "¡Welcome! " . '<a class="user-name">'  . $_SESSION['usuario'] . '</a>' . "<br> Select your language"?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        <img class="card-img-top" src="../css/images/ingles.png" alt="Ingles">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">English</h5>
                        <a href="course" class="btn btn-outline-primary">Go to study</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-5 mb-3">
                <div class="card">
                    <div class="card-header text-center">
                        <img class="card-img-top" src="../css/images/español.png" alt="Español">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Español</h5>
                        <a href="course_es" class="btn btn-outline-primary">¡A estudiar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>