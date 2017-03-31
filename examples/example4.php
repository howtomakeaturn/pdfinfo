<?php
require_once('../vendor/autoload.php');

use \Howtomakeaturn\PDFInfo\PDFInfo;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$pdf = new PDFInfo('files/cool.pdf');

echo $pdf->title;
echo '<hr />';
echo $pdf->author;
echo '<hr />';
echo $pdf->creator;
echo '<hr />';
echo $pdf->producer;
echo '<hr />';
echo $pdf->creationDate;
echo '<hr />';
echo $pdf->modDate;
echo '<hr />';
echo $pdf->tagged;
echo '<hr />';
echo $pdf->form;
echo '<hr />';
echo $pdf->pages;
echo '<hr />';
echo $pdf->encrypted;
echo '<hr />';
echo $pdf->pageSize;
echo '<hr />';
echo $pdf->fileSize;
echo '<hr />';
echo $pdf->optimized;
echo '<hr />';
echo $pdf->PDFVersion;
echo '<hr />';
echo $pdf->pageRot;
echo '<hr />';
