<?php

$format = $_GET['format'] ?? 'full';

date_default_timezone_set($_GET['timezone'] ?? 'UTC');

echo date(match ($format) {
	'full' => 'Y-m-d H:i:s',
	'unix' => 'U'
});
