<?php

echo "> This script will generate a folder in the current directory where you can find every config file to use to make this thing works with nginx \n";
echo "\n";

$appBasePath = __DIR__;

$path = $appBasePath . '/tmp/generated_nginx_conf';
if (!file_exists($path)) {
  mkdir($path, 0777, true);
}

require('./load_config.php');

$template = file_get_contents('./nginx.conf.template');
$phpSocket = $argv[1] ?? '/var/run/php/php8.0-fpm.sock';

foreach ($config['modules'] as $moduleName => $moduleConfig) {
  $domains = array_merge([$moduleName], $moduleConfig['alias'] ?? []);
  $domains = array_map(fn ($d) => $d . '.' . $config['domain'], $domains);
  $serverName = implode(' ', $domains);

  $nginxConfPath = './modules/' . $moduleName . '/nginx_' . $moduleName . '.conf';
  $customConfig = '';
  if (file_exists($nginxConfPath)) {
    $customConfig = file_get_contents($nginxConfPath);
    $customConfig = str_replace('{{ROOT_PATH}}', $appBasePath, $customConfig);
  }

  $nginxConfig = $template;
  $nginxConfig = str_replace('{{ROOT_PATH}}', $appBasePath, $nginxConfig);
  $nginxConfig = str_replace('{{SERVER_NAME}}', $serverName, $nginxConfig);
  $nginxConfig = str_replace('{{PHP_SOCKET}}', $phpSocket, $nginxConfig);
  $nginxConfig = str_replace('{{CUSTOM_CONFIG}}', $customConfig, $nginxConfig);

  file_put_contents($path . '/' . $domains[0], $nginxConfig);
  echo "> Wrote " . strlen($nginxConfig) . " bytes in " . $path . '/' . $domains[0] . "\n";
}
echo "\n";
echo "> Done.\n";
