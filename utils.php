<?php

function generateRandomString($length = 10, $contains = ['upper', 'lower', 'digit']) {
  $charset = [
     'digit' => '0123456789',
     'lower' => 'abcdefghijklmnopqrstuvwxyz',
     'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
     'special' => '!#$%&()*+,-.:;<=>?@[]'
  ];
  $characters = '';
  foreach ($contains as $c) {
      $characters .= $charset[$c] ?? '';
  }
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function resumeRequest() {
  return [
    'protocol'=> $_SERVER['SERVER_PROTOCOL'],
    'method' => $_SERVER['REQUEST_METHOD'],
    'query' => $_GET,
    'post' => $_POST,
    'body' => file_get_contents('php://input'),
    'headers' => getallheaders(),
    'query_string' => $_SERVER['QUERY_STRING'] ?? '',
    'request_uri' => $_SERVER['REQUEST_URI'],
    'remote_address' => $_SERVER['REMOTE_ADDR'],
    'remote_port' => (int) $_SERVER['REMOTE_PORT'],
    'at' => date('Y-m-d H:i:s'),
    'at_unix' => (int) date('U'),
    'at_unix_micro' => microtime()
  ];
}

function getFilesAsArray($path) {
  $dirs = array_filter(glob($path . '/*'), 'is_file');
  $dirs = array_map(function ($dirName) {
    $compo = explode('/', $dirName);
    return $compo[count($compo)-1];
  }, $dirs);
  return array_values($dirs);
}

function getDirsAsArray($path) {
  $dirs = array_filter(glob($path . '/*'), 'is_dir');
  $dirs = array_map(function ($dirName) {
    $compo = explode('/', $dirName);
    return $compo[count($compo)-1];
  }, $dirs);
  return array_values($dirs);
}

function deleteAllFiles($path) {
  $count = 0;
  foreach (getFilesAsArray($path) as $file) {
    unlink($path . '/' . $file);
    $count++;
  }
  return $count;
}
