<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BDV Muebles - Agregar Colores</title>

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
    if (isset($_POST['id_color'])) {
            $id_color=$_POST['id_color'];
            $consulta="SELECT * FROM colores WHERE id_color='$id_color'";
                $resultado=mysqli_query($conexion,$consulta);
                $color=mysqli_fetch_array($resultado);

                if (isset($_GET['estado'])&& $_GET['estado']==3) {
                        echo "<div class='alert alert-success'>Color Agregado correctamente!!</div>";
                    }
                    if (isset($_GET['estado'])&& $_GET['estado']==2) {
                        echo "<div class='alert alert-success'>Color Eliminado correctamente!!</div>";
                    }
                    if (isset($_GET['estado'])&& $_GET['estado']==1) {
                        echo "<div class='alert alert-warning'>Color Editado correctamente!!</div>";
                    }
            
?>
 
                     

    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Editar Color</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">

                    <i class="fa fa-palette"></i>
                    EDITAR COLOR

                </div>

                <div class="form-body">

                    <!-- LEFT -->

                    <div class="left-side">

                        <div class="form-group">

                            <label>Nombre</label>

                            <input type="text" id="edit_nombre" value="<?php echo $color['nombre_color']; ?>">

                        </div>

                        <!-- BOTONES -->

                        <div class="buttons">
                            <input type="text" name="editarColor" id="editarColor" value="editarColor" hidden>
                            <a href="#" class="btn-editar" onclick="editarColor(<?php echo $color['id_color']?>)">
                                <i class="fa fa-floppy-disk"></i>
                                Editar
                            </a>

                            <input type="text" name="eliminarColor" id="eliminarColor" value="eliminarColor" hidden>
                            <a href="#" class="btn-eliminar" onclick="eliminarColor(<?php echo $color['id_color']?>)">
                                <i class="fa fa-xmark"></i>
                                Eliminar
                            </a>

                        </div>

                    </div>
<?php }else{ ?>
                
    <div class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>Agregar Color</h2>

            <div class="user">
                <i class="fa fa-user"></i>
                Administrador
            </div>

        </div>

        <!-- CONTENT -->

        <div class="content">

            <div class="form-box">

                <div class="form-header">

                    <i class="fa fa-palette"></i>
                    AGREGAR COLOR

                </div>

                <div class="form-body">

                    <!-- LEFT -->

                    <div class="left-side">

                        <div class="form-group">

                            <label>Nombre</label>

                            <input type="text" name="nombre" id="nombre"
                            placeholder="Nombre del color">

                        </div>

                        <!-- BOTONES -->

                        <div class="buttons">

                            <input type="text" name="agregarColor" id="agregarColor" value="agregarColor" hidden>
                            <a href="#" class="btn-guardar" onclick="agregarColor()">
                                <i class="fa fa-floppy-disk"></i>
                                Guardar
                            </a>

                            <a href="Colores.php" class="btn-cancelar">
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

                                <i class="fa fa-palette"></i>
                                COLORES REGISTRADOS

                            </div>

                            <!-- BUSCADOR -->

                            <div class="search-box">

                                <input type="text"
                                id="buscador"
                                placeholder="🔎 Buscar color...">

                            </div>

                            <div class="table-container">

                                <table>

                                    <thead>

                                        <tr>

                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>

                                    </thead>

                                    <tbody id="tablaPedidos">
                                        <?php 
                                            $select=mysqli_query($conexion,"SELECT id_color,nombre_color FROM colores ORDER BY id_color DESC");
                                            while($r=mysqli_fetch_array($select)){
                                                $idColor=$r['id_color'];
                                                $nombreColor=$r['nombre_color']; ?>

                                        <tr>
                                            <td><?php echo $idColor; ?></td>
                                            <td><?php echo $nombreColor; ?></td>
                                            <td>
                                                <div class="action-buttons">
                                                    <form method="POST" action="Colores.php">
                                                        <button type="submit" name="id_color" value="<?php echo $r['id_color']; ?>" class="btn-select"><i class="fa fa-pen"></i></button>
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
    function agregarColor(){

    var agregar = confirm('De verdad desea agregar este color');

    if(agregar){

        var nombre = document.getElementById('nombre').value;

        $.ajax({
            url: 'ABMColores.php',
            type: 'POST',
            data: {
                nombre: nombre,
                agregar: 'agregarColor'
            },

            success:function(response){

                window.location.href='Colores.php?estado=3';

            },

            error:function(jqXHR){

                console.log(jqXHR.statusText);

            }
        });

    }

}

    function editarColor(id_color){
        var editar = confirm('De verdad desea editar este color');
            if ( editar ) {                
                var nombre = document.getElementById('edit_nombre').value;

                $.ajax({
                    url: 'ABMColores.php',
                    type: 'POST',
                    data: { 
                    id_color: id_color,
                    nombre: nombre,
                    editar: 'editarColor'
                                    
                    },
                success:function(response){

                window.location.href='Colores.php?estado=3';

                },

                error:function(jqXHR){

                console.log(jqXHR.statusText);

                }
                });
            }
    }

     function eliminarColor(id_color){
        var eliminar = confirm('De verdad desea eliminar este color');
        var eliminarColor=document.getElementById('eliminarColor').value;
            if ( eliminar ) {                
                $.ajax({
                    url: 'ABMColores.php',
                    type: 'POST',
                    data: { 
                    id_color: id_color,
                    eliminar: eliminarColor,
                                    
                    },
                success:function(response){

                window.location.href='Colores.php?estado=3';

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