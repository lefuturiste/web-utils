<?php

$path = __DIR__ . '/../../tmp/quicknotes';

if (!file_exists($path)) {
  mkdir($path);
}

$path = realpath($path);

$message = '';

if (isset($_GET['m'])) {
  $message = $_GET['m'];
}

if (isset($_GET['message'])) {
  $message = $_GET['message'];
}

if (strlen($message) === 0) {
  exit();
}

$data =  '[' . date('Y-m-d H:i:s') . ']';
$data .= ' - ' . $message;
$data .= "\n";

file_put_contents($path . '/logs.txt', $data, FILE_APPEND);

echo 'OK';
