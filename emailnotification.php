<?php

require_once 'emailnotification.civix.php';

use CRM_Emailnotification_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function emailnotification_civicrm_config(&$config): void {
  _emailnotification_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function emailnotification_civicrm_install(): void {
  _emailnotification_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function emailnotification_civicrm_enable(): void {
  _emailnotification_civix_civicrm_enable();
}
