<?php

namespace Drupal\lmmi\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\toc_api\Plugin\Block\TocBlockBase;
/**
 * Provides a 'TocWrapperBlock' block.
 *
 * @Block(
 *  id = "toc_wrapper_block",
 *  admin_label = @Translation("ToC Wrapper Block"),
 * )
 */
class TocWrapperBlock extends TocBlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    if ($this->getCurrentToc()) {
      return parent::build();
    }

    return [];
  }
  /**
   * @inheritdoc
   */
  protected function getCurrentTocId() {
    return 'toc_filter';
  }
}
