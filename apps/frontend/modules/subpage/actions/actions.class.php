<?php

/**
 * subpage actions.
 *
 * @package    ofip
 * @subpackage subpage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class subpageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
      
      $this->menu_category = Doctrine::getTable('MenuCategory')
      ->createQuery('a')
      ->execute();
      
  }
 
    public function executeShow(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
      
      $this-> menu_category  = Doctrine::getTable('MenuCategory')
      ->createQuery('a')
      ->execute();
      
      if($request->hasParameter('id'))
              
      $this->getUser()->setAttribute('subpage_id', $request->getParameter('id'));
       
      $this->content = Doctrine::getTable('StaticContentSubpage')->findOneBySubpageId($this->getUser()->getAttribute('subpage_id'));
      
      $this->menu_subpage_left = Doctrine::getTable('Subpage')
      ->createQuery('a')
      ->execute();
      
      
  }

  
}
