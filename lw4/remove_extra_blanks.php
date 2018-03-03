<?php
require_once 'c:\dev\nginx\projects\local\include\common.inc.php';
if (array_key_exists('text', $_GET)) {
    $str = $_GET["text"];
    echo removeExtraBlanks($str);
} else
    header("HTTP/1.0 400 Not Found");