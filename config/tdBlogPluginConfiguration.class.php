<?php
/**
 * tdBlogPluginConfiguration.class
 */

/**
 * tdBlogPluginConfiguration
 *
 * @package   tdGuestbookPlugin
 * @author    Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class tdBlogPluginConfiguration extends sfPluginConfiguration
{
  /**
   * Initialize
   */
  public function initialize()
  {
    // blog short text sign count
    sfConfig::set('td_blog_short_text_sign_count', 300);

    // article images upload dir
    sfConfig::set('td_blog_image_dir', sfConfig::get('sf_upload_dir').'/articles');
  }
}