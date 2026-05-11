<?php

require("conexion.php");

if(isset($_POST['agregar'])){

    $nombre = $_POST['nombre'];

    $nombreImagen = "";

    // VALIDAR SI VIENE IMAGEN
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){

        // Nombre original
        $nombreOriginal = $_FILES['imagen']['name'];

        // Extension
        $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

        // Nuevo nombre unico
        $nombreImagen = time() . "." . $extension;

        // Ruta temporal
        $tmp = $_FILES['imagen']['tmp_name'];

        // Guardar en carpetas
        move_uploaded_file($tmp, "imagenes/" . $nombreImagen);

        // Copia en ImagenesOriginales
        copy(
            "imagenes/" . $nombreImagen,
            "ImagenesOriginales/" . $nombreImagen
        );
    }

    // INSERT
    $sql = "INSERT INTO productos(nombre_producto, imagen_producto)
            VALUES('$nombre', '$nombreImagen')";

    mysqli_query($conexion, $sql);

    header("Location: Productos.php?estado=3");
}






if(isset($_POST['editar'])){

    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];

    // SI SUBE NUEVA IMAGEN
    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){

        $nombreOriginal = $_FILES['imagen']['name'];

        $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);

        $nombreImagen = time() . "." . $extension;

        $tmp = $_FILES['imagen']['tmp_name'];

        move_uploaded_file($tmp, "imagenes/" . $nombreImagen);

        copy(
            "imagenes/" . $nombreImagen,
            "ImagenesOriginales/" . $nombreImagen
        );

        $sql = "UPDATE productos 
                SET nombre_producto='$nombre',
                    imagen_producto='$nombreImagen'
                WHERE id_producto='$id_producto'";

    }else{

        $sql = "UPDATE productos 
                SET nombre_producto='$nombre'
                WHERE id_producto='$id_producto'";
    }

    mysqli_query($conexion, $sql);

    header("Location: Productos.php?estado=1");
}






if(isset($_POST['eliminar'])){

    $id_producto = $_POST['id_producto'];

    mysqli_query($conexion,
        "DELETE FROM productos WHERE id_producto='$id_producto'"
    );

    header("Location: Productos.php?estado=2");
}

?>