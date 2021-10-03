<?php

return [
  'title' => 'Base Converter',
  'description' => 'Convert from base to base easily',
  'actions' => [
    [
      'name' => 'Convert from base64 to string',
      'path' => '/?from=base64&data=dGhhdCdzIGNvb2wgaHVoPwo='
    ],
    [
      'name' => 'Convert decimal to hex',
      'path' => '/?from=hex&data=2a'
    ],
    [
      'name' => 'Convert string to decimal',
      'path' => '/?to=dec&data=hello'
    ]
  ]
];
