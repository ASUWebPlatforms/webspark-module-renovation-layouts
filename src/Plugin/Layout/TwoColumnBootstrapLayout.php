<?php

namespace Drupal\webspark_module_renovation_layouts\Plugin\Layout;


/**
 * Configurable two column layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class TwoColumnBootstrapLayout extends MultiWidthLayoutBootstrapBase {

  /**
   * {@inheritdoc}
   */
  protected function getWidthOptions() {
    return [
      '6-6'=> '6/6 (50%/50%)',
      '3-9'=> '3/9 (25%/75%)',
      '4-8'=> '4/8 (33%/66%)',
      '9-3'=> '9/3 (75%/25%)',
      '8-4'=> '8/4 (66%/33%)',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultWidth() {
    return '6-6';
  }

}
