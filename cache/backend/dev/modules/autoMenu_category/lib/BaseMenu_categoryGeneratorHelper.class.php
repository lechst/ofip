<?php

/**
 * menu_category module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage menu_category
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMenu_categoryGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'menu_category' : 'menu_category_'.$action;
  }
}
