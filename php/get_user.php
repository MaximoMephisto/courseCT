<?php 

include '../conn.php';

$getData = "SELECT nombre, correo FROM usuarios";
$usuarios = $conexion->query($getData);

if ($usuarios->num_rows > 0) {
    while ($row = $usuarios->fetch_assoc()) {
        echo 
            '<tr>
                <td>' . $row['nombre'] . '</td>
                <td>' . $row['correo'] . '</td>
            </tr>'
        ;
    }
}

?>
