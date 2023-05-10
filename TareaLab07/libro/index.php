<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/estilos.css">
</head>

<body>
    <div class="card">
        <div class="card-header bg-dark text-white text-center">
            AGREGAR AUTOR
        </div>
        <div class="card-body">
            <form action="agregar_libro.php" method="post">

                <div class="row g-1 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="año" class="col-form-label">Año</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="año" id="nombres" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                </div>
                <div class="row g-1 mb-3 align-items-center">
                    <div class="col-auto">
                        <label for="autor" class="col-form-label">Autor</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="autor" id="Ape_paterno" class="form-control" required>
                    </div>
                </div>
                <div class="row g-1 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="titulo" class="col-form-label">Titulo</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="titulo" id="Ape_materno" class="form-control" aria-labelledby="passwordHelpInline" required>
                </div>
                <div class="row g-1 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="urlubi" class="col-form-label">URLubi</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="urlubi" id="nombres" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                </div>
                <div class="row g-1 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="especialidad" class="col-form-label">Especialidad</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="especialidad" id="nombres" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                </div>
                <div class="row g-1 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="editorial" class="col-form-label">Editorial</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="editorial" id="nombres" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                </div>
                <input class="btn btn-primary d-grid gap-2 col-4 mx-auto" name="Agregar" type="submit" value="Agregar">

                <input type="reset" class="btn d-grid gap-2 col-4 mx-auto btn-danger mt-6 " value="Limpiar">
            </form>
        </div>
    </div><!--End Div Card-->

    <!--Start Our Table-->
    <div class="container bg-light">
        <h1 class="text-center">Listas de libros</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>   
                    <th scope="col">Año</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">URLubi</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Editorial</th>
                    
                    <th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "ConexionBD.php";

                $conex = Conectar();
                $sql2 = "SELECT * FROM libro";
                $query2 = mysqli_query($conex, $sql2);


                while ($fila = mysqli_fetch_array($query2)) {
                ?>
                    <tr>
                        <td><?php echo $fila['año'] ?></td>
                        <td><?php echo $fila['autor'] ?></td>
                        <td><?php echo $fila['titulo'] ?></td>
                        <td><?php echo $fila['URLubi'] ?></td>
                        <td><?php echo $fila['especialidad'] ?></td>
                        <td><?php echo $fila['editorial'] ?></td>
                        <td>
                            <a class="btn btn-primary" href="https://biblioteca.org.ar/libros/158038.pdf">ver</a>
                            <a href="Eliminar_libro.php?id=<?php echo $fila['libro_id']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                Desconectar($conex);
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>