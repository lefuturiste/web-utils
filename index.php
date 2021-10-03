<?php

require('utils.php');
require('load_config.php');

/* Disable function */
if (file_exists('./DISABLE')) {
  header('X-Disabled: Yes');
  http_response_code(503);
  ?>
  <p>503</p>
  <iframe
    width="560" height="315" frameborder="0"
    src="https://www.youtube-nocookie.com/embed/D1rlGA_UGrY?autoplay=1&controls=0"
    allow="autoplay;encrypted-media;picture-in-picture" allowfullscreen>
  </iframe>
  <?php
  exit();
}
if ($_SERVER['REQUEST_URI'] === '/special-disable?token=' . $config['special_token']) {
  file_put_contents('./DISABLE', '1');
  echo "Disabled successfully";
  exit();
}

function generateHelp($selectedModule) {
  if (strpos($_SERVER['REQUEST_URI'], '/help') === false) {
    return;
  }
  $additionalHelpPath = './modules/' . $selectedModule . '/' . $selectedModule . '_help.php';
  if (!file_exists($additionalHelpPath)) {
    return;
  }
  $helpConfig = require($additionalHelpPath);

  $moduleTitle = $helpConfig['title'] ?? $selectedModule;
  echo "<h1>Help for module \"$moduleTitle\"</h1>";
  if (isset($helpConfig['description'])) {
    echo "<h3>" . $helpConfig['description'] . "</h3>";
  }
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

foreach ($modules as $moduleName => $module) {
  foreach (array_merge([$moduleName], $module['alias'] ?? []) as $alias) {
    if (strpos($_SERVER['HTTP_HOST'], $alias . '.') === 0) {
      $selectedModule = $module;
      $selectedModule['key'] = $moduleName;
      break;
    }
  }
}

if ($selectedModule === null) {
  http_response_code(404);
  echo 'unknown module';
}

generateHelp($selectedModule['key']);

if (isset($selectedModule['auth']) && $selectedModule['auth']) {
  askAuth($config['auth']);
}

require('./modules/' . $selectedModule['key'] . '/' . $selectedModule['key'] . '.php');
