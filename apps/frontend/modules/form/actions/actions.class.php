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
  public function executeIndex(sfWebRequest $request)
  {
    $this->registration_forms = Doctrine_Core::getTable('RegistrationForm')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->registration_form = Doctrine_Core::getTable('RegistrationForm')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->registration_form);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RegistrationFormForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RegistrationFormForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($registration_form = Doctrine_Core::getTable('RegistrationForm')->find(array($request->getParameter('id'))), sprintf('Object registration_form does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegistrationFormForm($registration_form);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($registration_form = Doctrine_Core::getTable('RegistrationForm')->find(array($request->getParameter('id'))), sprintf('Object registration_form does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegistrationFormForm($registration_form);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($registration_form = Doctrine_Core::getTable('RegistrationForm')->find(array($request->getParameter('id'))), sprintf('Object registration_form does not exist (%s).', $request->getParameter('id')));
    $registration_form->delete();

    $this->redirect('form/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $registration_form = $form->save();

      $this->redirect('form/edit?id='.$registration_form->getId());
    }
  }
}
