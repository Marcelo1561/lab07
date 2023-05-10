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
            <form action="agregar_autor.php" method="post">

                <div class="row g-5 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="nombre" class="col-form-label">Nombres</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="nombres" id="nombres" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                </div>
                <div class="row g-4 mb-3 align-items-center">
                    <div class="col-auto">
                        <label for="Ape_paterno" class="col-form-label">Ape_paterno</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="ape_paterno" id="Ape_paterno" class="form-control" required>
                    </div>
                </div>
                <div class="row g-4 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="Ape_materno" class="col-form-label">Ape_materno</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="ape_materno" id="Ape_materno" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                <input class="btn btn-primary d-grid gap-2 col-4 mx-auto" name="Agregar" type="submit" value="Agregar">

                <input type="reset" class="btn d-grid gap-2 col-4 mx-auto btn-danger mt-3 " value="Limpiar">
            </form>
        </div>
    </div><!--End Div Card-->

    <!--Start Our Table-->
    <div class="container bg-light">
        <h1 class="text-center">Listas de autores</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>   
                    <th scope="col">Nombres</th>
                    <th scope="col">Ape_paternos</th>
                    <th scope="col">Ape_maternos</th>
                    <th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "ConexionBD.php";

                $conex = Conectar();
                $sql2 = "SELECT * FROM autor";
                $query2 = mysqli_query($conex, $sql2);


                while ($fila = mysqli_fetch_array($query2)) {
                ?>
                    <tr>
                        <td><?php echo $fila['nombres'] ?></td>
                        <td><?php echo $fila['ape_paterno'] ?></td>
                        <td><?php echo $fila['ape_materno'] ?></td>
                        <td>
                            <a class="btn btn-primary">Editar</a>
                            <a href="Eliminar_autor.php?id=<?php echo $fila['autor_id']?>" class="btn btn-danger">Eliminar</a>
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