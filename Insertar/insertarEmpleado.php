<?php

require_once("../Config/empleado.php");

if(isset($_POST["enviar"])){
    $insertar = new empleado();
    $insertar -> setNombre($_POST["nombre"]);
    $insertar -> setTelefono($_POST["numero"]);
    $insertar -> setCargo($_POST["cargo"]);
    echo"<script>alert('los datos se han guardado satisfactoriamente');document.location='../Pagina/empleado.php'</script>";
    $insertar -> insertData(); 
}


?>