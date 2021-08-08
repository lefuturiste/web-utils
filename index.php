<?php

require('utils.php');
require('load_config.php');

function generateHelp($selectedModule) {
  if (strpos($_SERVER['REQUEST_URI'], '/help') === false) {
    return;
  }
  $additionalHelpPath = './modules/' . $selectedModule . '/' . $selectedModule . '_help.php';
  if (!file_exists($additionalHelpPath)) {
    return;
  }
  $helpConfig = require($additionalHelpPath);

  echo "<h1>Help for module \"$selectedModule\"</h1>";
  echo "  <ul>";
  foreach ($helpConfig['actions'] as $action) {
    ?>
    <li><?= $action['name'] ?> <a href="<?= $action['path'] ?>"><?= $action['path'] ?></a></li>
    <?php
  }
  echo "\n  </ul> \n <br>";

  echo $helpConfig['append']() ?? '';
  exit();
}

$modules = $config['modules'];
$selectedModule = null;

foreach ($modules as $key => $module) {
  if (strpos($_SERVER['HTTP_HOST'], $key . '.') === 0) {
    $selectedModule = $module;
    $selectedModule['key'] = $key;
    break;
  }
}

if ($selectedModule === null) {
  http_response_code(404);
  echo 'unknown module';
}

generateHelp($selectedModule['key']);

if (isset($selectedModule['auth']) && $selectedModule['auth']) {
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
  foreach ($config['auth'] as $username => $password) {
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

require('./modules/' . $selectedModule['key'] . '/' . $selectedModule['key'] . '.php');
