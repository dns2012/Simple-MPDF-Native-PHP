<?php

// INCLUDE MPDF AUTOLOAD INSIDE VENDOR DIR
require_once('./vendor/autoload.php');

$view = file_get_contents('view.php');

$mpdf = new \Mpdf\Mpdf([
  'tempDir' => './vendor/temp',
  'orientation' => 'P',
  'format' => 'A4',
  'margin_top' => 10,
  'margin_bottom' => 0
]);
$mpdf->WriteHTML($view);
$mpdf->Output();

?>
