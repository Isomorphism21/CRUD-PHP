<?php

require_once("../Config/cliente.php");

if(isset($_POST["enviar"])){
    $insertar = new clientes();
    $insertar -> setNombre($_POST["nombre"]);
    $insertar -> setTelefono($_POST["numero"]);
    $insertar -> setNIT($_POST["NIT"]);
    echo"<script>alert('los datos se han guardado satisfactoriamente');document.location='../Pagina/clientes.php'</script>";
    $insertar -> insertData(); 
}


?>