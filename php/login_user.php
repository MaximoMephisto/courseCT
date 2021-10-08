<?php 

session_start();

include '../conn.php';

$correo = $_POST['txtCorreo'];
$clave = $_POST['txtClave'];
$clave = hash('sha512', $clave);

$validacion = mysqli_query($conexion, 
    "SELECT 
        correo, 
        clave 
    FROM usuarios 
    WHERE correo= '$correo'
    AND clave = '$clave'"
);

if(mysqli_num_rows($validacion) > 0 ) {
    $_SESSION['usuario'] = $correo;
    header("location: ../course/lenguaje");

    exit();
} else {
    echo '
        <script>
            alert("Incorrect data");
            window.location = "login_user";
        </script>
    ';

    exit();
}

?>