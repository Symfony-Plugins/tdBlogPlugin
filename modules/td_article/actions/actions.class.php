<?php

require_once dirname(__FILE__).'/../lib/td_articleGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/td_articleGeneratorHelper.class.php';

/**
 * td_article actions.
 *
 * @package    tdBlogPlugin
 * @subpackage backend
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class td_articleActions extends autoTd_articleActions
{
    /**
     * Activates selected articles.
     *
     * @param sfWebRequest $request
     */
    public function executeBatchActivate(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');
        $query = Doctrine::getTable('tdArticle')->getSelectedArticlesQuery($ids);

        foreach ($query->execute() as $article)
        {
          $article->activate(true);
        }

        $this->getUser()->setFlash('notice', 'The selected articles have been activated successfully.');

        $this->redirect('@td_article');
    }

    /**
     * Deactivates selected articles.
     *
     * @param sfWebRequest $request
     */
    public function executeBatchDeactivate(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');
        $query = Doctrine::getTable('tdArticle')->getSelectedArticlesQuery($ids);

        foreach ($query->execute() as $article)
        {
          $article->deactivate(true);
        }

        $this->getUser()->setFlash('notice', 'The selected articles have been deactivated successfully.');

        $this->redirect('@td_article');
    }

  /**
   * Activates an article from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling article deactivating (switch).
   */
  public function executeActivate(sfWebRequest $request)
  {
    $article = Doctrine::getTable('tdArticle')->findOneById($request->getParameter('id'));
    $article->activate();
    return $this->renderPartial('td_article/ajax_deactivate', array('td_article' => $article));
  }

  /**
   * Deactivates an article from admin generator list using AJAX.
   *
   * @param sfWebRequest $request
   * @return Partial - generated partial enabling article activating (switch).
   */
  public function executeDeactivate(sfWebRequest $request)
  {
    $article = Doctrine::getTable('tdArticle')->findOneById($request->getParameter('id'));
    $article->deactivate();
    return $this->renderPartial('td_article/ajax_activate', array('td_article' => $article));
  }
}
