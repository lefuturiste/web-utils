<?php

$path = __DIR__ . '/../../tmp/quicknotes';

if (!file_exists($path)) {
  mkdir($path);
}
if (!file_exists($path . '/logs.txt')) {
  file_put_contents($path . '/logs.txt', '');
}

$path = realpath($path);

if ($_SERVER['REQUEST_URI'] === '/list') {
  $msgs = explode("\n", file_get_contents($path . '/logs.txt'));
  array_pop($msgs);
  ?>
  <h3>List of messages</h3>
  <ul>
  <?php
  foreach ($msgs as $msg) {
    ?>
    <li><?= $msg ?></li>
    <?php
  }
  ?>
  </ul>
  <?php
  exit();
}

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
