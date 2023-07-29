<?php

require_once("../Config/constructora.php");

if(isset($_GET["id"]) && isset($_GET["req"])){
    if (isset($_GET["req"]) == "delete"){
        $delete = new constructora();
        $delete -> setId_constructora($_GET["id"]);
        echo"<script>alert('los datos se han borrado satisfactoriamente');document.location='../Pagina/constructora.php'</script>";
        $delete -> delete();
    }
}

?>