<?php
require_once('../vendor/autoload.php');

use \Howtomakeaturn\PDFInfo\PDFInfo;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$pdf = new PDFInfo('files/DDD.pdf');

echo $pdf->pages;
