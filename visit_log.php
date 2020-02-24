<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    // ip from share internet
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    // ip pass from proxy
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
} else {
    $ip = 'anonymous';
}

$message = date('Y/m/d H:i:s') . ' ' . $ip . PHP_EOL;

file_put_contents('visit_log.txt', $message, FILE_APPEND | LOCK_EX);
