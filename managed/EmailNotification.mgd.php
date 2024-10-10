<?php

use CRM_Emailnotification_ExtensionUtil as E;

return [
  [
    'name' => 'CustomGroup_Email_Notification',
    'entity' => 'CustomGroup',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Email_Notification',
        'title' => E::ts('Email Notification'),
        'table_name' => 'civicrm_value_email_notification',
        'extends' => 'Activity',
        'extends_entity_column_value' => [
          \Civi\Api4\OptionValue::get(FALSE)
            ->addSelect('value')
            ->addWhere('option_group_id:name', '=', 'activity_type')
            ->addWhere('name', '=', 'Automatic Email')
            ->execute()
            ->first()['value']
        ],
        'style' => 'Inline',
        'collapse_display' => TRUE,
        'help_pre' => '',
        'help_post' => '',
        'collapse_adv_display' => TRUE,
        'created_date' => '2024-10-01 11:27:35',
        'is_public' => FALSE,
        'icon' => '',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Email_Notification_CustomField_Message_Template',
    'entity' => 'CustomField',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Email_Notification',
        'name' => 'Message_Template',
        'label' => E::ts('Message Template'),
        'data_type' => 'EntityReference',
        'html_type' => 'Autocomplete-Select',
        'text_length' => 255,
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'message_template',
        'fk_entity' => 'MessageTemplate',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'CustomGroup_Email_Notification_CustomField_Template_Variables',
    'entity' => 'CustomField',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'custom_group_id.name' => 'Email_Notification',
        'name' => 'Template_Variables',
        'label' => E::ts('Template Variables'),
        'data_type' => 'Memo',
        'html_type' => 'TextArea',
        'attributes' => 'rows=4, cols=60',
        'note_columns' => 60,
        'note_rows' => 4,
        'column_name' => 'template_variables',
      ],
      'match' => [
        'name',
      ],
    ],
  ],
];
