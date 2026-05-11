<?php
if(isset($_POST['eliminar']) && !empty($_POST['eliminar'])){ 
    require("conexion.php");
    $idcolor=$_POST['id_color'];
    
    $eliminar=mysqli_query($conexion,"DELETE FROM colores WHERE id_color=$idcolor");
    echo "<script>window.location.href ='Colores.php?estado=2';</script>";
}
if(isset($_POST['editar']) && !empty($_POST['editar'])){ 
    require("conexion.php");
    $idcolor=$_POST['id_color'];
    $nombre=$_POST['nombre'];
    
    $editar=mysqli_query($conexion,"UPDATE colores SET nombre_color='$nombre' WHERE id_color=$idcolor");
    echo "<script>window.location.href ='Colores.php?estado=1';</script>";
}
if(isset($_POST['agregar']) && !empty($_POST['agregar'])){ 
    require("conexion.php");
    $nombre=$_POST['nombre'];
    
    $agregar=mysqli_query($conexion,"INSERT INTO colores(nombre_color) VALUES ('$nombre')");
    echo "<script>window.location.href ='Colores.php?estado=3';</script>";
}

?>