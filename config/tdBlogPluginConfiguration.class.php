<?php
/**
 * tdBlogPluginConfiguration.class
 */

/**
 * tdBlogPluginConfiguration
 *
 * @package   tdBlogPlugin
 * @author    Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class tdBlogPluginConfiguration extends sfPluginConfiguration
{
  /**
   * Initialize
   */
  public function initialize()
  {
    // blog recent articles count
    sfConfig::set('td_blog_recent_articles_count', 3);

    // article images upload dir
    sfConfig::set('td_blog_upload_dir', sfConfig::get('sf_upload_dir').'/td/blog');
  }
}