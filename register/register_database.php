<?php 

include 'config.php';

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$clave = hash('sha512', $clave);

$query = "INSERT INTO usuarios (
    correo,
    nombre,
    clave
    ) VALUES (
        '$correo',
        '$nombre',
        '$clave'
    );"
;

$verificar_correo = mysqli_query($conexion, "SELECT *
    FROM usuarios
    WHERE correo = '$correo'")
;

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("Error with user");
        window.location = "register";
    </script>
    ';

    exit();

}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Registrado exitosamente");
        window.location = "../course/login";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Lamentamos no poder registrar el usuario, revise bien los datos");
        window.location = "register"
    </script>
    ';
}

mysqli_close($conexion);

?>