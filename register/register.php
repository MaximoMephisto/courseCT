<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/diseno.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="body-register">
    <div class="modal-dialog text-center">
        <div class="col-12 col-sm-12">
            <div class="modal-content">
                <div class="col-12 col-sm-12 text-center">
                    <h1 class="h1-person">CT</h1>
                    <h5>Users</h5>
                </div>
                <form class="col-12 col-sm-12 mt-5 p-1" action="register_funcion.php" method="POST">
                    <div class="form-group">
                        <textarea class="form-control" id="correo" name="correo" require rows="1" placeholder="example@mail.com" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" id="nombre" name="nombre" require rows="1" placeholder="Name" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" id="contrasena" name="contrasena" require rows="1" placeholder="Password" required></input>
                    </div>
                    <div class="col-12 col-sm-12 text-end mt-3 mb-1">
                        <button class="btn btn-danger">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>