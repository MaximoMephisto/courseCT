<?php 

session_start();

include 'conn.php';

$nombre = $_POST['txtNombre'];
$correo = $_POST['txtCorreo'];
$clave = $_POST['txtClave'];

$validacion = mysqli_query($conexion, 
    "SELECT 
        nombre,
        correo, 
        clave 
    FROM usuarios 
    WHERE nombre = '$nombre',
    correo= '$correo',
    AND clave = '$clave'"
);

if(mysqli_num_rows($validacion) > 0 ) {
    $_SESSION['usuario'] = $correo;
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