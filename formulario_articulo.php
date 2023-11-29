<?php
include_once('conexion_adso.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container" >
        <form action="insertar_articulo.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">estado</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            </div>
            <select class="form-select" aria-label="Default select example">
                <?php
                if (isset($_POST['buscar'])) { //preguntar si exite algo
                    $buscar = ($_POST['buscar']); //felipe

                    $consulta = $conexion->query("SELECT * FROM categoria");
                } else {
                    $consulta = $conexion->query("SELECT * FROM categoria");
                }

                while ($row = $consulta->fetch_array()) {

                    //   $cod=$row['email'];
                ?>
                    <!-- <form action="editar.php" method="POST"> -->
                    <option selected><?php echo $row['nombre']; ?></option>
                
                <?php } ?>

            </select>
        </form>
                </div>
    </div>
</body>
</html>