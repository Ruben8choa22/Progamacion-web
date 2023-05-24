<?php
include("Conexion.php");
$result = mysqli_query($conexion, "SELECT * FROM usuarios");

echo
"
<table width=\"100%\"border=\"1\">
<th><center>CONSULTAS</center></th>
<tr>
<td><b><center>NOMBRE</center></b></td>
<td><b><center>CORREO ELECTRONICO</center><b/></td>
<td><b><center>FECHA</center><b/></td>
<td><b><center>CONTRASEÑA</center><b/></td>
</tr>
";
while($consulta = mysqli_fetch_array($result)){
    echo
    "
    <tr>
    <td> ".$consulta["Id_Usuario"]."
    <td> ".$consulta["N_Plataforma"]."
    <td> ".$consulta["N_Categoria"]."
    <td> ".$consulta["Nombre"]."</td>
    <td> ".$consulta["CorreoElectronico"]."</td>
    <td> ".$consulta["Fecha"]."</td>
    <td> ".$consulta["Contraseña"]."</td>
    </tr>
    ";
}
echo "</table>";
?>