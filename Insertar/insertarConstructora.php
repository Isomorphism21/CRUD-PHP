<?php

require_once("../Config/constructora.php");

if(isset($_POST["enviar"])){
    $insertar = new constructora();
    $insertar -> setNombre($_POST["nombre"]);
    $insertar -> setTelefono($_POST["numero"]);
    $insertar -> setDireccion($_POST["direccion"]);
    echo"<script>alert('los datos se han guardado satisfactoriamente');document.location='../Pagina/constructora.php'</script>";
    $insertar -> insertData(); 
}


?>