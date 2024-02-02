<?php
include './php/conexion.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>CRUD Operations</title>
</head>

<body>


    <div class="container">
    <h1 class="text-center my-3">Gestión De Libros Biblioteca</h1>
        
        <button class="btn btn-primary my-5 text-white"><a class="text-white" href="./php/libro.php">Agregar Libro</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = 'select * from `libros`';
            $result = mysqli_query($con, $sql);
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $titulo=$row['titulo'];
                $autor=$row['autor'];
                $descripcion=$row['descripcion'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$titulo.'</td>
                <td>'.$autor.'</td>
                <td>'.$descripcion.'</td>
                <td> <button class="btn btn-primary"><a class="text-white" href="./php/editar.php?actualizarid='.$id.'">Editar</a></button> </td>
                <td> <button class="btn btn-danger"><a class="text-white" href="./php/eliminar.php?deleteid='.$id.'">Eliminar</a></button> </td>
        
            </tr>';

            }


            ?>
                
            </tbody>
        </table>
    </div>

    <script src="./js/bootstrap.js"></script>
</body>

</html>