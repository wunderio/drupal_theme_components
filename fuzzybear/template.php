<?php
/**
 * @file
 * Fuzzybear - Example component
 *
 * This file includes all hooks and functions related to the Fuzzybear compontent
 *
 */

/**
 * Implements hook_username_alter.
 *
 * Fuzzybear needs some friends. This hook will ensure that every user will become a fuzzy bear.
 */
function fuzzybear_username_alter(&$name, $account) {
  $name = 'Fuzzy ' .  $name . ' bear';
}
