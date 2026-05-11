<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BDV Muebles - Agregar Pedido</title>

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
.btn-cancelar,
.btn-editar,
.btn-eliminar{
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

.btn-editar{
    background:#10b79c;
}

.btn-editar:hover{
    background:#0d9d85;
}

.btn-eliminar{
    background:#e74c3c;
}

.btn-eliminar:hover{
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

.table-container{
    max-height:410px;

    overflow-y:auto;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#f3f3f3;

    padding:14px;

    text-align:left;

    font-size:15px;
}

table td{
    padding:14px;

    border-top:1px solid #eee;

    font-size:15px;
}

/* ROLES */

.role-admin{
    background:#d4edda;
    color:#2e7d32;

    padding:5px 10px;

    border-radius:5px;

    font-size:13px;
    font-weight:bold;
}

.role-emp{
    background:#e3f2fd;
    color:#1565c0;

    padding:5px 10px;

    border-radius:5px;

    font-size:13px;
    font-weight:bold;
}

/* SCROLL */

.table-container::-webkit-scrollbar{
    width:8px;
}

.table-container::-webkit-scrollbar-thumb{
    background:#bbb;
    border-radius:10px;
}

</style>
</head>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

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
                        Panel de control
                    </a>
                </li>

                <li>
                    <a href="Clientes.php">
                        <i class="fa fa-user"></i>
                        Clientes
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
                        Productos
                    </a>
                </li>

                <li>
                    <a href="Pedidos.php">
                        <i class="fa fa-box"></i>
                        Pedidos
                    </a>
                </li>

                <li>
                    <a href="Seguimientos.php">
                        <i class="fa fa-chart-column"></i>
                        Seguimientos
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <!-- MAIN -->

<?php 
    if (isset($_POST['id_pedido'])) {
            $id_pedido=$_POST['id_pedido'];
            $consulta="SELECT * FROM pedidos WHERE id_pedido='$id_pedido'";
                $resultado=mysqli_query($conexion,$consulta);
                $pedido=mysqli_fetch_array($resultado);
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

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Editar Pedido</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">

                    <i class="fa fa-box"></i>
                    EDITAR PEDIDO

                </div>

                <div class="form-body">

                    <!-- LEFT -->

                    <div class="left-side">

                        <div class="form-group">
                            <label>Nombre cliente</label>

                            <select name="edit_cliente" id="edit_cliente">

                            <?php $selectCliente=mysqli_query($conexion,"SELECT id_cliente,nombre FROM clientes ORDER BY nombre ASC");
									while($r=mysqli_fetch_array($selectCliente)){?>
										
										<option value="<?php echo $r['id_cliente'];?>" <?php  if($pedido['id_cliente']==$r['id_cliente']){ echo'selected';}?>><?php echo $r['nombre'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nombre producto</label>

                            <select name="edit_producto" id="edit_producto">
                            <?php $selectProducto=mysqli_query($conexion,"SELECT id_producto,nombre_producto FROM productos ORDER BY nombre_producto ASC");
									while($r=mysqli_fetch_array($selectProducto)){?>
										
										<option value="<?php echo $r['id_producto'];?>" <?php  if($pedido['id_producto']==$r['id_producto']){ echo'selected';}?>><?php echo $r['nombre_producto'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Color</label>

                            <select name="edit_color" id="edit_color">
                            <?php $selectColor=mysqli_query($conexion,"SELECT id_color,nombre_color FROM colores ORDER BY nombre_color ASC");
									while($r=mysqli_fetch_array($selectColor)){?>
										
										<option value="<?php echo $r['id_color'];?>" <?php  if($pedido['id_color']==$r['id_color']){ echo'selected';}?>><?php echo $r['nombre_color'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Estado</label>

                            <select name="edit_estado" id="edit_estado">
                            <?php $selectEstado=mysqli_query($conexion,"SELECT id_estado,nombre_estado FROM estados ORDER BY nombre_estado ASC");
									while($r=mysqli_fetch_array($selectEstado)){?>
										
										<option value="<?php echo $r['id_estado'];?>" <?php  if($pedido['id_estado']==$r['id_estado']){ echo'selected';}?>><?php echo $r['nombre_estado'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">

                            <label>Medidas</label>

                            <input type="text" id="edit_medidas" name="edit_medidas" value="<?php echo $pedido['medidas']; ?>">

                        </div>

                        <div class="form-group">

                            <label>Observación</label>

                            <input type="text" id="edit_observacion" name="edit_observacion" value="<?php echo $pedido['observacion']; ?>"
                            placeholder="Observación">

                        </div>

                    </div>

                    <!-- RIGHT -->

                    <div class="right-side">

                        <div class="form-group">

                            <label>Gastos</label>

                            <input type="text" id="edit_gastos" name="edit_gastos" value="<?php echo $pedido['gastos_materiales']; ?>"
                            placeholder="Gastos">

                        </div>
                    
                        <div class="form-group">

                            <label>Ganancias</label>

                            <input type="text" id="edit_ganancias" name="edit_ganancias" value="<?php echo $pedido['ganancias_obtener']; ?>"
                            placeholder="Ganancias">

                        </div>

                        <div class="form-group">

                            <label>Precio total</label>

                            <input type="text" id="edit_precio_total" name="edit_precio_total" value="<?php echo $pedido['total_obtenido']; ?>" disabled>

                        </div>

                        <div class="form-group">

                            <label>Fecha entrega</label>

                            <input type="date" id="edit_fecha_entrega" name="edit_fecha_entrega" value="<?php echo $pedido['fecha_entrega']; ?>"
                            placeholder="Fecha entrega">

                        </div>

                        <div class="form-group">

                            <label>Fecha pedido</label>

                            <input type="date" id="edit_fecha_pedido" name="edit_fecha_pedido" value="<?php echo $pedido['fecha_pedido']; ?>"
                            placeholder="Fecha pedido" disabled>

                        </div>

                        <!-- BOTONES -->

                        <div class="buttons">

                            <button type="button" class="btn-editar" onclick="editarPedido(<?php echo $pedido['id_pedido']?>)">
                                <i class="fa fa-floppy-disk"></i>
                                    Editar
                            </button>

                            <button type="button" class="btn-eliminar" onclick="eliminarPedido(<?php echo $pedido['id_pedido']?>)">
                                <i class="fa fa-xmark"></i>
                                    Eliminar
                            </button>

                        </div>

                    </div>
                    <script>
                        const gastos = document.getElementById('edit_gastos');
                        const ganancias = document.getElementById('edit_ganancias');
                        const precioTotal = document.getElementById('edit_precio_total');

                        function calcularTotal(){

                            // Convertir a número
                            const valorGastos = parseFloat(edit_gastos.value) || 0;
                            const valorGanancias = parseFloat(edit_ganancias.value) || 0;

                            // Sumar
                            const total = valorGastos + valorGanancias;

                            // Mostrar resultado
                            edit_precio_total.value = total;
                        }
                        // Escuchar cambios
                        edit_gastos.addEventListener('input', calcularTotal);
                        edit_ganancias.addEventListener('input', calcularTotal);
                    </script>
<?php }else{ ?>
    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Agregar Pedido</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">

                    <i class="fa fa-box"></i>
                    AGREGAR PEDIDO

                </div>

                <div class="form-body">

                    <!-- LEFT -->

                    <div class="left-side">

                        <div class="form-group">
                            <label>Nombre cliente</label>

                            <select name="cliente" id="cliente">

                            <?php $selectCliente=mysqli_query($conexion,"SELECT id_cliente,nombre FROM clientes ORDER BY nombre ASC");
									while($r=mysqli_fetch_array($selectCliente)){?>
										
										<option value="<?php echo $r['id_cliente'];?>"><?php echo $r['nombre'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nombre producto</label>

                            <select name="producto" id="producto">
                            <?php $selectProducto=mysqli_query($conexion,"SELECT id_producto,nombre_producto FROM productos ORDER BY nombre_producto ASC");
									while($r=mysqli_fetch_array($selectProducto)){?>
										
										<option value="<?php echo $r['id_producto'];?>"><?php echo $r['nombre_producto'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Color</label>

                            <select name="color" id="color">
                            <?php $selectColor=mysqli_query($conexion,"SELECT id_color,nombre_color FROM colores ORDER BY nombre_color ASC");
									while($r=mysqli_fetch_array($selectColor)){?>
										
										<option value="<?php echo $r['id_color'];?>"><?php echo $r['nombre_color'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Estado</label>

                            <select name="estado" id="estado">
                            <?php $selectEstado=mysqli_query($conexion,"SELECT id_estado,nombre_estado FROM estados ORDER BY nombre_estado ASC");
									while($r=mysqli_fetch_array($selectEstado)){?>
										
										<option value="<?php echo $r['id_estado'];?>"><?php echo $r['nombre_estado'];?></option>
                                    <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">

                            <label>Medidas</label>

                            <input type="text" id="medidas" name="medidas" placeholder="Medidas">

                        </div>

                        <div class="form-group">

                            <label>Observación</label>

                            <input type="text" id="observacion" name="observacion" placeholder="Observación">

                        </div>

                    </div>

                    <!-- RIGHT -->

                    <div class="right-side">

                        <div class="form-group">

                            <label>Gastos</label>

                            <input type="text" id="gastos" name="gastos" placeholder="Gastos">

                        </div>
                    
                        <div class="form-group">

                            <label>Ganancias</label>

                            <input type="text" id="ganancias" name="ganancias" placeholder="Ganancias">

                        </div>

                        <div class="form-group">

                            <label>Precio total</label>

                            <input type="text" id="precio_total" name="precio_total" disabled>

                        </div>

                        <div class="form-group">

                            <label>Fecha entrega</label>

                            <input type="date" id="fecha_entrega" name="fecha_entrega" placeholder="Fecha entrega">

                        </div>

                        <div class="form-group">

                            <label>Fecha pedido</label>

                            <input type="date" id="fecha_pedido" name="fecha_pedido" value="<?php echo date('Y-m-d'); ?>" disabled>

                        </div>

                        <!-- BOTONES -->

                        <div class="buttons">

                            <button type="button" class="btn-guardar" onclick="agregarPedido()">
                                <i class="fa fa-floppy-disk"></i>
                                    Guardar
                            </button>

                            <a href="Pedidos.php" class="btn-cancelar">
                                <i class="fa fa-xmark"></i>
                                Cancelar
                            </a>

                        </div>

                    </div>
                    <script>
                        
                        const fecha = new Date(
                        new Date().toLocaleString(
                            "en-US",
                        { timeZone: "America/Argentina/Buenos_Aires" }
                            )
                        );

                        const anio = fecha.getFullYear();
                        const mes = String(fecha.getMonth() + 1).padStart(2, '0');
                        const dia = String(fecha.getDate()).padStart(2, '0');

                        document.getElementById('fecha_pedido').value =
                        `${anio}-${mes}-${dia}`;


                        const gastos = document.getElementById('gastos');
                        const ganancias = document.getElementById('ganancias');
                        const precioTotal = document.getElementById('precio_total');

                        function calcularTotal(){

                            // Convertir a número
                            const valorGastos = parseFloat(gastos.value) || 0;
                            const valorGanancias = parseFloat(ganancias.value) || 0;

                            // Sumar
                            const total = valorGastos + valorGanancias;

                            // Mostrar resultado
                            precioTotal.value = total;
                        }
                        // Escuchar cambios
                        gastos.addEventListener('input', calcularTotal);
                        ganancias.addEventListener('input', calcularTotal);
                    </script>
<?php } ?>

                </div>

            </div>

        </div>

    </div>
    

</div>

<script>
    function agregarPedido(){

    var agregar = confirm('De verdad desea agregar este pedido');

    if(agregar){

        var idcliente = document.getElementById('cliente').value;
        var idproducto = document.getElementById('producto').value;
        var idcolor = document.getElementById('color').value;
        var idestado = document.getElementById('estado').value;
        var medidas = document.getElementById('medidas').value;
        var observacion = document.getElementById('observacion').value;
        var gastos = document.getElementById('gastos').value;
        var ganancias = document.getElementById('ganancias').value;
        var precio_total = document.getElementById('precio_total').value;
        var fecha_entrega = document.getElementById('fecha_entrega').value;
        var fecha_pedido = document.getElementById('fecha_pedido').value;

        $.ajax({

            url: 'ABMPedidos.php',

            type: 'POST',

            data: {

                id_cliente: idcliente,
                id_producto: idproducto,
                id_color: idcolor,
                id_estado: idestado,
                medidas: medidas,
                observacion: observacion,
                gastos: gastos,
                ganancias: ganancias,
                precio_total: precio_total,
                fecha_entrega: fecha_entrega,
                fecha_pedido: fecha_pedido,
                agregar: 'agregarPedido'

            },

            success:function(response){

                console.log(response);

                window.location.href='Seguimientos.php?estado=3';

            },

            error:function(jqXHR){

                console.log(jqXHR.statusText);

            }

        });

    }

}

    function editarPedido(id_pedido){
        var editar = confirm('De verdad desea editar este pedido');
            if ( editar ) {                
                var idcliente = document.getElementById('edit_cliente').value;
                var idproducto = document.getElementById('edit_producto').value;
                var idcolor = document.getElementById('edit_color').value;
                var idestado = document.getElementById('edit_estado').value;
                var medidas = document.getElementById('edit_medidas').value;
                var observacion = document.getElementById('edit_observacion').value;
                var gastos = document.getElementById('edit_gastos').value;
                var ganancias = document.getElementById('edit_ganancias').value;
                var precio_total = document.getElementById('edit_precio_total').value;
                var fecha_entrega = document.getElementById('edit_fecha_entrega').value;
                var fecha_pedido = document.getElementById('edit_fecha_pedido').value;


                $.ajax({
                    url: 'ABMPedidos.php',
                    type: 'POST',
                    data: { 
                    id_pedido: id_pedido,
                    id_cliente: idcliente,
                    id_producto: idproducto,
                    id_color: idcolor,
                    id_estado: idestado,
                    medidas: medidas,
                    observacion: observacion,
                    gastos: gastos,
                    ganancias: ganancias,
                    precio_total: precio_total,
                    fecha_entrega: fecha_entrega,
                    fecha_pedido: fecha_pedido,
                    editar: 'editarPedido'
                                    
                    },
                    success:function(response){

                    console.log(response);

                    window.location.href='Seguimientos.php?estado=3';

                    },

                    error:function(jqXHR){

                    console.log(jqXHR.statusText);

                    }
                });
    }

    }

     function eliminarPedido(id_pedido){

    var eliminar = confirm('De verdad desea eliminar este pedido');

    if(eliminar){

        $.ajax({
            url: 'ABMPedidos.php',
            type: 'POST',
            data: { 
                id_pedido: id_pedido,
                eliminar: 'eliminarPedido'
            },

            success:function(response){
                console.log(response);
                window.location.href ='Seguimientos.php?estado=2';
            },

            error:function(jqXHR){
                console.log(jqXHR.statusText);
            }
        });

    }
}


</script>



</body>
</html>
                                                