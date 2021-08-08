<?php

$config = require('./config.php');

// a basic validation of config keys
if (!(isset($config['domain']) && strlen($config['domain']) > 0)) {
  die('Domain key not present in config');
}
if (!(isset($config['modules']) && count($config['modules']) > 0)) {
  die('Modules key not present in config or no modules configured');
}
if (!(isset($config['auth']) && count($config['auth']) > 0)) {
  die('Auth key not present in config or no auth configured');
}
