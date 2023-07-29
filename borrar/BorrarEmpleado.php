<?php

require_once("../Config/empleado.php");

if(isset($_GET["id"]) && isset($_GET["req"])){
    if (isset($_GET["req"]) == "delete"){
        $delete = new empleado();
        $delete -> setId_empleado($_GET["id"]);
        echo"<script>alert('los datos se han borrado satisfactoriamente');document.location='../Pagina/empleado.php'</script>";
        $delete -> delete();
    }
}

?>