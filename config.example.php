<?php

return [
  'domain' => 'lefuturiste.fr',
  'modules' => [
    'modules' => [
      'alias' => ['web-utils', 'utils', 'help-utils', 'help-modules', 'modules-list']
    ],
    'random' => [],
    'date' => [
      'alias' => ['printdate']
    ],
    'httpbin' => [],
    'printip' => [
      'alias' => ['ip', 'getip']
    ],
    'quicknote' => [
      'auth' => true
    ],
    'quickupload' => [
      'auth' => true,
      'alias' => ['share']
    ],
    'logator' => [
      'alias' => ['logme']
    ],
    'hash' => [],
    'baseconverter' => [
      'alias' => ['encode', 'decode']
    ],
    'uuid' => [],
    'urlshortner' => [
      'alias' => ['u', 'url']
    ]
  ],
  'auth' => [
    'root' => 'password'
  ],
  'special_token' => 'password'
];