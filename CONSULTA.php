<?php
// session_start();
include_once("conexion_adso.php");



// if(isset($_POST['ini']) and isset($_POST['fin'])){
//     $inicio=($_POST['ini']);
//     $final=($_POST['fin']);
// }else{
//     $inicio=date('Y-m-d');
//     $final=date('Y-m-d');
// }
?>
<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <form name="form3" method="post" action="" class="d-flex">
                <div class="input-prepend input-append">

                    <input type="text" name="buscar" class="form-control me-2" placeholder="">
                </div><br>
                <button type="submit" class="btn btn-outline-success" name="buton"><strong>Buscar</strong></button>
            </form>
    </div>
  </div>
</nav>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>


<table class="table table-bordered">
    <!-- <tr class="well">
    <form name="form1" action="" method="post">
                            <div class="row-fluid">
                                <div class="span4" align="center">
                                    <strong>Fecha Inicio</strong><br>
                                    <input type="date" name="ini" value="<?php echo $inicio; ?>" autocomplete="off" required>
                                </div>
                                <div class="span4" align="center">
                                    <strong>Fecha Fin</strong><br>
                                    <input type="date" name="fin" value="<?php echo $final; ?>" autocomplete="off" required>
                                </div>
                                
                                <center><button type="submit" class="btn"><i class="icon-search"></i> <strong>Consultar</strong></button></center>
                            </div>
    </form> -->
    <td>
        <h1 align="center">Inventario Lembo</h1>
        <center>
            
        </center>
    </td>
    </tr>
</table>
<a href="php_cerrar.php"><i class="icon-off"></i> Salir</a></li>
<br>
<a href="formulario_product.php"><button>Insertar</button></a>
<table class="table table-bordered">
    <tr class="well">
        <td><strong>Nombre</strong></td>
        <td><strong>Email</strong></td>
        <td>Nota</td>
        <td>Fecha</td>
        <td></td>
        <td></td>
    </tr>
    <?php
    if (isset($_POST['buscar'])) { //preguntar si exite algo
        $buscar = ($_POST['buscar']); //felipe

        $consulta = $conexion->query("SELECT * FROM clientes WHERE 
                        nombres LIKE '%$buscar%' ORDER BY nombres ASC");
    } else {
        $consulta = $conexion->query("SELECT * FROM clientes");
    }

    while ($row = $consulta->fetch_array()) {

        //   $cod=$row['email'];
    ?>
        <!-- <form action="editar.php" method="POST"> -->
        <tr>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <center>

                    <a class="btn btn-primary" href="modificar.php?"
                    
                                nombre=<?php echo $row['nombres'] ?> &
                                email=<?php echo $row['apellidos'] ?> &
                                
                                nota=<?php echo $row['email'] ?>" title="Editar">
                        <i class="icon-edit">Editar</i>
                    </a>

                </center>



            </td>
            <td>
                <center>

                    <a class="btn btn-danger" href="eliminar.php?email=<?php echo $row['email'] ?>" title="Eliminar">
                        <i class="icon-edit">Eliminar</i>
                    </a>

                </center>



            </td>

            </form>
        </tr>
    <?php } ?>
</table>

</html>