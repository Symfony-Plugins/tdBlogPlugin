<?php

/**
 * PlugintdArticle form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormFilterPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PlugintdArticleFormFilter extends BasetdArticleFormFilter
{
  public function setup()
  {
    parent::setup();

    $this->removeFields();
  }

  protected function removeFields()
  {
    unset( $this['image'] );
  }
}
