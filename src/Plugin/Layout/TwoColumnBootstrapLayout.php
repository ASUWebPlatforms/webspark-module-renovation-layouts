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
      'wide-l' => 'Wide left',
      'wide-r' => 'Wide right',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultWidth() {
    return 'wide-l';
  }

}
