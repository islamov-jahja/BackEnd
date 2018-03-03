<?php
require_once 'c:\dev\nginx\projects\local\include\common.inc.php';
if (array_key_exists('str', $_GET)) {
    $str = $_GET["str"];
    echo last($str);
} else
    header("HTTP/1.0 400 Not Found");