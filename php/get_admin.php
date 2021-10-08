<?php  

include '../conn.php';

$getData = "SELECT correo FROM administradores";
$admin = $conexion->query($getData);

if ($admin->num_rows > 0) {
    while ($row = $admin->fetch_assoc()) {
        echo 
        '<tr>
            <td>' . $row['correo'] . '</td>
        </tr>'
    ;
    }
}

?>