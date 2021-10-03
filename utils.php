<?php

function generateRandomString($length = 10, $contains = ['upper', 'lower', 'digit']) {
  $charset = [
     'digit' => '0123456789',
     'lower' => 'abcdefghijklmnopqrstuvwxyz',
     'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
     'special' => '!#$%&()*+,-.:;<=>?@[]',
     'hex' => '0123456789abcdef'
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

function askAuth($authConfig) {
  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']))
  {
    header("WWW-Authenticate: Basic realm=\"You need to provide user and passwd\"");
    http_response_code(401);
    echo "Authentification Required";
    exit();
  }
  $providedUsername = $_SERVER['PHP_AUTH_USER'];
  $providedPassword = $_SERVER['PHP_AUTH_PW'];
  $found = false;
  foreach ($authConfig as $username => $password) {
    if ($username === $providedUsername && $password == $providedPassword) {
      $found = true;
    }
  }
  if (!$found) {
    header("WWW-Authenticate: Basic realm=\"Invalid auth\"");
    http_response_code(401);
    echo "Invalid authentification, try again";
    exit();
  }
}
