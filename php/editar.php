<?php

include 'conexion.php';
$id = $_GET['actualizarid'];
$sql = "select * from `libros` where id=$id";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$titulo=$row['titulo'];
$autor=$row['autor'];
$descripcion=$row['descripcion'];


if(isset($_POST['submit'])){
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $descripcion=$_POST['descripcion'];

    $sql = "update `libros` set id=$id, titulo='$titulo', autor='$autor', descripcion='$descripcion'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "Datos agregados correctamente";
        header('location:../index.php');
    }else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <h1></h1>
    <div class="container">
        <h1 class="text-center">Editar Libro</h1>
        <form method="post">
            <div class="mb-3 my-5">
                <label>Titulo Del Libro</label>
                <input type="text" class="form-control" name="titulo" value=<?php echo $titulo; ?> autocomplete="off" placeholder="Ingresa el titulo del libro" id="exampleInputEmail1" aria-describedby="emailHelp">
            
            </div>
            <div class="mb-3">
                <label>Autor Del Libro</label>
                <input type="text" class="form-control" name="autor" value=<?php echo $autor; ?> autocomplete="off" placeholder="Ingresa el autor del libro" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label>Descripción Del Libro</label>
                <input type="text" class="form-control" name="descripcion" value=<?php echo $descripcion; ?> autocomplete="off" placeholder="Ingresa la descripcion del libro" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <button type="submit" name="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>




    <script src="./js/bootstrap.js"></script>
</body>

</html>