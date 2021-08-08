<?php

return [
  'domain' => 'lefuturiste.fr',
  'modules' => [
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
      'auth' => true
    ],
    'logator' => [
      'alias' => ['logme']
    ]
  ],
  'auth' => [
    'root' => 'password'
  ]
];