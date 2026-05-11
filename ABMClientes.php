<?php
if(isset($_POST['eliminar']) && !empty($_POST['eliminar'])){ 
    require("conexion.php");
    $idcliente=$_POST['id_cliente'];
    
    $eliminar=mysqli_query($conexion,"DELETE FROM clientes WHERE id_cliente=$idcliente");
    echo "<script>window.location.href ='Clientes.php?estado=2';</script>";
}
if(isset($_POST['editar']) && !empty($_POST['editar'])){ 
    require("conexion.php");
    $idcliente=$_POST['id_cliente'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $observacion=$_POST['observacion'];
    
    $editar=mysqli_query($conexion,"UPDATE clientes SET nombre='$nombre', telefono='$telefono', direccion='$direccion', observacion='$observacion' WHERE id_cliente=$idcliente");
    echo "<script>window.location.href ='Clientes.php?estado=1';</script>";
}
if(isset($_POST['agregar']) && !empty($_POST['agregar'])){ 
    require("conexion.php");
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $observacion=$_POST['observacion'];
    
    $agregar=mysqli_query($conexion,"INSERT INTO clientes(nombre, telefono, direccion, observacion) VALUES ('$nombre', '$telefono', '$direccion', '$observacion')");
    echo "<script>window.location.href ='Clientes.php?estado=3';</script>";
}

?>