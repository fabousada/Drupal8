<?php
/**
 * @file
 * Contains \Drupal\custom_block_fb\Plugin\Block\FbCustomBlock
 */
 namespace Drupal\custom_block_fb\Plugin\Block;
 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Session\AccountInterface;
 use Drupal\Core\Access\AccessResult;
 
 /**
 * Provides a 'RSVP' List Block
 *
 * @Block(
 *   id = "fb_custom_block",
 *   admin_label = @Translation("FB Block"),
 *   category = @Translation("custom")
 * )
 */
class FbCustomBlock extends BlockBase {
	  
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array('#markup'=>$this->t('my custom FB block in list block'));
    }
}
