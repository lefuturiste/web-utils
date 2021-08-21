<?php

$len = $_GET['length'] ?? 32;

$contains = isset($_GET['contains']) ? explode(',', $_GET['contains']) : ['hex', 'digit', 'upper', 'lower', 'special'];

header('Content-Type: text/plain');

echo generateRandomString($len, $contains);
