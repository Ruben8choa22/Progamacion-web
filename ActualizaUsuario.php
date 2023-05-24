<?php
include("Conexion.php");
$nombre = $_POST["Nombre"];
$nuevo_nombre = $_POST['nuevo_nombre']; // Nuevo valor para el nombre
$existe = 0;

if ( $nombre == "") {
    echo "El nombre actual es un campo obligatorio.";
} else if ($nuevo_nombre == "") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $resultados = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre='$nombre'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El nombre solicitado no existe.";
    } else {
        $_UPDATE_SQL = "UPDATE usuarios SET Nombre='$nuevo_nombre' WHERE Nombre= '$nombre'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "El registro con el nombre $nombre_actual ha sido actualizado con el nuevo nombre $nuevo_nombre.";
    }
}
header("location: Actualiza_EliminaUsuarios.php");
?>