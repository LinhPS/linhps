<?php
$message = date('Y/m/d H:i:s') . PHP_EOL;
file_put_contents('visit_log.txt', $message, FILE_APPEND | LOCK_EX);
