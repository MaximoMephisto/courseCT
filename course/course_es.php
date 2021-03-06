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
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand p-1" href="#">CT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Administraci??n</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Telegram</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Apartados
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#init">Principal</a>
                        <a class="dropdown-item" href="#trading">Trading</a>
                        <a class="dropdown-item" href="#estrategias">Estrategias</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../index.php">Ir a p??gina principal</a>
                        <a class="dropdown-item" href="../php/close_session.php">Cerrar sesi??n</a>
                        </div>
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
                                    ??Qu?? es trading?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Cuando hablamos del Trading, hacemos referencia al an??lisis tecnico que hacemos para obtener
                                beneficios de instrumentos financieros, en nuestro caso, las criptomonedas.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ??Qu?? riesgos corro al traedear?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>Perdidas por errores e inconsistencia dentro del proceso de Trading.</li>
                                    <li>Tomar decisiones anticipadas, las cuales tienen una gran repercuci??n en las inversiones.</li>
                                    <li>Realizar inversiones sin antes haber realizado una investigaci??n segura.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ??C??mo aprender?? a tradear?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Empezaremos ense??andole aspectos b??sicos del manejo de las criptomonedas, como tambi??n a tradear con 
                                distintas herramientas utilizada para leer los gr??ficos. Es importante destacar la reponsabilidad que el
                                cursante debe mantener a la hora de hacer este curso, no utilic?? las herramientas sin antes haberlas entendido
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
                                ??Qu?? son las criptomonedas?
                            </div>
                            <div class="card-body">
                                La criptomoneda, tambi??n llamada moneda virtual o criptodivisa, es dinero digital. Eso significa que no hay monedas ni billetes
                                f??sicos (todo es en l??nea). Usted puede transferirle una criptomoneda a alguien en internet sin un intermediario. <br>
                                Algo que hace a las criptomonedas especiales, es el hecho de ser totalmente descentralizadas. <br>
                                Las criptomonedas son comunmente utilizadas para hacer pagos r??pidos y para evitar los cargos de transacci??n. Muchas personas adquieren las 
                                criptomonedas como una inversi??n, con la esperanza de que aumente su valor. <br>
                                Para adquirir criptomonedas, es necesaria su compra con una tarjeta de cr??dito o, en algunos casos, a trav??s de un proceso de minado, el cual 
                                requiere de una inversi??n previa. Las criptomonedas se almacenan en un monedero o cartera digital, ya sea en l??nea, en su computadora o en otro soporte f??sico.
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Aspectos a tomar en cuenta 
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Las criptomonedas no est??n aseguradas por el gobierno como s?? lo est??n los dep??sitos bancarios. Esto significa que las criptomonedas almacenadas en l??nea no
                                        tienen las mismas protecciones que tiene el dinero depositado en una cuenta bancaria. Si usted almacena una criptomoneda en una cartera o monedero digital provisto
                                        por una compa????a, y la compa????a cesa sus operaciones o sufre un ataque inform??tico, es posible que el gobierno no pueda actuar y ayudarlo a recuperar el dinero como 
                                        podr??a hacerlo con el dinero que se guarda en los bancos o cooperativas de cr??dito. <br>
                                        De todas formas, que esto no te asuste. Las criptomonedas cuentan con la <b>seguridad de la blockchain</b>, la cual emplea mecanismos criptogr??ficos de seguridad para
                                        acceder, firmar y cifrar las transacciones, los bloques y su encadenado. Las claves privadas pueden estar vinculadas a la identidad de los usuarios o a elementos 
                                        intermedios; por ejemplo, las carteras digitales con las que la plataforma ofrece el anonimato de las operaciones.
                                    </li>
                                    <li>
                                        El valor de una criptomoneda puede cambiar cada hora. Una inversi??n que hoy puede tener un valor de miles de d??lares ma??ana podr??a valer solo cientos de d??lares.
                                        Si el valor baja, no hay garant??a de que vuelva a subir. Aunque existen herramientas que podrian determinar si una moneda tiene posibilidad de ascender o descender. <br>
                                        <b>En ocasiones, que una criptomoneda baje de precio significa una gran oportunidad para invertir</b>
                                    </li>
                                    <li>
                                        Al hacer un pago, si algo sale mal, las tarjetas de cr??dito y las tarjetas de d??bito tienen protecciones legales. Por ejemplo, si tiene que disputar una compra, 
                                        la compa????a de su tarjeta de cr??dito tiene un proceso para ayudarlo a recuperar su dinero. Por lo general, los pagos con criptomonedas son irreversibles. <br>
                                        Una vez que usted paga con una criptomoneda, solo puede recuperar su dinero si el vendedor se lo env??a de vuelta. <br>
                                        <b>En CT nos encargaremos de proporcionarle informaci??n para que pueda realizar una compra segura y con menor riesgo de perdida</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                ??D??nde puedo comprar criptomonedas?
                            </div>
                            <div class="card-body">
                                Existen muchas Exchanges, que son plataformas digitales que permiten intercambiar monedas digitales por dinero fiat y/u otras criptomonedas o mercanc??as. <br>
                                A continuaci??n, te enlistaremos las principales Exchanges con las cuales puede realizar compras de criptomonedas: <br>
                                <ul>
                                    <li>Binance</li>
                                    <li>Huobi</li>
                                    <li>Coinbase</li>
                                    <li>FTX</li>
                                    <li>Kraken</li>
                                    <li>KuCoin</li>
                                </ul> 
                                Y muchas otras m??s. <br>
                                Si desea ver un listado m??s extenso en donde puede encontrar las Exchanges ordenadas por ranking junto con m??s informaci??n sobre la misma. <br>
                                Visite esta p??gina: <a href="https://coinmarketcap.com/es/rankings/exchanges/">CoinMarketCap Exchanges</a>
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
                                        en pr??cticamente cualquier pa??s.
                                    </li>
                                    <li>
                                        Conversi??n: Es la opci??n m??s r??pida y sencilla que nos ofrece Binance para pasar de una criptomoneda a otra. El monto m??nimo para cambiar es de 20USDT (USDT o Theter,
                                        es la criptomoneda creada con la finalidad de tener el mismo valor o acercarse al valor del dolar estadounidense). <br>
                                        Las operaciones se liquidan directamente en la billetera spot de tu cuenta de Binance. Las liquidaciones suelen producirse inmediatamente despu??s de confirmar una operaci??n.
                                    </li>
                                    <li>
                                        Trading y billetera margin: Contamos con tres apartados, el cl??sico y el avanzado. En ambos casos podremos realizar trading y comprar o vender criptomonedas de manera r??pida. <br>
                                        Es para usuarios m??s avanzados en el ??rea, pero se puede probar realizando seguimientos a monedas sin gastar o invertir dinero.
                                    </li>
                                    <li>
                                        Tokens de acciones: Esta opci??n de Binance finalizar?? el 14 de octubre.
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
                                        La verificaci??n de identidad de los vendedores de criptodivisas.
                                    </li>
                                    <li>
                                        Los precios y las opciones de pago dentro de horarios laborales.
                                    </li>
                                    <li>
                                        Podremos ver la reputaci??n del vendedor.
                                    </li>
                                </ul>
                                Recomendamos a los nuevos inversores de criptomonedas que compran desde Binance P2P verificar del vendedor: <br>
                                <ul>
                                    <li>
                                        Reputaci??n de m??s del 95% 
                                    </li>
                                    <li>
                                        Tilde de verificaci??n <i class="fas fa-check-circle"></i>
                                    </li>
                                    <li>
                                        N??mero de ordenes.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Coin Market Cap
                            </div>
                            <div class="card-body">
                                Es una Web especializada en proveer informaci??n de todas las criptodivisas a traders e inversores. <br>
                                es una de las fuentes m??s confiables para encontrar datos estad??sticos sobre las criptodivisas en circulaci??n. 
                                Su p??gina principal es una de las m??s visitadas por los entusiastas e inversores en el terreno de las monedas digitales. <br>
                                Dentro de su plataforma podremos informarnos sobre: <br>
                                <ul>
                                    <li>
                                        Valor de criptomonedas dentro de un ranking.
                                    </li>
                                    <li>
                                        Precio de la criptomoneda e informaci??n relevante.
                                    </li>
                                    <li>
                                        Cotizaci??n de la criptodivisa y datos historicos sobre la misma.
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
                                        Capitalizaci??n compuesta y dominio del Bitcoin, Ethereum, entre otras.
                                    </li>
                                    <li>
                                        Criptomonedas en circulaci??n.
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
                                Es uno de los elementos m??s importantes utilizados en este mundo de las criptomonedas.
                                son el puente que nos permiten administrar nuestras criptomonedas. Una pieza de software
                                o de hardware con los que realizar las operaciones de recepci??n y env??o a trav??s de la red 
                                blockchain de cada criptomoneda. <br>
                                Los tipos de Wallet que hay son: <br>
                                <ul>
                                    <li>
                                        Web wallets o billeteras online: Una empresa se hace responsable de la seguridad de 
                                        nuestras criptodivisas. Son muy utilizadas.
                                    </li>
                                    <li>
                                        Mobile wallets o billeteras para tel??fonos: Comunmente son aplicaciones de las mimas 
                                        web wallets.
                                    </li>
                                    <li>
                                        Desktop wallets o billeteras de computadoras: En estos casos, tratamos con un software
                                        para una computadora que esta creado para operar como una wallet, algunas de estas utilizan
                                        una copia externa de la blockchain y de esta manera acceder a la blockchain.
                                    </li>
                                    <li>
                                        Hardware wallets o billeteras hardware: Estas billeteras son similares a los pendrives, su uso 
                                        es bastante com??n y seguro.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Metamask
                            </div>
                            <div class="card-body">
                                Es un monedero de criptomonedas que puede ser usado en los navegadores Chrome, Firefox y Brave. Tambi??n 
                                es una extensi??n del navegador, esto significa que funciona como un puente entre los navegadores normales 
                                y la blockchain Ethereum. <br>
                                ??Por qu?? usar Metamask? <br>
                                <ul>
                                    <li>
                                        C??digo abierto: Significa que el software de Metamask puede ser revisado y actualizado por la misma 
                                        comunidad.
                                    </li>
                                    <li>
                                        Configuraci??n DJ: Ayuda a los usuarios a respaldar sus cuentas.
                                    </li>
                                    <li>
                                        Compra integrada: Puedes comprar criptodivisas desde la misma App Web.
                                    </li>
                                    <li>
                                        Atenci??n al cliente.
                                    </li>
                                    <li>
                                        Interfaz sencilla.
                                    </li>
                                    <li>
                                        Almacenamiento local de claves: Las claves se almacenan en el navegador del usuario ??m??s control para ti!
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                ??Existen otras Wallets adem??s de Metamask?
                            </div>
                            <div class="card-body">
                                Si, y son tan o mejores que Metamask. A continuaci??n te pondremos una lista con nuestras recomendaciones para 
                                wallets.
                                <ul>
                                    <li>
                                        Coinbase: Es una de las opciones m??s seguras de almacenamiento digital para criptomonedas. A pesar 
                                        de tratarse de una app m??vil, Coinbase Wallet ofrece un nivel de seguridad muy similar al de las 
                                        hardware wallets. 
                                    </li>
                                    <li>
                                        Coinomi: Se trata de un software de c??digo abierto que almacena los criptoactivos encriptados de forma 
                                        local en tus dispositivos como celular o computador.
                                        Puedes usarla en tu Smartphone con iOs o Android, tambi??n en tu pc con Windows, macOs e incluso con Linux.
                                    </li>
                                    <li>
                                        Trust Wallet: Es una app que en un principio estaba destinada a la criptomoneda Litecoins, pero hoy en d??a 
                                        acepta muchas de las m??s populares. Lo interesante a su vez de esta wallet es que nos paga un inter??s que 
                                        ronda entre el 5 y el 7% por determinadas criptos, ya que las pone a trabajar por nosotros con el sistema 
                                        de staking.
                                    </li>
                                    <li>
                                        Bitcoin Core: Una de las precursoras de todo el mundo wallet. Una wallet bitcoin. Es de c??digo abierto, 
                                        por lo que todos los cambios y mejoras son propuestos por los desarrolladores que deseen aportar al sistema. 
                                        Adem??s se mantiene con una actividad muy alta de desarrollo. Bitcoin Core, ofrece niveles de seguridad, privacidad 
                                        y estabilidad bastante altos, pero est?? dise??ado principalmente para usuarios avanzados. Una particularidad de este 
                                        cliente es que al ejecutarlo en tu ordenador, te conviertes en un nodo de la red y terminas ejecutando un full client. 
                                        De esa forma, contribuyes a la descentralizaci??n e integridad de la red bitcoin. <br>
                                        <b>No la recomendamos para principiantes.</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="trading">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 card-data">
                        <div class="col-12 col-sm-12 text-center">
                            <a href="#">
                                <h3>
                                    Trading
                                </h3>
                            </a>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Trading
                            </div>
                            <div class="card-body">
                                El trading de criptomonedas significa tomar una posici??n financiera en direcci??n al precio de una criptomoneda 
                                frente al d??lar (en pares de criptomonedas/d??lares) o contra otra cripto, a trav??s de pares cripto a cripto. <br>
                                <b>??Es seguro?</b> <br>
                                El trading es una actividad muy rentable pero <b>debe ir acompa??ado de educaci??n</b>, porque se puede convertir en una 
                                bomba de tiempo si no se sabe manejar. Para aprender a invertir es necesario dedicarle tiempo a realizar un 
                                plan de trabajo como en todos los negocios. Para lograr ??xito en esta actividad debe dedicar tiempo a analizar los 
                                mercados, las posibilidades de inversi??n y el movimiento de sus inversiones. <br>
                                <b>??En qu?? tengo que tener cuidado?</b> <br>
                                <ul>
                                    <li>
                                        Informaci??n falsa: La web est?? llena de informaci??n sobre trading y no toda es verdad. Lo recomendado es que 
                                        evalu?? la experiencia de varias personas, realic?? estudios seguros con empresas dedicadas a las criptomonedas y trading, 
                                        lea y estudie detenidamente cuando quiera hacer una inversi??n, entre en grupos de Telegram donde la charla sobre
                                        criptodivisas e inversiones es constante (es una manera pr??ctica de estar informado sobre el mercado de las cripto).
                                    </li>
                                    <li>
                                        No saber su perfil de inversi??n: este es uno de los errores m??s comunes y es no saber cu??nto est?? dispuesto a perder, en qu?? 
                                        tiempo quiere sacar sus retornos o si este es un capital de riesgo.
                                    </li>
                                    <li>
                                        Invertir sin pr??ctica: Adem??s de poseer una fuerte informaci??n sobre la teoria del Trading, es importante llevar la practica
                                        de manera personal. ??C??mo practicar sin perder dinero? Pues bien, luego de aprender algunos aspectos sobre el trading, le
                                        permitiremos acceder a plataformas online donde podr?? practicar el trading sin costo alguno. 
                                    </li>
                                    <li>
                                        Estafas: Desafortunadamente muchos se aprovechan de la falta de conocimiento de los inversionistas para quitarles el dinero.
                                        En este mundo de la inversi??n en criptodivisas, es com??n toparse con criptomonedas copias o p??ginas que prometen algo que no cumpliran.
                                    </li>
                                    <li>
                                        Trading casino: Esta es una de las dificultades m??s comunes y dif??ciles de identificar. El trading conlleva a un manejo emocional 
                                        muy desarrollado; esta es una actividad altamente emocionante y puede pasar que el inversionista empiece a ganar muy f??cil y piense 
                                        que siempre va a ser as?? y se convierta en una apuesta y pierda todo. 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                ??Qu?? determina el precio de una criptomoneda?
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Blockchain, adem??s de ser la base para la creaci??n de criptomonedas, la tecnolog??a blockchain tiene grandes implicaciones en la econom??a global, 
                                        incluyendo su posible aplicaci??n en contratos inteligentes y en el campo del Internet de las Cosas. Como las criptomonedas solo 
                                        fueron creadas en la ??ltima d??cada y no se consideran moneda de curso legal, no est??n sujetas a las mismas fuerzas que los mercados 
                                        tradicionales. Esto significa que operar criptomonedas no es lo mismo que el trading en los mercados financieros tradicionales.
                                    </li>
                                    <li>
                                        Debido a la naturaleza descentralizada de las criptomonedas, los movimientos de sus precios se ven menos afectados por factores como la publicaci??n 
                                        de datos econ??micos, la incertidumbre pol??tica y los cambios en las tasas de inter??s. Adem??s, debido a que son un nuevo tipo de instrumento financiero, 
                                        las criptomonedas tienen relativamente pocos activos correlacionados que podr??an afectar los movimientos de sus precios.
                                    </li>
                                </ul>
                                Los precios de las criptomonedas pueden verse afectados por varios factores, como los cambios en las tecnolog??as blockchain y los intentos regulatorios 
                                para controlar su aceptabilidad y "transabilidad" en los mercados financieros. Noticias como desacuerdos sobre c??mo se debe actualizar o procesar una 
                                criptomoneda en particular tambi??n pueden afectar su precio. Es probable que cualquier falla de seguridad expuesta por hackers tambi??n afecte negativamente 
                                el precio de una criptomoneda. Por supuesto, las pol??ticas y regulaciones gubernamentales que buscan prohibir o limitar la venta de criptomonedas tambi??n 
                                pueden afectar su precio.
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Herramientas de Fibonacci 
                            </div>
                            <div class="card-body">
                                <table class="table table-dark">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Retrocesos de Fibonacci</th>
                                            <td colspan="2" class="table-active">
                                                Un retroceso de Fibonacci es un t??rmino utilizado en el an??lisis t??cnico que se refiere a ??reas de soporte o resistencia. Los niveles de retroceso 
                                                de Fibonacci utilizan l??neas horizontales para indicar d??nde est??n los niveles de resistencia y resistencia posibles. Cada nivel est?? asociado con 
                                                un porcentaje. El porcentaje es cu??nto de un movimiento anterior ha retrocedido el precio. Los principales niveles de retroceso de Fibonacci son 
                                                <b>23.6%, 38.2%, 61.8% y 78.6%</b>. Si bien no es oficialmente una proporci??n de Fibonacci, tambi??n se usa el 50%.
                                            </td>
                                        </tr>
                                        <tr> 
                                            <th scope="row">Extensiones de Fibonacci</th>
                                            <td colspan="2" class="table-active">
                                                Las extensiones de Fibonacci son una herramienta que los operadores pueden usar para establecer objetivos de ganancias o estimar qu?? tan lejos puede 
                                                viajar el precio despu??s de que finalice un movimiento de retroceso. Los niveles de las extensiones de Fibonacci tambi??n son ??reas posibles donde el 
                                                precio puede revertir su direcci??n. <br> 
                                                Son una forma de establecer objetivos de precios o encontrar ??reas proyectadas de soporte o resistencia cuando el precio se est?? moviendo hacia un 
                                                ??rea donde otros m??todos para encontrar soportes o resistencias no son aplicables o evidentes. Si el precio se mueve a trav??s de un nivel de 
                                                extensi??n, puede continuar movi??ndose hacia el siguiente. Dicho esto, <b>las extensiones de Fibonacci son ??reas de posible inter??s</b>.  
                                                Es posible que el precio no se detenga o retroceda en el nivel, pero el ??rea que la rodea puede ser importante.
                                            </td>  
                                        </tr>
                                        <tr> 
                                            <th scope="row">Arcos de Fibonacci</th>
                                            <td colspan="2" class="table-active">
                                                Los arcos de Fibonacci son semic??rculos que se extienden desde una l??nea de tendencia calculados con base en los n??meros de Fibonacci. El primer y tercer 
                                                arco se basan en las relaciones de Fibonacci 0.382 (38.2%) y 0.618 (61.8%) respectivamente. El arco medio es establecido en el nivel <b>0.50</b> o de <b>50%</b>.
                                                Los arcos de Fibonacci se usan para identificar niveles de resistencia y soporte o puntos de inflexi??n de la tendencia.
                                            </td>
                                        </tr>
                                        <tr> 
                                            <th scope="row">Abanico de Fibonacci</th>
                                            <td colspan="2" class="table-active">
                                                Las l??neas del abanico de Fibonacci son l??neas de tendencia basadas en las relaciones de Fibonacci. Estas l??neas se pueden usar para estimar niveles de 
                                                soporte/resistencia para movimientos alcistas o bajistas o las posibles zonas de reversi??n del mercado. Tal como ocurre con los retrocesos de Fibonacci, 
                                                estos puntos de inversi??n suponen que el movimiento es de naturaleza correctiva. Las l??neas del abanico de Fibonacci permiten a los operadores anticipar 
                                                los puntos finales de estos movimientos en contra de la tendencia.
                                            </td>
                                        </tr>
                                        <tr> 
                                            <th scope="row">Zonas de tiempo de Fibonacci</th>
                                            <td colspan="2" class="table-active">
                                                Las Zonas de Tiempo de Fibonacci son l??neas verticales calculadas con la secuencia de Fibonacci. Estas l??neas se extienden a lo largo del eje X y se usan como una 
                                                forma para pronosticar las posibles reversiones del precio con base en el tiempo. Las zonas de tiempo de Fibonacci son m??s bien ??reas de inversi??n potenciales del 
                                                mercado en el tiempo que los operadores deben vigilar conforme los precios se aproximan a esta zona.
                                            </td>  
                                        </tr>
                                    </tbody> 
                                </table> 
                            </div> 
                        </div>
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                Niveles de Fibonacci en gr??ficos
                            </div>
                            <div class="card-body">
                                Al colocar los niveles de Fibonacci en un gr??fico de precios, tal como los retrocesos de Fibonacci en el siguiente ejemplo, nos permiten dividir los movimientos de las cotizaciones en 
                                rangos o niveles que son proporcionales a los radios mencionados con anterioridad. Como ya se explic??, cada uno de estos niveles se convierte en una resistencia o un soporte que 
                                pueden ser usados para determinar precios objetivo para abrir o cerrar una posici??n en el mercado. Para entender mejor este concepto, podemos observar en el siguiente gr??fico para 
                                el par EUR/USD una tendencia alcista con una serie de retrocesos de Fibonacci en los cuales hay alta probabilidad de que finalicen movimientos de retroceso bajista del precio 
                                (aqu?? los retrocesos act??an como soportes) y en donde tambi??n existe la posibilidad de que el precio reanude su movimiento alcista general: <br>
                                <div class="col-12 col-sm-12 text-center mb-3 mt-3">
                                    <img src="../css/images/Retrocesos-de-Fibonacci.png" alt="Imagen del retroceso de Fibonacci">
                                </div>
                                <div class="alert alert-danger">
                                    ATENCION: Los gr??ficos con imagenes solo ser??n presentados en explicaciones o ejemplos. En ejercicios importantes utilizaremos gr??ficos propios y m??s claros.
                                </div> <br>
                                ??Donde puedo fijar los niveles de Fibonacci? <br>
                                Para usar los retrocesos de Fibonacci en un gr??fico de cotizaciones debemos saber donde colocar los anclajes o puntos a partir de los cuales ser??n calculados los niveles respectivos. 
                                En primer lugar esto depende de si estamos ante una tendencia alcista o bajista. En caso de que el mercado est?? en una tendencia alcista se coloca el punto de anclaje 0% (Nivel 0%) 
                                en el m??ximo alcanzado y el punto 100% (Nivel 100%) en el m??nimo alcanzado. <br> 
                                Si se toma como ejemplo el gr??fico anterior se puede observar como el precio rebot?? en varias ocasiones en los niveles 23.6% y 38.2%, los cuales son niveles conocidos y determinados 
                                de antemano y que pueden emplearse como gu??as para abrir o cerrar posiciones. Si bien puede pensarse que lo ocurrido en este ejemplo es solo casualidad, la realidad es que este tipo 
                                de relaciones ocurre con frecuencia en todos los gr??ficos sin importar el marco de tiempo que se emplee, sea de 5 minutos, 1 hora o 1 semana.En ese mismo gr??fico se muestra un ejemplo 
                                de lo que pudo haber sido un trade empleando los niveles de Fibonacci. En este caso se muestra una buena relaci??n Ganancia/P??rdida, ya que la distancia entre el precio de entrada y 
                                el Stop Loss (nivel de Fibonacci inferior) es bastante menor a la distancia de la entrada al precio objetivo de toma de ganancias. De esta manera los retrocesos de Fibonacci 
                                constituyen una buena herramienta para fijar Stop Loss, Take Profit y para operar con un buen radio de Ganancia/P??rdida. <br>
                                <b>Ejemplos del uso de Fibonacci en gr??ficos:</b>
                                <div class="col-12 col-sm-12 text-center mb-3 mt-3">
                                    <img class="little-img" src="../css/images/GraficoUno.png" alt="Gr??fico de ejemplo">
                                </div>
                                En el gr??fico anterior es posible observar como se colocaron los niveles de Fibonacci en los extremos de una tendencia que dur?? aproximadamente un mes durante el cual las cotizaciones 
                                cayeron de casi 1.2800 a 1.1925. Seguidamente, el precio durante el siguiente a??o (9 meses aproximadamente) fluctu?? y se consolid?? en los niveles 23.6%, 38.2% y 61.8% para finalmente 
                                caer y terminar atravesando el nivel 0.0% continuando con la tendencia general del mercado.En el siguiente gr??fico se procede a mover los puntos de anclaje a partir de los cuales se 
                                colocan los niveles de Fibonacci despu??s de que el precio alcanza nuevos valores m??nimos. Se puede observar como las consolidaciones de los niveles anteriores en la mayor??a de los 
                                casos, continuan coincidiendo con los nuevos niveles. En este caso pudo haberse dejado el nivel de Fibonacci m??s alto anclado en el m??ximo donde estaba con anterioridad, no obstante 
                                esto queda a criterio del operador el cual podr??a considerar en su lugar colocarlo en alguno de los puntos m??ximos m??s recientes por lo cual en este ejemplo fue corrido. <br> 
                                En el gr??fico siguiente, movemos los anclajes de la herramienta Fibonacci cuando al precio alcanza nuevos extremos m??nimos, y observamos como las consolidaciones en los antiguos niveles 
                                siguen, en su mayor??a, coincidiendo con los nuevos niveles. Tambi??n podr??a haber dejado el m??ximo anclado donde estaba anteriormente, pero lo m??s probable es que la mayor??a de operadores 
                                estuvieran ya considerando los m??ximos m??s recientes. Las flechas rojas en los gr??ficos sirven para indicar el desplazamiento del anclaje de la herramienta de Fibonacci.
                                <div class="col-12 col-sm-12 text-center mb-3 mt-3">
                                    <img class="little-img" src="../css/images/GraficoDos.png" alt="Gr??fico de ejemplo">
                                </div>
                                Otra observaci??n que se puede hacer con el gr??fico anterior es que en este caso el anclaje de m??ximos de mantiene al mismo nivel de precios que el anterior ya que ambos coinciden. 
                                Lo que ha variado es el anclaje m??nimo, el cual se ha colocado en el nuevo extremo m??nimo que ha sido alcanzado por las cotizaciones del activo. Otra vez se desarrollan breves 
                                consolidaciones en los niveles 38.2% y 23.6% lo que indica que el comportamiento del precio tiene en consideraci??n estos nuevos niveles. Conforme pasa el tiempo y el mercado sigue 
                                su curso los niveles de Fibonacci deben reacomodarse nuevamente a los valores extremos m??s recientes. Con esto al mismo tiempo estamos dividiendo el gr??fico en tramos m??s cortos 
                                los cuales el operador puede utilizar como puntos de entrada como se ve a continuaci??n:
                                <div class="col-12 col-sm-12 text-center mb-3 mt-3">
                                    <img class="little-img" src="../css/images/GraficoTres.png" alt="Gr??fico de ejemplo"> 
                                </div>
                                En el siguiente gr??fico se ha movido nuevamente el anclaje inferior de los niveles de Fibonacci hasta un nuevo m??nimo. Se puede observar como las consolidaciones anteriores 
                                nuevamente vuelven a coincidir con los nuevos niveles, los cuales logicamente est??n corridos. Por ejemplo el nivel que anteriormente era de 23.6%, ahora es de 38.2% y lo mismo 
                                ocurre con los dem??s. En este punto hay que considerar que esto no es para nada una coincidencia, sino la manera en que funciona esta herramienta de an??lisis de tal forma que 
                                las cotizaciones del mercado tienden a respetar estos niveles en m??ltiples ocasiones. Generalmente los niveles donde se producen las consolidaciones m??s fuertes suelen mostrarse 
                                muy claros cuando se efect??a un an??lisis mediante los retrocesos de Fibonacci. <br>
                                Aspectos para remarcar: <br>
                                <ul>
                                    <li>
                                        Es importante que los retrocesos o niveles de Fibonacci sean calculados unicamente despu??s de que ha sido confirmado el fin de una tendencia, es decir cuando ha alcanzado un 
                                        m??ximo o m??nimo. Nunca debe usarse esta herramienta durante una tendencia en desarrollo.
                                    </li>
                                    <li>
                                        Si se toma en cuenta que toda tendencia forma parte de una tendencia m??s grande y de mayor plazo y a su vez est?? formada por tendencias menores, surge la duda de sobre cual de 
                                        estas tendencias se deben calcular los retrocesos de Fibonacci. En realidad no existe una respuesta sencilla para esta pregunta. Solamente se puede decir que se deben usar los 
                                        niveles de Fibonacci en aquellas tendencias que den se??ales claras de finalizaci??n. 
                                    </li>
                                    <li>
                                        En general las tendencias d??biles experimentan un retroceso en el nivel 31.8% mientras que las tendencias fuertes suelen presentar retrocesos en el nivel 61.8% antes de retomar la 
                                        direcci??n original.
                                    </li>
                                    <li>
                                        El empleo de los niveles de Fibonacci no deja de tener sus detractores, sobre todo aquellos que basan sus cr??ticas en los fundamentos de la Teor??a del Paseo Aleatorio. Estos cr??ticos 
                                        argumentan que no existe ninguna justificaci??n para afirmar que los movimientos de las cotizaciones tengan motivo o raz??n alguna para respectar los niveles dee Fibonacci donde se supone 
                                        que hay retrocesos.
                                    </li>
                                    <li>
                                        Algunos autores hablan m??s bien de zonas cr??ticas ubicadas entre los niveles 33% a 38.2% y 61.8% a 67% en lugar de los niveles propiamente dichos.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 text-center mt-5">
                            <a href="#">
                                <h3>
                                    Principales diez cripromonedas en el mercado y monedas que estan en pre-venta
                                </h3>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center mt-5">
                                <iframe src="https://es.widgets.investing.com/top-cryptocurrencies?theme=darkTheme&hideTitle=true" width="100%" height="415" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
                            </div>
                            <div class="col-12 col-sm-6 text-center mt-5">
                                <iframe src="https://es.widgets.investing.com/ico-calendar?theme=darkTheme&hideTitle=true" width="100%" height="415" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="extra_options">
            <div class="col-8 col-sm-8 fixed-bottom p-1">
                <button class="btn btn-outline-light" id="btn-abrir-popup">Chat</button>
                <a href="#trading"><button class="btn btn-outline-light">Trading</button></a>
            </div>
            <div class="overlay" id="overlay">
                <div class="popup">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 text-end">
                                <a class="text-warning" id="cerrar-popup"><i class="fas fa-times"></i></a>
                                <div class="card card-person">
                                    <div class="card-body">
                                        <p class="p-card-person">
                                            Por favor introduce tu correo electronico o tu n??mero de tel??fono junto con tu nombre 
                                            de usuario para realizar tus consultas. Nos comunicaremos con usted en la brevedad.
                                        </p>
                                    </div>
                                </div>
                                <form action="mensaje_es.php" method="POST">
                                    <div class="input-group">
                                        <input class="form-control" aria-label="With textarea" placeholder="Mensaje" value="<?php echo "??Hola! soy " . $_SESSION['usuario'] . " y..."; ?>" name="mensaje" id="mensaje" required></input>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info input-group-text"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="col-12 col-sm-12 text-end p-1">
        <a href="close_session.php">
            <button class="btn btn-outline-danger">Cerrar sesi??n</button>
        </a>
    </div>

    <script src="../js/scroll.js"></script>
    <script src="../js/popup.js"></script>

</body>
</html>