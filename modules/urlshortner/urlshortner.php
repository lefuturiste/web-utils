<?php

$path = __DIR__ . '/../../tmp/urlshortner';

function saveUrls($urlsToStore) {
  global $path;
  $data = json_encode([
    'updated_at' => date('Y-m-d H:i:s'),
    'urls' => $urlsToStore
  ]);
  file_put_contents($path . '/urls.json', $data);
}

if (!file_exists($path)) {
  mkdir($path);
}

if (!file_exists($path . '/urls.json') || file_get_contents($path . '/urls.json') === '') {
  file_put_contents($path . '/urls.json', '{"urls": []}');
}

$urls = json_decode(file_get_contents($path . '/urls.json'), true)['urls'];

if (strpos($_SERVER['REQUEST_URI'], '/admin') === 0) {
  // admin panel
  askAuth($config['auth']);

  if (strpos($_SERVER['REQUEST_URI'], '/create') !== false) {
    $url = [
      'slug' => $_GET['slug'] ?? $_GET['name'] ?? '',
      'target' => $_GET['target'] ?? '',
      'created_at' => date('Y-m-d H:i:s')
    ];
    if (empty($url['slug']) || empty($url['target'])) {
      echo "Invalid values slug or target";
      http_response_code(400);
      exit();
    }
    $urls[] = $url;

    echo "Url was created";
    saveUrls($urls);
    if (isset($_GET['redirect'])) {
      header('Location: ' . $_GET['redirect']);
      http_response_code(302);
    }
    exit();
  }
  if (strpos($_SERVER['REQUEST_URI'], '/delete') !== false) {
    if (!isset($_GET['slug']) || empty($_GET['slug'])) {
      echo "Slug param missing";
      http_response_code(400);
      exit();
    }
    $urls = array_filter([], fn ($u) => $u['slug'] !== $_GET['slug']);
    echo "The urls with this slug were deleted";

    saveUrls($urls);
    if (isset($_GET['redirect'])) {
      header('Location: ' . $_GET['redirect']);
    }
    exit();
  }
  ?>
  <h1>Url list</h1>
  <b>Add a URL</b>
  <form method="get" action="/admin/create">
    <label for="slug">Slug</label>
    <input type="text" name="slug" id="slug" />
    
    <br>
    <label for="target">Target (link)</label>
    <input type="url" name="target" id="target" style="min-width: 80%" />

    <input type="hidden" name="redirect" value="/admin" />
    <br>
    <button>Create Shortcut</button>
  </form>
  <hr>
  <div>
  <?php
  foreach ($urls as $url) {
   ?>
   <div 
    style="
      max-width: 900px;
      display: flex;
      justify-content: space-between;
      border: 1px solid gray;
      margin-bottom: .4em
    ">
      <div>
        /<?= $url['slug'] ?> : <a href="<?= $url['target'] ?>"><?= $url['target'] ?></a>
      </div>
      <a href="/admin/delete?slug=<?= $url['slug'] ?>&redirect=/admin">Delete</a>
    </div>
   <?php
  }
  ?>
  </div>
  <?php
  exit();
}

foreach ($urls as $url) {
  if (strpos($_SERVER['REQUEST_URI'], '/' . $url['slug']) === 0) {
    header('Location: ' . $url['target']);
    http_response_code(302);
    echo "You've been redirected";
    exit();
  }
}

http_response_code(404);
echo 'ERR: Unknown url';
