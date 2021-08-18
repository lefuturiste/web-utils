<?php

$supported = hash_algos();

header("Content-Type: text/plain");

$algo = $_GET['algo'] ?? 'sha256';

if (!in_array($algo, $supported)) {
  echo "Invalid hash algorithm";
  exit(); 
}

if (!isset($_GET['data'])) {
  echo "Data query param is required";
  exit();
}

echo $algo . ': ' . hash($algo, $_GET['data']);
