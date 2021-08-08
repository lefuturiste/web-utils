<?php

$data = resumeRequest();

header("Content-Type: application/json");

$str = json_encode($data);

echo $str;
