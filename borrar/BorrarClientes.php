<?php

require_once("../Config/cliente.php");

if(isset($_GET["id"]) && isset($_GET["req"])){
    if (isset($_GET["req"]) == "delete"){
        $delete = new clientes();
        $delete -> setId_cliente($_GET["id"]);
        echo"<script>alert('los datos se han borrado satisfactoriamente');document.location='../Pagina/clientes.php'</script>";
        $delete -> delete();
    }
}

?>