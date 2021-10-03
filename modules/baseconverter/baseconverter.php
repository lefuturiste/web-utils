<?php

header("Content-Type: text/plain");

if (!isset($_GET['data'])) {
  echo "ERR: Data query param is required";
  http_response_code(400);
  exit();
}

$from = $_GET['from'] ?? 'string';
$to = $_GET['to'] ?? 'string';
$input = $_GET['data'];
$inter = $input;

if ($from === 'string' && $to === 'string') {
  $to = 'base64';
}

switch ($from) {
  case 'base64':
    $inter = base64_decode($input);
    break;
  case 'hex':
    $inter = hexdec($input);
    break;
  case 'hex_str':
    $inter = pack('H*', $input);
    break;
  case 'bin':
    $inter = bindec($input);
    break;
  case 'bin_str':
    $inter = pack('H*', base_convert($input, 2, 16));
    break;
  case 'octal':
    $inter = octdec($input);
    break;
}

if (preg_match('/^base[0-9]+$/m', $from) && $inter === $input) {
  $fromBase = (int) str_replace('base', '', $from);
  if ($toBase > 36) {
    echo "ERR: Can't convert from base strictly superior to 36";
    http_response_code(400);
    exit();
  }
  $inter = base_convert($input, $fromBase, 10);
}

$output = $inter;
switch ($to) {
  case 'base64':
    $output = base64_encode($inter);
    break;
  case 'dec':
    $value = unpack('H*', $inter);
    $output = base_convert($value[1], 16, 10);
    break;
  case 'bin':
    if (is_numeric($inter)) {
      $output = decbin($inter);
    } else {
      $value = unpack('H*', $inter);
      $output = base_convert($value[1], 16, 2);
    }
    break;
  case 'hex':
    if (is_numeric($inter)) {
      $output = dechex($inter);
    } else {
      $output = unpack('H*', $inter)[1];
    }
    break;
  case 'octal':
    if (is_numeric($inter)) {
      $output = decoct($inter);
    } else {
      $value = unpack('H*', $inter);
      $output = base_convert($value[1], 16, 8);
    }
    break;
}

if (preg_match('/^base[0-9]+$/m', $to) && $output === $inter) {
  $toBase = (int) str_replace('base', '', $to);
  if ($toBase > 36) {
    echo "ERR: Can't convert to base strictly superior to 36";
    http_response_code(400);
    exit();
  }
  $output = base_convert($input, 10, $toBase);
}

echo $output;
