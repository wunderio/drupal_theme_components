<?php


/**
 * Modify the Panels default output to remove the panel separator.
 */
function nameless_panels_default_style_render_region($variables) {
  $output = '';
  $output .= implode($variables['panes']);
  return $output;
}
