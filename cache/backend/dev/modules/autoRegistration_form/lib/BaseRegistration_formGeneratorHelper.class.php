<?php

/**
 * registration_form module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage registration_form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRegistration_formGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'registration_form' : 'registration_form_'.$action;
  }
}
