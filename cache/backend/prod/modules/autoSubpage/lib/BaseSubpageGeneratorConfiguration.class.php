<?php

/**
 * subpage module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage subpage
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSubpageGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%menu_category_id%% - %%name%% - %%is_menu%% - %%is_module%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Subpage List';
  }

  public function getEditTitle()
  {
    return 'Edit Subpage';
  }

  public function getNewTitle()
  {
    return 'New Subpage';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'menu_category_id',  2 => 'name',  3 => 'is_menu',  4 => 'is_module',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'menu_category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_menu' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'is_module' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'menu_category_id' => array(),
      'name' => array(),
      'is_menu' => array(),
      'is_module' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'menu_category_id' => array(),
      'name' => array(),
      'is_menu' => array(),
      'is_module' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'menu_category_id' => array(),
      'name' => array(),
      'is_menu' => array(),
      'is_module' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'menu_category_id' => array(),
      'name' => array(),
      'is_menu' => array(),
      'is_module' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'menu_category_id' => array(),
      'name' => array(),
      'is_menu' => array(),
      'is_module' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'SubpageForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'SubpageFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
