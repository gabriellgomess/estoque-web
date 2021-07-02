<?php

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require "../dompdf/dompdf/autoload.inc.php";

ob_start();
include_once("pdf_estoque_zaffari.php");

$html = ob_get_contents();
ob_end_clean();
//Criando a Instancia
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream("Estoque Zaffari.pdf");
  header('Content-type: application/pdf; charset=utf-8');
  echo $pdf;

?>