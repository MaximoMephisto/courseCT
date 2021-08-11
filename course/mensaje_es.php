<?php 

include '../register/config.php';

$mensaje = $_POST['mensaje'];

$query = "INSERT INTO mensajes (
    mensaje
    ) VALUES ( 
    '$mensaje'
    );"
;

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '    
        <script>
            alert("Enviado correctamente");
            window.location = "../course/course_es"
        </script>'
    ;
} else {
    echo '
        <script>
            alert("Error");
            window.location = "../course/course_es"
        </script>
    ';
}

mysqli_close($conexion);

?>