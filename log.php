<?php
$data = $_SERVER['REMOTE_ADDR'] . ' ' . date('Y-m-d H:i:s') . "\n";
file_put_contents('log.txt', $data, FILE_APPEND);
?>