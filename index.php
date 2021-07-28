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
    <section id="sidebar-person">
        <div class="wrapper">
            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar navbar-expand-lg nav-color-person sticky-top">
                    <div class="container-fluid">
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#trading-information">Trading</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#cc-information">Cryptocurrency management</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Information
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#information">About us</a>
                                        <a class="dropdown-item" href="#calendary">Calendar</a>
                                    <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="">Contact</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="d-inline">
                            <button class="switch" id="switch">
                                <span class="span-person"><i class="fas fa-sun"></i></span>
                                <span class="span-person"><i class="fas fa-moon"></i></span>
                            </button>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div id="card" class="col-12 col-sm-5 mt-5 mb-5">
                            <div class="row">
                                <div class="col-3 col-sm-3 text-center my-2">
                                    <i class="fab fa-bitcoin"></i>
                                </div>
                                <div class="col-9 col-sm-9 my-2">
                                    <p>
                                        Learn how to trade bitcoin
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <canvas id="lineChart" width="100" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div id="card-info" class="col-12 col-sm-6 text-end mt-5 mb-5">
                            <p>
                                With our course, understanding graphics is easy. Sign up for our next course opening
                            </p>
                            <div class="col-12 col-sm-12 text-end">
                                <a href="#"><i class="fas fa-calendar-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5 mb-5">
                            <canvas id="barChart" width="100" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div id="trading-information" class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5">
                            <h4>Learn trading</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h5>
                                To teach you how to trade, we will start by introducing you to the world of cryptocurrencies.
                                You will learn to read charts and know how to invest at the right time to generate profits
                            </h5>
                        </div>
                        <div class="col-12 col-sm-6 text-center">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="col-12 col-sm-12 mt-2">
                            <h6>
                                The courses are totally online, each student chooses their time to see the classes
                            </h6>
                        </div>
                    </div>
                </div>
                <div id="cc-information" class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5">
                            <h4>Cryptocurrency management</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h5>
                            Unlike the trading course, in this one we teach you how cryptocurrencies are handled, what they are, and how to invest.
                            If you want to generate profits reading graphs, and in direct contact with the management of crypto, we recommend the trading course
                            </h5>
                        </div>
                        <div class="col-12 col-sm-6 text-center">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="col-12 col-sm-12 mt-2">
                            <h6>
                                The courses are totally online, each student chooses their time to see the classes
                            </h6>
                        </div>
                    </div>
                </div>
                <div id="information" class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5">
                            <h4>About us</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h5>
                                We are a company founded by traders who seek to promote the management of cryptocurrencies through courses where you can learn to be a professional trader.
                                As the course progresses, we as a company also advance, thus becoming a community capable of sustaining this decentralized economy that are cryptocurrencies
                            </h5>
                        </div>
                        <div class="col-12 col-sm-6 text-center">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="col-12 col-sm-12 mt-2 mb-5">
                            <h6>
                                We take care of teaching what is necessary for safe trading
                            </h6>
                        </div>
                    </div>
                </div>
                <div id="calendary" class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-5">
                            <h4>Start calendar</h4>
                        </div>
                        <div class="col-12 col-sm-12">
                            <h6>
                                Registration begins on the date marked
                            </h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 text-center mb-5">
                            <div class="calendary">
                                <h4>September</h4>
                                <ol>
                                    <li class="day-name">M</li>
                                    <li class="day-name">T</li>
                                    <li class="day-name">W</li>
                                    <li class="day-name">T</li>
                                    <li class="day-name">F</li>
                                    <li class="day-name">S</li>
                                    <li class="day-name">S</li>
                                    <li class="first-day">1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>
                                    <li>9</li>
                                    <li>10</li>
                                    <li>11</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                    <li class="init-course">15</li>
                                    <li>16</li>
                                    <li>17</li>
                                    <li>18</li>
                                    <li>19</li>
                                    <li>20</li>
                                    <li>21</li>
                                    <li>22</li>
                                    <li>23</li>
                                    <li>24</li>
                                    <li>25</li>
                                    <li>26</li>
                                    <li>27</li>
                                    <li>28</li>
                                    <li>29</li>
                                    <li>30</li>
                                    <li>31</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-4 text-center my-2">
                            <img class="img-person" src="css/images/CT-logo.png" alt="LOGO">
                        </div>
                        <div class="col-6 col-sm-2 text-center my-5">
                            <a href="">Suport center</a>
                        </div>
                        <div class="col-6 col-sm-2 text-center my-5">
                            <a href="">Notice</a>
                        </div>
                        <div class="col-6 col-sm-2 text-center my-5">
                            <a href="">Report</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <script src="js/myChart.js"></script>
    <script src="js/barChart.js"></script>
    <script src="js/theme.js"></script>

</body>
</html>