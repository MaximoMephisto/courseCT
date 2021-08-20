<?php 

session_start();

include '../register/config.php';

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$clave = hash('sha512', $clave);

$validar_login = mysqli_query($conexion, "SELECT *
    FROM usuarios
    WHERE nombre='$nombre' AND clave='$clave'"
);

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $nombre;
    header("location: lenguaje");

    exit();


} else {
    echo '
    <script>
        alert("Incorrect data");
        window.location = "login";
    </script>
    ';
       
    exit();

}

?>