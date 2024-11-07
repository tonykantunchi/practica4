<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Estilo.css">
    <title>ToyStore</title>
</head>
<body>
    <?php include_once "superior.php" ?>
    <?php
        include_once "metodos.php";
        $productos = listadoJuguetes();
    ?>
    <h2>Juguetes en el sistema</h2>
    <div class="colum">
        <a class="alta" href="alta_juguete.php">
            <h2>Alta de juguetes &nbsp; <i class="fa fa-plus-square-o" style="font-size:24px;color:white"></i></a></h2>
        <table class="table">
            <thead>
                <tr>
                    <tr></tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) {?>
                    <tr>
                        <td><?php echo $producto->nombre ?></td>
                        <td><?php echo $producto->descripcion ?></td>
                        <td>$<?php echo number_format($producto->precio, 2) ?></td>
                        <td><?php echo '<img width="100" src="data:image/jpeg;base64,'.base64_encode($producto->imagen).'"/'; ?></td>
                        <td>
                            <form action="baja_juguete.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button>
                                    <i class="fa fa-trash-o" style="font-size:24px;color:red"></i>Eliminar
                                </button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include_once "inferior.php" ?>
</body>
</html>