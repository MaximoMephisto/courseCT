<?php 

include '../conn.php';

$nombre = $_POST['txtNombre'];
$correo = $_POST['txtCorreo'];
$clave = $_POST['txtClave'];
$clave = hash('sha512', $clave);

$query = 
    "INSERT INTO usuarios (
        nombre,
        correo,
        clave
    ) VALUES (
        '$nombre',
        '$correo',
        '$clave'
    );"
;

$verificacion = mysqli_query($conexion,
    "SELECT 
        nombre,
        correo,
        clave
    FROM usuarios
    WHERE correo = '$correo'"
);

if (mysqli_num_rows($verificacion) > 0 ) {
    echo '
    <script>
        alert("Error with user");
        window.location = "../admin/registerUsers";
    </script>
    ';

    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Registrado exitosamente");
        window.location = "../admin/dashboard";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Lamentamos no poder registrar el usuario, revise bien los datos");
        window.location = "../admin/registerUsers"
    </script>
    ';
}

mysqli_close($conexion);

?>