<?php

/**
 * static_content_subpage module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage static_content_subpage
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseStatic_content_subpageGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'static_content_subpage' : 'static_content_subpage_'.$action;
  }
}