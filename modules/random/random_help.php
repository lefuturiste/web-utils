<?php

return [
  'actions' => [
    [
      'name' => 'Generate alphanumerics',
      'path' => '/?contains=digit,lower,upper'
    ],
    [
      'name' => 'More complex',
      'path' => '/?contains=digit,lower,upper,special'
    ],
    [
      'name' => 'Change length',
      'path' => '/?length=20'
    ],
    [
      'name' => 'Only hex',
      'path' => '/?length=16&contains=hex'
    ]
  ],
  'append' => function () {
    ?>
    Of course, you can combine many parameters into one query.
    <?php
  }
];
