<?php

/**
 * PlugintdArticle form.
 *
 * @package    tdBlogPlugin
 * @subpackage form
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PlugintdArticleForm extends BasetdArticleForm
{
  public function setup()
  {
    parent::setup();

    $this->removeFields();

    $this->manageWidgets();

    $this->manageValidators();
  }

  protected function removeFields()
  {
    unset($this['created_at'], $this['updated_at']);
  }

  protected function manageWidgets()
  {
    $this->setWidget('image', new sfWidgetFormInputFileEditable(array(
      'with_delete' => false,
      'delete_label' => 'usuń miniaturkę',
      'label'     => 'Miniaturka artykułu',
      'file_src'  => '/uploads/td/blog/'.$this->getObject()->getImage(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '%file%<br />%input%<br />%delete% %delete_label%',
    )));
  }

  protected function manageValidators()
  {
    $this->setValidator('title',
      new sfValidatorString(array(), array('required' => 'Musisz podać tytuł artykułu.')));

    $this->setValidator('image', new sfValidatorFile(array(
      'required'   => true,
      'path'       => sfConfig::get('td_blog_upload_dir'),
      'mime_types' => 'web_images',
    ), array(
      'required' => 'Musisz wybrać plik',
    )));
  }
}
