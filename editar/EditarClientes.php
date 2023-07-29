<?php

require_once("../Config/cliente.php");

$select = new clientes();

$select -> setId_cliente($_GET["id"]);

$all = $select -> selectOne();

$val = $all[0];

if(isset($_POST["enviar"])){
    $select -> setNombre($_POST["nombre"]);
    $select -> setTelefono($_POST["telefono"]);
    $select -> setNIT($_POST["NIT"]);
    echo"<script>alert('los datos se han actualizado satisfactoriamente');document.location='../Pagina/clientes.php'</script>";
    $select -> update();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Editar Categoria</title>
</head>
<body>
<header>
    <h1>Editar Categorias</h1>
</header>
<main>
    <form action="" method="POST">
        <div>
            <label for="nombre">NOMBRE</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $val['nombre']?>">
        </div>
        <div>
            <label for="telefono">TELEFONO</label>
            <input type="number" name="telefono" id="telefono" value="<?php echo $val['telefono']?>">
        </div>
        <div>
            <label for="NIT">NIT</label>
            <input type="number" name="NIT" id="NIT" value="<?php echo $val['NIT']?>">
        </div>
        <input type="submit" id="enviar" name="enviar" value="ENVIAR" class="btn btn-primary">
    </form>
        
</main>


</body>
</html>