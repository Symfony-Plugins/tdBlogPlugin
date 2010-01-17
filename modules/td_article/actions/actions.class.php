<?php

require_once dirname(__FILE__).'/../lib/td_articleGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/td_articleGeneratorHelper.class.php';

/**
 * td_article actions.
 *
 * @package    gospel
 * @subpackage td_article
 * @author     Tomasz Ducin
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
     * Activates selected article.
     *
     * @param sfWebRequest $request
     */
    public function executeListActivate(sfWebRequest $request)
    {
        $article = $this->getRoute()->getObject();
        $article->activate();

        $this->getUser()->setFlash('notice', 'The selected article has been activated successfully.');

        $this->redirect('@td_article');
    }

    /**
     * Deactivates selected article.
     *
     * @param sfWebRequest $request
     */
    public function executeListDeactivate(sfWebRequest $request)
    {
        $article = $this->getRoute()->getObject();
        $article->deactivate();

        $this->getUser()->setFlash('notice', 'The selected article has been deactivated successfully.');

        $this->redirect('@td_article');
    }
}
