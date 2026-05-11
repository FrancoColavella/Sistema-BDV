<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BDV Muebles - Seguimientos</title>

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

/* CONTAINER */

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
    background:#10b79c;

    display:flex;
    align-items:center;

    padding-left:25px;

    color:white;

    font-size:24px;
    font-weight:bold;
}

.menu{
    margin-top:20px;
}

.menu ul{
    list-style:none;
}

.menu li{
    margin:8px 15px;
}

.menu li a{
    display:flex;
    align-items:center;
    gap:15px;

    padding:15px 18px;

    color:white;
    text-decoration:none;

    border-radius:10px;

    font-size:18px;

    transition:0.3s;
}

.menu li a:hover{
    background:#34495e;
    transform:translateX(5px);
}

.menu li a i{
    width:25px;
}

/* MAIN */

.main{
    flex:1;
    display:flex;
    flex-direction:column;
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
    font-size:28px;
    color:#333;
}

.user{
    color:#666;
    font-size:18px;
}

/* CONTENT */

.content{
    padding:25px;
}

/* BOX */

.form-box{
    background:white;

    border-radius:10px;

    overflow:hidden;

    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.form-header{
    padding:18px 22px;

    border-bottom:3px solid #1e90ff;

    font-size:20px;
    font-weight:bold;

    color:#333;
}

/* BODY */

.form-body{
    display:flex;
    gap:25px;

    padding:25px;
}

/* LEFT */

.left-side{
    width:45%;
}

.form-group{
    margin-bottom:25px;
}

label{
    display:block;

    margin-bottom:10px;

    font-size:18px;
    font-weight:bold;

    color:#333;
}

input,
select{
    width:100%;

    padding:14px;

    border:1px solid #ccc;

    border-radius:5px;

    font-size:16px;

    outline:none;
}

input:focus,
select:focus{
    border:1px solid #1e90ff;
}

/* BUTTONS */

.buttons{
    margin-top:20px;

    display:flex;
    gap:15px;
}

.btn-guardar,
.btn-cancelar{
    border:none;

    padding:12px 24px;

    font-size:17px;

    border-radius:5px;

    cursor:pointer;

    color:white;

    transition:0.3s;
}

.btn-guardar{
    background:#10b79c;
}

.btn-guardar:hover{
    background:#0d9d85;
}

.btn-cancelar{
    background:#e74c3c;
}

.btn-cancelar:hover{
    background:#c0392b;
}

/* RIGHT */

.right-side{
    flex:1;
}

/* USERS BOX */

.users-box{
    border:1px solid #ddd;

    border-radius:8px;

    overflow:hidden;
}

.users-header{
    padding:18px;

    background:#f8f9fa;

    border-bottom:1px solid #ddd;

    font-size:20px;
    font-weight:bold;

    color:#1565c0;
}

.users-header i{
    margin-right:10px;
}

/* TABLE */

/* CONTENT */

.content{
    width:100%;
    padding:10px;
}

/* FORM BOX */

.form-box{
    width:100%;

    background:white;

    border-radius:10px;

    overflow:hidden;

    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

/* FORM BODY */

.form-body{
    width:100%;

    padding:25px;
}

/* USERS BOX */

.users-box{
    width:100%;

    border:1px solid #ddd;

    border-radius:8px;

    overflow:hidden;
}

/* TABLE CONTAINER */

.table-container{
    width:100%;

    max-height:650px;

    overflow-y:auto;
}

/* TABLE */

table{
    width:100%;

    border-collapse:collapse;
}

table th{
    background:#f3f3f3;

    padding:16px;

    text-align:left;

    font-size:16px;
}

table td{
    padding:16px;

    border-top:1px solid #eee;

    font-size:15px;
}

/* SCROLL */

.table-container::-webkit-scrollbar{
    width:8px;
}

.table-container::-webkit-scrollbar-thumb{
    background:#bbb;

    border-radius:10px;
}

/* ACTION BUTTONS */

.action-buttons{
    display:flex;
    gap:10px;
}

/* EDITAR */

.btn-editar{
    border:none;

    background:#3498db;

    color:white;

    width:38px;
    height:38px;

    border-radius:6px;

    cursor:pointer;

    transition:0.3s;
}

.btn-editar:hover{
    background:#2980b9;
}

/* ELIMINAR */

.btn-eliminar{
    border:none;

    background:#e74c3c;

    color:white;

    width:38px;
    height:38px;

    border-radius:6px;

    cursor:pointer;

    transition:0.3s;
}

.btn-eliminar:hover{
    background:#c0392b;
}

.btn-select{
    border:none;

    background:#3498db;

    color:white;

    width:38px;
    height:38px;

    border-radius:6px;

    cursor:pointer;

    transition:0.3s;
}

.btn-select:hover{
    background:#2980b9;
}

.btn-select{
    text-decoration:none;

    display:flex;
    align-items:center;
    justify-content:center;

    gap:8px;
}

.btn-generar{
    border:none;

    background:#10b79c;

    color:white;

    width:38px;
    height:38px;

    border-radius:6px;

    cursor:pointer;

    transition:0.3s;
}

.btn-generar:hover{
    background:#0d9d85;
}

.btn-generar{
    text-decoration:none;

    display:flex;
    align-items:center;
    justify-content:center;

    gap:8px;
}

.estado{
    padding:6px 12px;
    border-radius:20px;
    font-size:13px;
    font-weight:bold;
    color:white;
    display:inline-block;
    text-align:center;
    min-width:120px;
}

/* ESTADOS */

.estado-pendiente{
    background:#f1c40f;
    color:#333;
}

.estado-fabricacion{
    background:#3498db;
}

.estado-pintura{
    background:#9b59b6;
}

.estado-listo{
    background:#2ecc71;
}

.estado-entregado{
    background:#27ae60;
}

.estado-cancelado{
    background:#e74c3c;
}

/* AGREGAR ESTO DENTRO DE <style> */

.search-box{
    margin-bottom:20px;
    padding:20px;
}

#buscador{
    width:100%;

    padding:14px;

    border:1px solid #ccc;
    border-radius:8px;

    font-size:16px;

    outline:none;

    transition:0.3s;
}

#buscador:focus{
    border:1px solid #3498db;
    box-shadow:0 0 5px rgba(52,152,219,0.4);
}

th{
    cursor:pointer;

    user-select:none;

    transition:0.3s;
}

th:hover{
    background:#eaeaea;
}
</style>
</head>
<!-- AGREGAR ESTO ANTES DE </head> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<body>

<?php
    
    
    require("conexion.php");
    if (isset($_GET['estado'])&& $_GET['estado']==3) {
        echo "<div class='alert alert-success'>Pedido Agregado correctamente!!</div>";
    }
    if (isset($_GET['estado'])&& $_GET['estado']==2) {
        echo "<div class='alert alert-success'>Pedido Eliminado correctamente!!</div>";
    }
    if (isset($_GET['estado'])&& $_GET['estado']==1) {
        echo "<div class='alert alert-warning'>Pedido Editado correctamente!!</div>";
    }

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

            <h2>Seguimientos</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">
                    <i class="fa fa-chart-column"></i>
                    Seguimientos
                </div>

                <div class="form-body">
                    
                        <div class="users-box">

                            <div class="users-header">

                                <i class="fa fa-couch"></i>
                                PEDIDOS REGISTRADOS

                            </div>

                            <!-- BUSCADOR -->

                            <div class="search-box">

                                <input type="text"
                                id="buscador"
                                placeholder="🔎 Buscar pedido...">

                            </div>

                            <div class="table-container">

                                <table id="tablaPedidos">

                                    <thead>

                                        <tr>

                                            <th onclick="ordenarTabla(0)"> ID <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(1)">Nombre cliente <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(2)">Nombre producto <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(3)">Color <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(4)">Estado <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(5)">Medidas <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(6)">Observaciones <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(7)">Gastos <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(8)">Ganancias <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(9)">Precio <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(10)">Fecha entrega <i class="fa fa-sort"></i></th>
                                            <th onclick="ordenarTabla(11)">Fecha pedido <i class="fa fa-sort"></i></th>
                                            <th>Acciones</th>
                                        </tr>

                                    </thead>

                                    <tbody id="tablaPedidos">
                                        <?php 
                                            $select=mysqli_query($conexion,"SELECT id_pedido,id_cliente, id_producto, id_color, id_estado, medidas, observacion, gastos_materiales, ganancias_obtener, total_obtenido, fecha_entrega, fecha_pedido FROM pedidos ORDER BY id_pedido DESC");
                                                while($r=mysqli_fetch_array($select)){
                                                    $idPedido=$r['id_pedido'];
                                                    $idCliente=$r['id_cliente'];
                                                    $idProducto=$r['id_producto'];
                                                    $idColor=$r['id_color'];
                                                    $idEstado=$r['id_estado'];
                                                    $medidas=$r['medidas'];
                                                    $observacion=$r['observacion'];
                                                    $gastos=$r['gastos_materiales'];
                                                    $ganancias=$r['ganancias_obtener'];
                                                    $precioTotal=$r['total_obtenido'];
                                                    $fechaEntrega=$r['fecha_entrega'];
                                                    $fechaPedido=$r['fecha_pedido'];
                                                    $selectCliente=mysqli_query($conexion,"SELECT nombre FROM clientes WHERE id_cliente='$idCliente'");
                                                    $rCliente=mysqli_fetch_array($selectCliente);
                                                    $nombreCliente=$rCliente['nombre'];
                                                    $selectProducto=mysqli_query($conexion,"SELECT nombre_producto FROM productos WHERE id_producto='$idProducto'");
                                                    $rProducto=mysqli_fetch_array($selectProducto);
                                                    $nombreProducto=$rProducto['nombre_producto'];
                                                    $selectColor=mysqli_query($conexion,"SELECT nombre_color FROM colores WHERE id_color='$idColor'");
                                                    $rColor=mysqli_fetch_array($selectColor);
                                                    $nombreColor=$rColor['nombre_color'];
                                                    $selectEstado=mysqli_query($conexion,"SELECT nombre_estado FROM estados WHERE id_estado='$idEstado'");
                                                    $rEstado=mysqli_fetch_array($selectEstado);
                                                    $nombreEstado=$rEstado['nombre_estado'];
                                            ?>

                                        <tr>
                                            <td><?php echo $idPedido; ?></td>
                                            <td><?php echo $nombreCliente; ?></td>
                                            <td><?php echo $nombreProducto; ?></td>
                                            <td><?php echo $nombreColor; ?></td>
                                            <?php
                                            $claseEstado = "";
                                            switch($idEstado){
                                            case 1:
                                                $claseEstado = "estado-pendiente";
                                            break;
                                            case 2:
                                                $claseEstado = "estado-fabricacion";
                                            break;
                                            case 3:
                                                $claseEstado = "estado-entregado";
                                            break;
                                            case 4:
                                                $claseEstado = "estado-cancelado";
                                            break;
                                            }
                                            ?>
                                            <td>
                                                <span class="estado <?php echo $claseEstado; ?>">
                                                    <i class="fa fa-circle"></i>
                                                    <?php echo $nombreEstado; ?>
                                                </span>
                                            </td>
                                            <td><?php echo $medidas; ?></td>
                                            <td><?php echo $observacion; ?></td>
                                            <td><?php echo $gastos; ?></td>
                                            <td><?php echo $ganancias; ?></td>
                                            <td><?php echo $precioTotal; ?></td>
                                            <td><?php echo $fechaEntrega; ?></td>
                                            <td><?php echo $fechaPedido; ?></td>
                                            <td>

                                                <div class="action-buttons">
                                                    <form method="POST" action="Pedidos.php">
                                                        <button type="submit" name="id_pedido" value="<?php echo $r['id_pedido']; ?>" class="btn-select"><i class="fa fa-pen"></i></button>
                                                    </form>
                                                <?php if($idEstado==3){ ?>
                                                    <form method="POST" action="GenerarFactura.php">
                                                        <button type="submit" name="id_pedido" value="<?php echo $r['id_pedido']; ?>" class="btn-generar"><i class="fa fa-file-invoice"></i></button>
                                                    </form>
                                                <?php } ?>
                                                </div>
            
                                            </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<script>

$("#buscador").on("keyup", function () {

    var valor = $(this).val().toLowerCase();

    $("#tablaPedidos tr").filter(function () {

        $(this).toggle(

            $(this).text().toLowerCase().indexOf(valor) > -1

        );

    });

});

let direccion = true;

function ordenarTabla(columna){

    const tabla = document.getElementById("tablaPedidos");

    const tbody = tabla.tBodies[0];

    const filas = Array.from(tbody.rows);

    filas.sort((a,b)=>{

        let valorA = a.cells[columna].innerText.trim();
        let valorB = b.cells[columna].innerText.trim();

        /* NUMEROS */

        if(!isNaN(valorA) && !isNaN(valorB)){

            valorA = Number(valorA);
            valorB = Number(valorB);

            return direccion
                ? valorA - valorB
                : valorB - valorA;
        }

        /* TEXTO */

        return direccion
            ? valorA.localeCompare(valorB)
            : valorB.localeCompare(valorA);

    });

    direccion = !direccion;

    filas.forEach(fila => tbody.appendChild(fila));
}

</script>
</body>
</html>