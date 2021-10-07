<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Trader</title>
    <link rel="icon" type="image/png" href="css/images/CT-logo.png">
    <link rel="stylesheet" href="css/diseno.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ff041f84fb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.js" integrity="sha512-lUsN5TEogpe12qeV8NF4cxlJJatTZ12jnx9WXkFXOy7yFbuHwYRTjmctvwbRIuZPhv+lpvy7Cm9o8T9e+9pTrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="body">
    <header id="header">
        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-sm-6 my-3">
                        <span class="span-one">C</span><span class="span-two">T</span>
                    </div> 
                    <div class="col-6 col-sm-3 my-3 text-end">
                        <a class="after-decoration" href="#">
                            <span>Contact</span>
                        </a>
                    </div>
                    <div class="col-6 col-sm-3 my-3 text-start text-sm-end">
                        <a class="after-decoration" href="#">
                            <span><i class="fas fa-globe"></i></span> <span>Team DPL</span>
                        </a> 
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-person">
            <div class="container-fluid">
                <button class="btn btn-primary d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link after-decoration" href="#">Trading</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link after-decoration" href="#">Cryptocurrency management</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Information
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">About us</a>
                                <a class="dropdown-item" href="#">Contact</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Donate</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-inline">
                    <div id="switch" class="btnSwitch">
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-lightbulb"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-3 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-sm-12 text-center">
                                <span>
                                    Course
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 p-2">
                            <div class="col-12 col-sm-12">
                                <span>
                                    About course
                                </span>
                            </div>
                            <div class="col-12 col-sm-12">
                                <p>
                                    To teach you how to trade, we will start by introducing you to the world of cryptocurrencies.
                                    You will learn to read charts and know how to invest at the right time to generate profits.
                                </p>
                            </div>
                            <div class="col-12 col-sm-12 text-center">
                                <i class="far fa-chart-bar p-1"></i> <i class="fas fa-chart-area p-1"></i> <i class="fas fa-chart-line p-1"></i>
                            </div>
                            <div class="col-12 col-sm-12">
                                <p>
                                    The courses are totally online, each student chooses their time to see the classes.
                                </p>
                            </div>
                            <div class="col-12 col-sm-12">
                                <canvas id="lineChart" width="100" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-sm-12 text-center">
                                <span>
                                    Cryptocurrency management
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 p-2">
                            <p>
                                Before the trading course, we will start with teaching you how cryptocurrencies are handled, 
                                what they are and how to invest. If you already have knowledge about cryptocurrencies and 
                                how to handle them, we recommend going directly to the trading section.
                            </p>
                        </div>
                        <div class="card-header">
                            <div class="col-12 col-sm-12 text-center">
                                <span>
                                    About us
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 p-2">
                            <p>
                                We are a company founded by traders who seek to promote the management of cryptocurrencies through 
                                courses where you can learn to be a professional trader. As the course progresses, we as a company 
                                also advance, thus becoming a community capable of sustaining this decentralized economy that are 
                                cryptocurrencies.
                            </p>
                        </div>
                        <div class="col-12 col-sm-12 p-2">
                            <span>Contact us</span>
                        </div>
                        <div class="col-12 col-sm-12 text-center">
                            <a href="">
                                <i class="fab fa-telegram p-1"></i> <i class="fab fa-discord p-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-sm-12 text-center">
                                <span>
                                    Important
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 p-2">
                            <p>
                                Although we are a company founded by professional traders, we do not take responsibility for the undue 
                                handling of cryptocurrencies or the loss of money when investing in them. We take care of providing the 
                                information without forcing you to invest, all this is for educational purposes. Be responsible.
                            </p>
                        </div>
                        <div class="col-12 col-sm-12 p-2">
                            <canvas id="barChart" width="100" height="40"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="container-fluid footer bg-person">
            <div class="row">
                <div class="col-6 col-sm-3 text-center">
                    <span class="span-one">C</span><span class="span-two">T</span>
                </div>
                <div class="col-6 col-sm-3 mt-4 text-center">
                    <a class="after-decoration" href="">Suport</a>
                </div>
                <div class="col-6 col-sm-3 mt-4 text-center">
                    <a class="after-decoration" href="">Notice</a>
                </div>
                <div class="col-6 col-sm-3 mt-4 text-center">
                    <a class="after-decoration" href="https://cointrade.gitbook.io/cointrade/">Company policy</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/myChart.js"></script>
    <script src="js/barChart.js"></script>
    <script src="js/theme.js"></script>
</body>
</html>