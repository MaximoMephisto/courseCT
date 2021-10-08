<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<body id="body_login">  
    <div class="container">
        <div class="col-12 col-sm-12 text-center">
            <section id="card-form">
                <div class="modal-dialog text-center">
                    <div class="col-12 col-sm-12">
                        <div class="modal-content">
                            <div class="col-12 col-sm-12 text-center">
                                <h1 class="h1-login">CT</h1>
                                <h5>Users</h5>
                            </div>
                            <form class="col-12 col-sm-12 p-1" action="../php/login_admin.php" method="POST">
                                <div class="form-group mt-3">
                                    <input class="form-control" id="txtCorreo" name="txtCorreo" require rows="1" placeholder="Mail" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="password" class="form-control" id="txtClave" name="txtClave" require rows="1" placeholder="Password" required>
                                </div>
                                <div class="col-12 col-sm-12 text-end mt-3 mb-1">
                                    <button class="btn btn-outline-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>