<?php

/**
 * tdSampleArticle actions.
 *
 * @package    tdBlogPlugin
 * @subpackage frontend
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
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
    $this->articles = Doctrine::getTable('tdArticle')
      ->getArticlesWithAuthorsQuery(sfConfig::get('td_blog_recent_articles_count'))
      ->fetchArray();
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
