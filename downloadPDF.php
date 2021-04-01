<?php
$html = file_get_contents('http://localhost/doge/php/ProjectFestival/?option=festivalDetail&id='.$_GET['id']);
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output($_GET['id'].".pdf", \Mpdf\Output\Destination::DOWNLOAD);
?>