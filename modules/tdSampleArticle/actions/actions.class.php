<?php

/**
 * tdSampleArticle actions.
 *
 * @package    gospel
 * @subpackage article
 * @author     Tomasz Ducin
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class tdSampleArticleActions extends sfActions
{
 /**
  * Executes index action. Displays recent articles abbreviations.
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->articles = Doctrine::getTable('tdArticle')->getRecentArticlesWithAuthorsQuery()->fetchArray();
  }

 /**
  * Executes show action. Displays full details about an article given by the
  * id parameter.
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    $articles = Doctrine::getTable('tdArticle')->getArticleWithAuthorByIdQuery($id)->fetchArray();
    $this->article = $articles[0];
  }
}
