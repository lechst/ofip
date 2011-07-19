<?php

/**
 * form actions.
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formActions extends sfActions
{

  public function executeNew(sfWebRequest $request)
  {
       $this->getUser()->setCulture('pl');
    $this->form = new RegistrationFormForm();
    
          $this->menu_subpage_left = Doctrine::getTable('Subpage')
      ->createQuery('a')
      ->execute();
          
  }

  public function executeCreate(sfWebRequest $request)
  {
   
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    
    $this->form = new RegistrationFormForm();
$this->menu_subpage_left = Doctrine::getTable('Subpage')
      ->createQuery('a')
      ->execute();
    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $registration_form = $form->save();

      //$this->redirect('form/edit?id='.$registration_form->getId());
      $this->redirect('rejestracja/dziekujemy');
    }
  }
  
  public function executeDziekujemy(sfWebRequest $request)
  {
      
      $this->menu_subpage_left = Doctrine::getTable('Subpage')
      ->createQuery('a')
      ->execute();
    $this->setTemplate('dziekujemy');
  }
}
