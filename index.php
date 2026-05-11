<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BDV Muebles - Dashboard</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    background:#ececec;
}

.container{
    display:flex;
    height:100vh;
}

/* SIDEBAR */

.sidebar{
    width:260px;
    background:linear-gradient(to bottom,#122033,#26384f);
}

.logo{
    height:90px;
    background:#00b894;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    font-weight:bold;
}

.menu{
    margin-top:20px;
}

.menu ul{
    list-style:none;
}

.menu li{
    margin:10px 15px;
}

.menu li a{
    display:flex;
    align-items:center;
    gap:15px;

    padding:16px 18px;

    color:white;
    text-decoration:none;

    border-radius:10px;

    font-size:19px;

    transition:0.3s;
}

.menu li a:hover{
    background:#34495e;
    transform:translateX(5px);
}

.menu li a i{
    width:25px;
    text-align:center;
}

/* MAIN */

.main{
    flex:1;
    display:flex;
    flex-direction:column;
    overflow-y:auto;
}

/* TOPBAR */

.topbar{
    height:90px;
    background:white;

    display:flex;
    align-items:center;
    justify-content:space-between;

    padding:0 40px;

    border-bottom:1px solid #ddd;
}

.topbar h2{
    color:#444;
    font-size:30px;
}

.user{
    font-size:18px;
    color:#777;
}

/* CARDS */

.cards{
    display:grid;

    grid-template-columns:repeat(4, minmax(220px,1fr));

    gap:20px;

    padding:25px;

    align-items:stretch;
}

@media(max-width:1400px){
    .cards{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:768px){
    .cards{
        grid-template-columns:1fr;
    }
}

.card{
    background:white;
    border-radius:15px;

    display:flex;

    overflow:hidden;

    box-shadow:0 2px 8px rgba(0,0,0,0.1);

    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card-icon{
    width:90px;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:30px;
    color:white;
}

.green{
    background:#8bc34a;
}

.orange{
    background:#ff7043;
}

.blue{
    background:#4fc3f7;
}

.yellow{
    background:#fbc02d;
}

.red{
    background:#e74c3c;
}

.purple{
    background:#9b59b6;
}

.card-info{
    flex:1;

    padding:20px;

    text-align:center;
}

.card-info h3{
    font-size:34px;
    color:#444;
}

.card-info p{
    margin-top:5px;
    color:#777;
    font-size:18px;
}

/* CONTENT */

.content{
    display:grid;

    grid-template-columns:1fr 1fr 1fr;

    gap:20px;

    padding:0 25px 25px 25px;
}

.box{
    background:white;

    border-radius:10px;

    padding:20px;

    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.box h3{
    margin-bottom:15px;

    color:#444;

    font-size:22px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th,
table td{
    padding:10px;

    border-bottom:1px solid #ddd;

    text-align:left;

    font-size:15px;
}

table th{
    background:#f5f5f5;
}

.product{
    display:flex;

    justify-content:space-between;
    align-items:center;

    padding:12px 0;

    border-bottom:1px solid #eee;
}

.product-info{
    display:flex;
    align-items:center;
    gap:10px;
}

.product img{
    width:50px;
    height:50px;

    border-radius:5px;

    object-fit:cover;
}

.price{
    background:#ff9800;

    color:white;

    padding:5px 10px;

    border-radius:5px;

    font-size:13px;
}

</style>
</head>

<body>

<?php

require("conexion.php");

?>

<div class="container">

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">
            BDV Muebles
        </div>

        <div class="menu">

            <ul>

                <li>
                    <a href="index.php">
                        <i class="fa fa-house"></i>
                        <span>Panel de control</span>
                    </a>
                </li>

                <li>
                    <a href="Clientes.php">
                        <i class="fa fa-user"></i>
                        <span>Clientes</span>
                    </a>
                </li>

                <li>
                    <a href="Colores.php">
                        <i class="fa fa-palette"></i>
                        <span>Colores</span>
                    </a>
                </li>

                <li>
                    <a href="Productos.php">
                        <i class="fa fa-couch"></i>
                        <span>Productos</span>
                    </a>
                </li>

                <li>
                    <a href="Pedidos.php">
                        <i class="fa fa-box"></i>
                        <span>Pedidos</span>
                    </a>
                </li>

                <li>
                    <a href="Seguimientos.php">
                        <i class="fa fa-chart-column"></i>
                        <span>Seguimientos</span>
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <!-- MAIN -->

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Dashboard</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CARDS -->

        <div class="cards">

            <!-- CLIENTES -->

            <div class="card">

                <div class="card-icon green">
                    <i class="fa fa-users"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM clientes");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Clientes</p>
                </div>

            </div>

            <!-- PEDIDOS -->

            <div class="card">

                <div class="card-icon orange">
                    <i class="fa fa-box"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM pedidos");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Pedidos</p>
                </div>

            </div>

            <!-- PRODUCTOS -->

            <div class="card">

                <div class="card-icon blue">
                    <i class="fa fa-couch"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM productos");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Productos</p>
                </div>

            </div>

            <!-- GANANCIAS -->

            <div class="card">

                <div class="card-icon yellow">
                    <i class="fa fa-dollar-sign"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT sum(total_obtenido) as total FROM pedidos WHERE id_estado='3'");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3>$<?php echo number_format($r['total'] ?? 0,0,',','.'); ?></h3>
                    <p>Ganancias</p>
                </div>

            </div>

            <!-- PENDIENTES -->

            <div class="card">

                <div class="card-icon purple">
                    <i class="fa fa-clock"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM pedidos WHERE id_estado='1'");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Pendientes</p>
                </div>

            </div>

            <!-- ENTREGADOS -->

            <div class="card">

                <div class="card-icon green">
                    <i class="fa fa-circle-check"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM pedidos WHERE id_estado='3'");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Entregados</p>
                </div>

            </div>

            <!-- CANCELADOS -->

            <div class="card">

                <div class="card-icon red">
                    <i class="fa fa-xmark"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM pedidos WHERE id_estado='4'");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Cancelados</p>
                </div>

            </div>

            <!-- COLORES -->

            <div class="card">

                <div class="card-icon blue">
                    <i class="fa fa-palette"></i>
                </div>

                <?php 
                    $select=mysqli_query($conexion,"SELECT count(*) as total FROM colores");
                    $r=mysqli_fetch_array($select);
                ?>

                <div class="card-info">
                    <h3><?php echo $r['total']; ?></h3>
                    <p>Colores</p>
                </div>

            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <!-- PEDIDOS PENDIENTES -->

            <div class="box">

                <h3>Pedidos pendientes</h3>

                <table>

                    <thead>

                    <tr>
                        <th>Cliente</th>
                        <th>Producto</th>
                    </tr>

                    </thead>

                    <tbody>

                    <?php 
                        $select=mysqli_query($conexion,"SELECT id_cliente, id_producto FROM pedidos WHERE id_estado='2'");

                        while($r=mysqli_fetch_array($select)){

                            $idcliente=mysqli_query($conexion,"SELECT nombre FROM clientes WHERE id_cliente='".$r['id_cliente']."'");
                            $i=mysqli_fetch_array($idcliente);
                            $nombreCliente=$i['nombre'];

                            $idproducto=mysqli_query($conexion,"SELECT nombre_producto FROM productos WHERE id_producto='".$r['id_producto']."'");
                            $i=mysqli_fetch_array($idproducto);
                            $nombreProducto=$i['nombre_producto'];
                    ?>

                    <tr>
                        <td><?php echo $nombreCliente; ?></td>
                        <td><?php echo $nombreProducto; ?></td>
                    </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

            <!-- ENTREGADOS -->

            <div class="box">

                <h3>Últimos pedidos entregados</h3>

                <table>

                    <thead>

                    <tr>
                        <th>Cliente</th>
                        <th>Producto</th>
                        <th>Total</th>
                    </tr>

                    </thead>

                    <tbody>

                    <?php 
                        $select=mysqli_query($conexion,"SELECT id_cliente, id_producto, total_obtenido FROM pedidos WHERE id_estado='3' ORDER BY id_pedido DESC LIMIT 5");

                        while($r=mysqli_fetch_array($select)){

                            $idcliente=mysqli_query($conexion,"SELECT nombre FROM clientes WHERE id_cliente='".$r['id_cliente']."'");
                            $i=mysqli_fetch_array($idcliente);
                            $nombreCliente=$i['nombre'];

                            $idproducto=mysqli_query($conexion,"SELECT nombre_producto FROM productos WHERE id_producto='".$r['id_producto']."'");
                            $i=mysqli_fetch_array($idproducto);
                            $nombreProducto=$i['nombre_producto'];
                    ?>

                    <tr>
                        <td><?php echo $nombreCliente; ?></td>
                        <td><?php echo $nombreProducto; ?></td>
                        <td><?php echo '$' . number_format($r['total_obtenido'], 0, ',', '.'); ?></td>
                    </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

            <!-- PRODUCTOS -->

            <div class="box">

                <h3>Productos recientes</h3>

                <?php 
                    $select=mysqli_query($conexion,"SELECT nombre_producto, imagen_producto FROM productos ORDER BY id_producto DESC LIMIT 5");

                    while($r=mysqli_fetch_array($select)){

                        $nombreProducto=$r['nombre_producto'];
                        $imagenProducto=$r['imagen_producto'];
                ?>

                <div class="product">

                    <div class="product-info">

                        <img src="imagenes/<?php echo $imagenProducto; ?>" alt="<?php echo $nombreProducto; ?>">

                        <div>
                            <strong><?php echo $nombreProducto; ?></strong>
                            <p>Muebles</p>
                        </div>

                    </div>

                </div>

                <?php } ?>

            </div>

        </div>

    </div>

</div>

</body>
</html>