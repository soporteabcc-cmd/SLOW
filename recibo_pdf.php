<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Configuración Dompdf
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

// Conexión MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "colegio";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$sql = "SELECT * FROM recibos WHERE id = $id LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $recibo = $result->fetch_assoc();
} else {
    die("Recibo no encontrado");
}

// HTML del recibo
$html = '
<style>
    body { font-family: Arial, sans-serif; }
    .recibo { border: 2px solid #000; padding: 20px; width: 100%; }
    h2 { text-align: center; }
    table { width: 100%; border-collapse: collapse; margin-top: 10px; }
    td { padding: 5px; vertical-align: top; }
    .bold { font-weight: bold; }
    .footer { font-size: 12px; margin-top: 20px; text-align: justify; }
</style>

<div class="recibo">
    <h2>RECIBO DE PAGO</h2>
    <table>
        <tr><td class="bold">Fecha:</td><td>'.$recibo["fecha"].'</td></tr>
        <tr><td class="bold">Concepto:</td><td>'.$recibo["concepto"].'</td></tr>
        <tr><td class="bold">Miembro:</td><td>'.$recibo["miembro"].'</td></tr>
        <tr><td class="bold">Folio:</td><td>'.$recibo["folio"].'</td></tr>
        <tr><td class="bold">Nombre:</td><td>'.$recibo["nombre"].'</td></tr>
        <tr><td class="bold">Dirección:</td><td>'.$recibo["direccion"].'</td></tr>
        <tr><td class="bold">Fecha de inicio:</td><td>'.$recibo["fecha_inicio"].' ('.$recibo["nivel"].' - '.$recibo["ciclo"].' - '.$recibo["hora"].' - '.$recibo["mes"].')</td></tr>
        <tr><td class="bold">Total Pagado:</td><td>$ '.number_format($recibo["total_pagado"], 2).'</td></tr>
        <tr><td class="bold">Importe con letra:</td><td>'.$recibo["importe_letra"].'</td></tr>
        <tr><td class="bold">Forma de pago:</td><td>'.$recibo["forma_pago"].'</td></tr>
    </table>

    <div class="footer">
        <p><b>Nota:</b> La cuota correspondiente a la mensualidad no será devuelta salvo lo dispuesto en el reglamento.<br>
        El costo de inscripción/reinscripción no es reembolsable una vez iniciadas las clases.<br>
        Para aclaraciones favor de acudir a la Administración del colegio.</p>
    </div>
</div>
';

// Renderizar PDF
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Descargar PDF
$dompdf->stream("recibo_".$recibo["folio"].".pdf", ["Attachment" => true]);
