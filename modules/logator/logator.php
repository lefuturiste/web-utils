<?php

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

header('Content-Type: application/json');

$logAt = __DIR__ . '/../../tmp/requests';

if (!file_exists($logAt)) {
  mkdir($logAt, 0770, true);
}
$logAt = realpath($logAt);

if ($_SERVER['REQUEST_URI'] === '/') {
  echo json_encode([
    'success' => true,
    'message' => 'Welcome to the logator app!'
  ]);
  exit();
}

if ($_SERVER['REQUEST_URI'] === '/loggers') {
  
  echo json_encode([
    'success' => true,
    'data' => getDirsAsArray($logAt)
  ]);
  exit();
}

if (strpos($_SERVER['REQUEST_URI'], '/logger-details') === 0) {
  if (!isset($_GET['id']) || $_GET['id'] === '') {
    echo json_encode([
      'success' => false,
      'message' => 'Bro, I need an ID bro. Why are you doing that to me?'
    ]);
  }
  $id = preg_replace('/[^0-9a-zA-Z]/', '', $_GET['id']);
  $path = $logAt . '/' . $id;
  if (!file_exists($path)) {
    http_response_code(404);
    echo json_encode([
      'success' => false,
      'message' => 'Bruh id did not find'
    ]);
    exit();
  }

  $data = [];
  foreach (getFilesAsArray($path) as $file) {
    $data[] = json_decode(file_get_contents($path . '/' . $file), true);
  }

  echo json_encode([
    'success' => true,
    'data' => $data
  ]);
  exit();
}

if ($_SERVER['REQUEST_URI'] === '/create') {
  $id = generateRandomString(6, ['upper', 'digit']);

  mkdir($logAt . '/' . $id, 0770);

  echo json_encode([
    'success' => true,
    'message' => 'Created a logger with id: ' . $id,
    'id' => $id
  ]);
  exit();
}

$id = parse_url($_SERVER['REQUEST_URI'])['path'];
$id = preg_replace('/[^0-9a-zA-Z]/', '', $id);

if (!file_exists($logAt . '/' . $id)) {
  http_response_code(404);
  echo json_encode([
    'success' => false,
    'message' => "This logger doesn't exist, this incident will be reported (of course not, your dumbass who will think that something so uninteresting as that is worth to log in a file that no one will read anyways. You fools.)"
  ]);
  exit();
}

$resume = resumeRequest();

$requestId = substr(hash('sha256', json_encode($resume)), 0, 16);

$resume['id'] = $requestId; 

$path = $logAt . '/' . $id . '/' . $requestId . '.json';

file_put_contents($path, json_encode($resume));

echo json_encode(['success' => true, 'requestId' => $requestId]);
