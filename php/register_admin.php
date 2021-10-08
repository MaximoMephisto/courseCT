<?php 

include '../conn.php';

$correo = $_POST['txtCorreo'];
$clave = $_POST['txtClave'];
$clave = hash('sha512', $clave);

$query = 
    "INSERT INTO administradores (
        correo,
        clave
    ) VALUES (
        '$correo',
        '$clave'
    );"
;

$verificacion = mysqli_query($conexion,
    "SELECT 
        correo,
        clave
    FROM usuarios
    WHERE correo = '$correo'"
);

if (mysqli_num_rows($verificacion) > 0 ) {
    echo '
    <script>
        alert("Error with user");
        window.location = "register_admin";
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
        window.location = "register_admin" 
    </script>
    ';
}

mysqli_close($conexion);

?>