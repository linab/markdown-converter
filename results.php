<?php
/* Return results of markdown conversion */
header('Content-type: application/json');
require_once __DIR__ . '/converter.php';
$convert = new Converter();

if(isset($_POST['markdown'])) {
   $markdown =  $_POST['markdown'];
   echo $convert->parseMarkdown($markdown);
} ?>