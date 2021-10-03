<?php

return [
  'actions' => [
    [
      'name' => 'List all loggers',
      'path' => '/loggers'
    ],
    [
      'name' => 'Create a logger',
      'path' => '/create'
    ],
    [
      'name' => 'Get details about a logger',
      'path' => '/logger-details?id=YOURID'
    ],
    [
      'name' => 'Delete request history for a logger',
      'path' => '/logger-details?id=YOURID&reset=yes'
    ],
    [
      'name' => 'Delete a logger',
      'path' => '/logger-details?id=YOURID&delete=yes'
    ],
    [
      'name' => 'Execute a logger',
      'path' => '/YOURID'
    ]
  ]
];
