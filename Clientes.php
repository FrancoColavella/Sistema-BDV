<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BDV Muebles - Agregar Cliente</title>

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

/* ACTION BUTTONS */

.action-buttons{
    display:flex;
    gap:10px;
}

/* EDITAR */

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
                        <span>Seguimientos</span>
                    </a>
                </li>

            </ul>

        </div>

    </div>

    <!-- MAIN -->
<?php 
    if (isset($_POST['id_cliente'])) {
            $id_cliente=$_POST['id_cliente'];
            $consulta="SELECT * FROM clientes WHERE id_cliente='$id_cliente'";
                $resultado=mysqli_query($conexion,$consulta);
                $cliente=mysqli_fetch_array($resultado);

                if (isset($_GET['estado'])&& $_GET['estado']==3) {
                        echo "<div class='alert alert-success'>Cliente Agregado correctamente!!</div>";
                    }
                    if (isset($_GET['estado'])&& $_GET['estado']==2) {
                        echo "<div class='alert alert-success'>Cliente Eliminado correctamente!!</div>";
                    }
                    if (isset($_GET['estado'])&& $_GET['estado']==1) {
                        echo "<div class='alert alert-warning'>Cliente Editado correctamente!!</div>";
                    }
            
?>
 
                     

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Editar Cliente</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">

                    <i class="fa fa-user-plus"></i>
                    EDITAR CLIENTE

                </div>

                <div class="form-body">

                    <!-- LEFT -->

                    <div class="left-side">

                        <div class="form-group">

                            <label>Nombre</label>

                            <input type="text" id="edit_nombre" value="<?php echo $cliente['nombre']; ?>">

                        </div>

                        <div class="form-group">

                            <label>Telefono</label>

                            <input type="text" id="edit_telefono" value="<?php echo $cliente['telefono']; ?>">

                        </div>

                        <div class="form-group">

                            <label>Direccion</label>

                            <input type="text" id="edit_direccion" value="<?php echo $cliente['direccion']; ?>">


                        </div>

                        <div class="form-group">

                            <label>Observacion</label>

                            <input type="text" id="edit_observacion" value="<?php echo $cliente['observacion']; ?>">

                        </div>

                        <!-- BOTONES -->

                        <div class="buttons">
                            <input type="text" name="editarCliente" id="editarCliente" value="editarCliente" hidden>
                            <a href="#" class="btn-editar" onclick="editarCliente(<?php echo $cliente['id_cliente']?>)">
                                <i class="fa fa-floppy-disk"></i>
                                Editar
                            </a>

                            <input type="text" name="eliminarCliente" id="eliminarCliente" value="eliminarCliente" hidden>
                            <a href="#" class="btn-eliminar" onclick="eliminarCliente(<?php echo $cliente['id_cliente']?>)">
                                <i class="fa fa-xmark"></i>
                                Eliminar
                            </a>

                        </div>

                    </div>
<?php }else{ ?>
                
    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Agregar Cliente</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">

                    <i class="fa fa-user-plus"></i>
                    AGREGAR CLIENTE

                </div>

                <div class="form-body">

                    <!-- LEFT -->

                    <div class="left-side">

                        <div class="form-group">

                            <label>Nombre</label>

                            <input type="text" name="nombre" id="nombre"
                            placeholder="Nombre completo">

                        </div>

                        <div class="form-group">

                            <label>Telefono</label>

                            <input type="text" name="telefono" id="telefono"
                            placeholder="Telefono">

                        </div>

                        <div class="form-group">

                            <label>Direccion</label>

                            <input type="text" name="direccion" id="direccion"
                            placeholder="Direccion">

                        </div>

                        <div class="form-group">

                            <label>Observacion</label>

                            <input type="text" name="observacion" id="observacion"
                            placeholder="Observacion">

                        </div>

                        <!-- BOTONES -->

                        <div class="buttons">

                            <input type="text" name="agregarCliente" id="agregarCliente" value="agregarCliente" hidden>
                            <a href="#" class="btn-guardar" onclick="agregarCliente()">
                                <i class="fa fa-floppy-disk"></i>
                                Guardar
                            </a>

                            <a href="Clientes.php" class="btn-cancelar">
                                <i class="fa fa-xmark"></i>
                                Cancelar
                            </a>

                        </div>

                    </div>
                
<?php } ?>

                    <!-- RIGHT -->

                    <div class="right-side">

                        <div class="users-box">

                            <div class="users-header">

                                <i class="fa fa-user"></i>
                                CLIENTES REGISTRADOS

                            </div>

                            <!-- BUSCADOR -->

                            <div class="search-box">

                                <input type="text"
                                id="buscador"
                                placeholder="🔎 Buscar cliente...">

                            </div>

                            <div class="table-container">

                                <table>

                                    <thead>

                                        <tr>

                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>
                                            <th>Observaciones</th>
                                            <th>Acciones</th>
                                        </tr>

                                    </thead>

                                    <tbody id="tablaPedidos">
                                        <?php 
                                            $select=mysqli_query($conexion,"SELECT id_cliente,nombre, telefono, direccion, observacion FROM clientes ORDER BY id_cliente DESC");
                                            while($r=mysqli_fetch_array($select)){
                                                $idCliente=$r['id_cliente'];
                                                $nombreCliente=$r['nombre'];
                                                $telefonoCliente=$r['telefono'];
                                                $direccionCliente=$r['direccion'];
                                                $observacionesCliente=$r['observacion']; ?>

                                        <tr>
                                            <td><?php echo $idCliente; ?></td>
                                            <td><?php echo $nombreCliente; ?></td>
                                            <td><?php echo $telefonoCliente; ?></td>
                                            <td><?php echo $direccionCliente; ?></td>
                                            <td><?php echo $observacionesCliente; ?></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <form method="POST" action="Clientes.php">
                                                        <button type="submit" name="id_cliente" value="<?php echo $r['id_cliente']; ?>" class="btn-select"><i class="fa fa-pen"></i></button>
                                                    </form>
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
    function agregarCliente(){

    var agregar = confirm('De verdad desea agregar este cliente');

    if(agregar){

        var nombre = document.getElementById('nombre').value;
        var telefono = document.getElementById('telefono').value;
        var direccion = document.getElementById('direccion').value;
        var observacion = document.getElementById('observacion').value;

        $.ajax({
            url: 'ABMClientes.php',
            type: 'POST',
            data: {
                nombre: nombre,
                telefono: telefono,
                direccion: direccion,
                observacion: observacion,
                agregar: 'agregarCliente'
            },

            success:function(response){

                window.location.href='Clientes.php?estado=3';

            },

            error:function(jqXHR){

                console.log(jqXHR.statusText);

            }
        });

    }

}

    function editarCliente(id_cliente){
        var editar = confirm('De verdad desea editar este cliente');
            if ( editar ) {                
                var nombre = document.getElementById('edit_nombre').value;
                var telefono = document.getElementById('edit_telefono').value;
                var direccion = document.getElementById('edit_direccion').value;
                var observacion = document.getElementById('edit_observacion').value;

                $.ajax({
                    url: 'ABMClientes.php',
                    type: 'POST',
                    data: { 
                    id_cliente: id_cliente,
                    nombre: nombre,
                    telefono: telefono,
                    direccion: direccion,
                    observacion: observacion,
                    editar: 'editarCliente'
                                    
                    },
                success:function(response){

                window.location.href='Clientes.php?estado=3';

                },

                error:function(jqXHR){

                console.log(jqXHR.statusText);

                }
                });
            }
    }

     function eliminarCliente(id_cliente){
        var eliminar = confirm('De verdad desea eliminar este cliente');
        var eliminarCliente=document.getElementById('eliminarCliente').value;
            if ( eliminar ) {                
                $.ajax({
                    url: 'ABMClientes.php',
                    type: 'POST',
                    data: { 
                    id_cliente: id_cliente,
                    eliminar: eliminarCliente,
                                    
                    },
                success:function(response){

                window.location.href='Clientes.php?estado=3';

                },

                error:function(jqXHR){

                console.log(jqXHR.statusText);

                }
                });
            }
    }

$("#buscador").on("keyup", function () {

    var valor = $(this).val().toLowerCase();

    $("#tablaPedidos tr").filter(function () {

        $(this).toggle(

            $(this).text().toLowerCase().indexOf(valor) > -1

        );

    });

});

</script>

</body>
</html>