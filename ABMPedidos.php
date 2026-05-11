<?php

if(isset($_POST['eliminar']) && !empty($_POST['eliminar'])){ 

    require("conexion.php");
    $idpedido=$_POST['id_pedido'];
    
    $eliminar=mysqli_query($conexion,"UPDATE pedidos SET id_estado='4' WHERE id_pedido=$idpedido");
    //header("Location: Seguimientos.php?estado=2");
}
if(isset($_POST['editar']) && !empty($_POST['editar'])){ 

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    require("conexion.php");
    $idpedido=$_POST['id_pedido'];
    $idcliente=$_POST['id_cliente'];
    $idproducto=$_POST['id_producto'];
    $idcolor=$_POST['id_color'];
    $idestado=$_POST['id_estado'];
    $medidas=$_POST['medidas'];
    $observacion=$_POST['observacion'];
    $gastos=$_POST['gastos'];
    $ganancias=$_POST['ganancias'];
    $precio_total=$_POST['precio_total'];
    $fecha_entrega=$_POST['fecha_entrega'];
    $fecha_pedido=$_POST['fecha_pedido'];
    
    $editar= "UPDATE pedidos SET id_cliente='$idcliente', id_producto='$idproducto', id_color='$idcolor', id_estado='$idestado', medidas='$medidas', observacion='$observacion', gastos_materiales='$gastos', ganancias_obtener='$ganancias', total_obtenido='$precio_total', fecha_entrega='$fecha_entrega', fecha_pedido='$fecha_pedido' WHERE id_pedido=$idpedido";
    
    echo "<br><br>";
    echo $editar;

    echo "<br><br>";

    $editar = mysqli_query($conexion, $editar);

    if($editar){
        echo "UPDATE OK";
    }else{
        echo "ERROR SQL:<br>";
        echo mysqli_error($conexion);
    }

    die();
    //header("Location: Seguimientos.php?estado=1");
}
if(isset($_POST['agregar']) && !empty($_POST['agregar'])){ 

    require("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $idcliente = $_POST['id_cliente'];
    $idproducto = $_POST['id_producto'];
    $idcolor = $_POST['id_color'];
    $idestado = $_POST['id_estado'];
    $medidas = $_POST['medidas'];
    $observacion = $_POST['observacion'];
    $gastos = $_POST['gastos'];
    $ganancias = $_POST['ganancias'];
    $precio_total = $_POST['precio_total'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $fecha_pedido = $_POST['fecha_pedido'];

    $sql = "
    INSERT INTO pedidos(
        id_cliente,
        id_producto,
        id_color,
        id_estado,
        medidas,
        observacion,
        gastos_materiales,
        ganancias_obtener,
        total_obtenido,
        fecha_entrega,
        fecha_pedido
    ) VALUES (
        '$idcliente',
        '$idproducto',
        '$idcolor',
        '$idestado',
        '$medidas',
        '$observacion',
        '$gastos',
        '$ganancias',
        '$precio_total',
        '$fecha_entrega',
        '$fecha_pedido'
    )";

    echo "<br><br>";
    echo $sql;

    echo "<br><br>";

    $agregar = mysqli_query($conexion, $sql);

    if($agregar){
        echo "INSERT OK";
    }else{
        echo "ERROR SQL:<br>";
        echo mysqli_error($conexion);
    }

    die();
}
