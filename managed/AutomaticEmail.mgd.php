<?php

use CRM_Emailnotification_ExtensionUtil as E;

return [
  [
    'name' => 'OptionValue_Automatic_Email',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'activity_type',
        'label' => E::ts('Automatic Email'),
        'name' => 'Automatic Email',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
