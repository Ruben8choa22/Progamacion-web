<?php
$conexion = new mysqli("localhost", "root", "","catalagogames");
if($conexion){
    echo "Conexion establecida";
}
else{
    echo "Conexion no establecida";
}
?>