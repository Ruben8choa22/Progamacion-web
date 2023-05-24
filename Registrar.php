<?php
include("Conexion.php");
$Id_Usuario["Id_Usuario"];
$N_Plataforma["N_Plataforma"];
$N_Categoria["N_Categoria"];
$Nombre= $_POST["Nombre"];
$CorreoElectronico=$_POST["CorreoElectronico"];
$Fecha= $_POST["Fecha"];
$Contraseña= $_POST["Contraseña"];

echo "Nombre".$Nombre;
echo "Correo".$CorreoElectronico;
echo "Fecha".$Fecha;
echo "Contraseña".$Contraseña;

$query = "INSERT INTO usuarios VALUES('".$Nombre."','".$CorreoElectronico."','".$Fecha."','".$Contraseña."')";

?>