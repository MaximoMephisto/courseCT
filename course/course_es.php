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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="body-course">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand p-1" href="#">CT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Administración</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Telegram</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>
                </ul>
            </div>
            <div class="m-lg-3">
                <div class="usuario-name">
                    <?php echo $_SESSION['usuario']; ?>
                </div>
            </div>
            <div id="scroll-progress"></div>
        </nav>
    </header>
    <main>
        <section id="init">
            <div class="col-12 col-sm-12 text-center mt-5 mb-5 p-3">
                <div id="accordion" class="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Qué es trading?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Cuando hablamos del Trading, hacemos referencia al análisis tecnico que hacemos para obtener
                                beneficios de instrumentos financieros, en nuestro caso, las criptomonedas.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Qué riesgos corro al traedear?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>Perdidas por errores e inconsistencia dentro del proceso de Trading.</li>
                                    <li>Tomar decisiones anticipadas, las cuales tienen una gran repercución en las inversiones.</li>
                                    <li>Realizar inversiones sin antes haber realizado una investigación segura.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Cómo aprenderé a tradear?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Empezaremos enseñandole aspectos básicos del manejo de las criptomonedas, como también a tradear con 
                                distintas herramientas utilizada para leer los gráficos. Es importante destacar la reponsabilidad que el
                                cursante debe mantener a la hora de hacer este curso, no utilicé las herramientas sin antes haberlas entendido
                                y aprendido correctamente.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="link">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 text-center mt-5 mb-5">
                        <a href="#data">
                            <h3>
                                Empezar
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="data">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 card-data">
                        <div class="card">
                            <div class="card-header text-center">
                                ¿Qué son las criptomonedas?
                            </div>
                            <div class="card-body">
                                La criptomoneda, también llamada moneda virtual o criptodivisa, es dinero digital. Eso significa que no hay monedas ni billetes
                                físicos (todo es en línea). Usted puede transferirle una criptomoneda a alguien en internet sin un intermediario. <br>
                                Algo que hace a las criptomonedas especiales, es el hecho de ser totalmente descentralizadas. <br>
                                Las criptomonedas son comunmente utilizadas para hacer pagos rápidos y para evitar los cargos de transacción. Muchas personas adquieren las 
                                criptomonedas como una inversión, con la esperanza de que aumente su valor. <br>
                                Para adquirir criptomonedas, es necesaria su compra con una tarjeta de crédito o, en algunos casos, a través de un proceso de minado, el cual 
                                requiere de una inversión previa. Las criptomonedas se almacenan en un monedero o cartera digital, ya sea en línea, en su computadora o en otro soporte físico.
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Aspectos a tomar en cuenta 
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Las criptomonedas no están aseguradas por el gobierno como sí lo están los depósitos bancarios. Esto significa que las criptomonedas almacenadas en línea no
                                        tienen las mismas protecciones que tiene el dinero depositado en una cuenta bancaria. Si usted almacena una criptomoneda en una cartera o monedero digital provisto
                                        por una compañía, y la compañía cesa sus operaciones o sufre un ataque informático, es posible que el gobierno no pueda actuar y ayudarlo a recuperar el dinero como 
                                        podría hacerlo con el dinero que se guarda en los bancos o cooperativas de crédito. <br>
                                        De todas formas, que esto no te asuste. Las criptomonedas cuentan con la <b>seguridad de la blockchain</b>, la cual emplea mecanismos criptográficos de seguridad para
                                        acceder, firmar y cifrar las transacciones, los bloques y su encadenado. Las claves privadas pueden estar vinculadas a la identidad de los usuarios o a elementos 
                                        intermedios; por ejemplo, las carteras digitales con las que la plataforma ofrece el anonimato de las operaciones.
                                    </li>
                                    <li>
                                        El valor de una criptomoneda puede cambiar cada hora. Una inversión que hoy puede tener un valor de miles de dólares mañana podría valer solo cientos de dólares.
                                        Si el valor baja, no hay garantía de que vuelva a subir. Aunque existen herramientas que podrian determinar si una moneda tiene posibilidad de ascender o descender. <br>
                                        <b>En ocasiones, que una criptomoneda baje de precio significa una gran oportunidad para invertir</b>
                                    </li>
                                    <li>
                                        Al hacer un pago, si algo sale mal, las tarjetas de crédito y las tarjetas de débito tienen protecciones legales. Por ejemplo, si tiene que disputar una compra, 
                                        la compañía de su tarjeta de crédito tiene un proceso para ayudarlo a recuperar su dinero. Por lo general, los pagos con criptomonedas son irreversibles. <br>
                                        Una vez que usted paga con una criptomoneda, solo puede recuperar su dinero si el vendedor se lo envía de vuelta. <br>
                                        <b>En CT nos encargaremos de proporcionarle información para que pueda realizar una compra segura y con menor riesgo de perdida</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                ¿Dónde puedo comprar criptomonedas?
                            </div>
                            <div class="card-body">
                                Existen muchas Exchanges, que son plataformas digitales que permiten intercambiar monedas digitales por dinero fiat y/u otras criptomonedas o mercancías. <br>
                                A continuación, te enlistaremos las principales Exchanges con las cuales puede realizar compras de criptomonedas: <br>
                                <ul>
                                    <li>Binance</li>
                                    <li>Huobi</li>
                                    <li>Coinbase</li>
                                    <li>FTX</li>
                                    <li>Kraken</li>
                                    <li>KuCoin</li>
                                </ul> 
                                Y muchas otras más. <br>
                                Si desea ver un listado más extenso en donde puede encontrar las Exchanges ordenadas por ranking junto con más información sobre la misma. <br>
                                Visite esta página: <a href="https://coinmarketcap.com/es/rankings/exchanges/">CoinMarketCap Exchanges</a>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Binance Trading
                            </div>
                            <div class="card-body">
                                Binance, la plataforma digital de intercambio considerada como la que tiene mayor volumen comercial del mundo, es la que recomendamos para realizar compras de criptomonedas
                                e incluso trading. <br>
                                En esta plataforma podremos realizar compras, tradear, e incluso guardar nuestras criptomonedas. <br>
                                <ul>
                                    <li>
                                        Compra P2P: Es un mercado en el que los usuarios de binance pueden intercambiar criptomonedas directamente entre ellos, en virtud de sus propias condiciones,
                                        en prácticamente cualquier país.
                                    </li>
                                    <li>
                                        Conversión: Es la opción más rápida y sencilla que nos ofrece Binance para pasar de una criptomoneda a otra. El monto mínimo para cambiar es de 20USDT (USDT o Theter,
                                        es la criptomoneda creada con la finalidad de tener el mismo valor o acercarse al valor del dolar estadounidense). <br>
                                        Las operaciones se liquidan directamente en la billetera spot de tu cuenta de Binance. Las liquidaciones suelen producirse inmediatamente después de confirmar una operación.
                                    </li>
                                    <li>
                                        Trading y billetera margin: Contamos con tres apartados, el clásico y el avanzado. En ambos casos podremos realizar trading y comprar o vender criptomonedas de manera rápida. <br>
                                        Es para usuarios más avanzados en el área, pero se puede probar realizando seguimientos a monedas sin gastar o invertir dinero.
                                    </li>
                                    <li>
                                        Tokens de acciones: Esta opción de Binance finalizará el 14 de octubre.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Binance P2P
                            </div>
                            <div class="card-body">
                                Con la compra de criptomonedas P2P de Binance, tenemos diversas ventajas sobre otro tipo de compras. Como por ejemplo: <br>
                                <ul>
                                    <li>
                                        La verificación de identidad de los vendedores de criptodivisas.
                                    </li>
                                    <li>
                                        Los precios y las opciones de pago dentro de horarios laborales.
                                    </li>
                                    <li>
                                        Podremos ver la reputación del vendedor.
                                    </li>
                                </ul>
                                Recomendamos a los nuevos inversores de criptomonedas que compran desde Binance P2P verificar del vendedor: <br>
                                <ul>
                                    <li>
                                        Reputación de más del 95% 
                                    </li>
                                    <li>
                                        Tilde de verificación <i class="fas fa-check-circle"></i>
                                    </li>
                                    <li>
                                        Número de ordenes.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Coin Market Cap
                            </div>
                            <div class="card-body">
                                Es una Web especializada en proveer información de todas las criptodivisas a traders e inversores. <br>
                                es una de las fuentes más confiables para encontrar datos estadísticos sobre las criptodivisas en circulación. 
                                Su página principal es una de las más visitadas por los entusiastas e inversores en el terreno de las monedas digitales. <br>
                                Dentro de su plataforma podremos informarnos sobre: <br>
                                <ul>
                                    <li>
                                        Valor de criptomonedas dentro de un ranking.
                                    </li>
                                    <li>
                                        Precio de la criptomoneda e información relevante.
                                    </li>
                                    <li>
                                        Cotización de la criptodivisa y datos historicos sobre la misma.
                                    </li>
                                    <li>
                                        Exchanges donde puede comprar la criptodivisa que desea.
                                    </li>
                                    <li>
                                        Criptomonedas en tendencia.
                                    </li>
                                    <li>
                                        Nuevas criptomonedas en el mercado.
                                    </li>
                                    <li>
                                        Capitalización compuesta y dominio del Bitcoin, Ethereum, entre otras.
                                    </li>
                                    <li>
                                        Criptomonedas en circulación.
                                    </li>
                                    <li>
                                        Herramientas 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Wallet
                            </div>
                            <div class="card-body">
                                Es uno de los elementos más importantes utilizados en este mundo de las criptomonedas.
                                son el puente que nos permiten administrar nuestras criptomonedas. Una pieza de software
                                o de hardware con los que realizar las operaciones de recepción y envío a través de la red 
                                blockchain de cada criptomoneda.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <a href="close_session.php">
        <button class="btn btn-danger">CERRAR</button>
    </a>

    <script src="../js/scroll.js"></script>

</body>
</html>