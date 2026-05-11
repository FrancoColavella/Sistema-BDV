<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

require 'conexion.php';

include 'pdf/plantilla.php';

if (isset($_POST['id_pedido']) && !empty($_POST['id_pedido'])) {

    $idpedido = $_POST['id_pedido'];

    $pdf = new PDF();

    $pdf->AddPage();

    $pdf->AliasNbPages();

    $select = mysqli_query($conexion,"
    
        SELECT 
            id_pedido,
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
            
        FROM pedidos
        
        WHERE id_pedido='$idpedido'
    
    ");

    while($r=mysqli_fetch_array($select)){

        $idPedido = $r['id_pedido'];

        $idCliente = $r['id_cliente'];
        $idProducto = $r['id_producto'];
        $idColor = $r['id_color'];
        $idEstado = $r['id_estado'];

        $medidas = $r['medidas'];
        $observacion = $r['observacion'];

        $gastos = $r['gastos_materiales'];
        $ganancias = $r['ganancias_obtener'];

        $precioTotal = $r['total_obtenido'];

        $fechaEntrega = $r['fecha_entrega'];
        $fechaPedido = $r['fecha_pedido'];

        /* =========================
           CLIENTE
        ========================= */

        $selectCliente = mysqli_query($conexion,"
            SELECT nombre 
            FROM clientes 
            WHERE id_cliente='$idCliente'
        ");

        $rCliente = mysqli_fetch_array($selectCliente);

        $nombreCliente = $rCliente['nombre'];

        /* =========================
           PRODUCTO
        ========================= */

        $selectProducto = mysqli_query($conexion,"
            SELECT nombre_producto 
            FROM productos 
            WHERE id_producto='$idProducto'
        ");

        $rProducto = mysqli_fetch_array($selectProducto);

        $nombreProducto = $rProducto['nombre_producto'];

        /* =========================
           COLOR
        ========================= */

        $selectColor = mysqli_query($conexion,"
            SELECT nombre_color 
            FROM colores 
            WHERE id_color='$idColor'
        ");

        $rColor = mysqli_fetch_array($selectColor);

        $nombreColor = $rColor['nombre_color'];

        /* =========================
           ESTADO
        ========================= */

        $selectEstado = mysqli_query($conexion,"
            SELECT nombre_estado 
            FROM estados 
            WHERE id_estado='$idEstado'
        ");

        $rEstado = mysqli_fetch_array($selectEstado);

        $nombreEstado = $rEstado['nombre_estado'];

        $filename = 'FacturaVenta_n_'.$idPedido;

    }

    $fechapedido = date('d/m/Y', strtotime($fechaPedido));

    $fechaentrega = date('d/m/Y', strtotime($fechaEntrega));

}

/* =========================================================
   TITULO
========================================================= */

$pdf->Ln(10);

$pdf->SetTextColor(16,183,156);

$pdf->SetFont('Arial','B',24);

$pdf->Cell(190,10,'BDV Muebles',0,1,'C');

$pdf->Ln(2);

$pdf->SetTextColor(120,120,120);

$pdf->SetFont('Arial','',11);

$pdf->Cell(190,6,'Comprobante de Pedido',0,1,'C');

$pdf->Ln(10);

/* =========================================================
   DATOS DEL PEDIDO
========================================================= */

$pdf->SetFillColor(16,183,156);

$pdf->SetTextColor(255,255,255);

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'DATOS DEL PEDIDO',0,1,'C',true);

$pdf->Ln(5);

$pdf->SetTextColor(0,0,0);

/* FILA 1 */

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Cliente:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(60,8,utf8_decode($nombreCliente),0,0);

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Nro Pedido:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(50,8,$idPedido,0,1);

/* FILA 2 */

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Producto:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(60,8,utf8_decode($nombreProducto),0,0);

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Color:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(50,8,utf8_decode($nombreColor),0,1);

/* FILA 3 */

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Estado:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(60,8,utf8_decode($nombreEstado),0,0);

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Fecha Pedido:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(50,8,$fechapedido,0,1);

/* FILA 4 */

$pdf->SetFont('Arial','B',11);

$pdf->Cell(40,8,'Fecha Entrega:',0,0);

$pdf->SetFont('Arial','',11);

$pdf->Cell(60,8,$fechaentrega,0,1);

$pdf->Ln(6);

/* =========================================================
   MEDIDAS
========================================================= */

$pdf->SetFillColor(240,240,240);

$pdf->SetFont('Arial','B',11);

$pdf->Cell(190,8,'MEDIDAS',0,1,'L',true);

$pdf->SetFont('Arial','',10);

$pdf->MultiCell(190,8,utf8_decode($medidas));

$pdf->Ln(4);

/* =========================================================
   OBSERVACIONES
========================================================= */

$pdf->SetFont('Arial','B',11);

$pdf->SetFillColor(240,240,240);

$pdf->Cell(190,8,'OBSERVACIONES',0,1,'L',true);

$pdf->SetFont('Arial','',10);

$pdf->MultiCell(190,8,utf8_decode($observacion));

$pdf->Ln(10);

/* =========================================================
   TOTAL DEL PEDIDO
========================================================= */

$pdf->SetFillColor(16,183,156);

$pdf->SetTextColor(255,255,255);

$pdf->SetFont('Arial','B',13);

$pdf->Cell(190,10,'TOTAL DEL PEDIDO',0,1,'C',true);

$pdf->Ln(8);

$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',24);

$pdf->Cell(
    190,
    18,
    '$ '.number_format($precioTotal,2,",","."),
    1,
    1,
    'C'
);

$pdf->Ln(20);

/* =========================================================
   FIRMA
========================================================= */

$pdf->SetFont('Arial','',11);

$pdf->Cell(120,8,'',0,0);

$pdf->Cell(60,8,'____________________',0,1,'C');

$pdf->Cell(120,8,'',0,0);

$pdf->Cell(60,8,'BDV Muebles',0,1,'C');

/* =========================================================
   OUTPUT
========================================================= */

$pdf->Output('I',$filename.'.pdf');

?>