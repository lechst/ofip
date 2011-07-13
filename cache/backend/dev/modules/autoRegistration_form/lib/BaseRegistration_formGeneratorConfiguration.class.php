<?php

/**
 * registration_form module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage registration_form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRegistration_formGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id%% - %%is_group%% - %%name%% - %%my_email%% - %%organization_name%% - %%street%% - %%postal_code%% - %%locality%% - %%voivodeship%% - %%phone_number%% - %%fax%% - %%organization_email%% - %%internet_page%% - %%NIP%% - %%agreement1%% - %%number_of_participants%% - %%fee_number%% - %%fee_total%% - %%fac_name%% - %%fac_address%% - %%fac_NIP%% - %%accommodation%% - %%participation_1%% - %%participants_1%% - %%participation_2%% - %%participants_2%% - %%participation_3%% - %%participants_3%% - %%participation_4%% - %%participants_4%% - %%participation_5%% - %%participants_5%% - %%participation_6%% - %%participants_6%% - %%participation_7%% - %%participants_7%% - %%participation_8%% - %%participants_8%% - %%participation_9%% - %%participants_9%% - %%participation_10%% - %%participants_10%% - %%participation_11%% - %%participants_11%% - %%participation_12%% - %%participants_12%% - %%participation_13%% - %%participants_13%% - %%participation_14%% - %%participants_14%% - %%participation_15%% - %%participants_15%% - %%agreement2%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Registration form List';
  }

  public function getEditTitle()
  {
    return 'Edit Registration form';
  }

  public function getNewTitle()
  {
    return 'New Registration form';
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
    return array(  0 => 'id',  1 => 'is_group',  2 => 'name',  3 => 'my_email',  4 => 'organization_name',  5 => 'street',  6 => 'postal_code',  7 => 'locality',  8 => 'voivodeship',  9 => 'phone_number',  10 => 'fax',  11 => 'organization_email',  12 => 'internet_page',  13 => 'NIP',  14 => 'agreement1',  15 => 'number_of_participants',  16 => 'fee_number',  17 => 'fee_total',  18 => 'fac_name',  19 => 'fac_address',  20 => 'fac_NIP',  21 => 'accommodation',  22 => 'participation_1',  23 => 'participants_1',  24 => 'participation_2',  25 => 'participants_2',  26 => 'participation_3',  27 => 'participants_3',  28 => 'participation_4',  29 => 'participants_4',  30 => 'participation_5',  31 => 'participants_5',  32 => 'participation_6',  33 => 'participants_6',  34 => 'participation_7',  35 => 'participants_7',  36 => 'participation_8',  37 => 'participants_8',  38 => 'participation_9',  39 => 'participants_9',  40 => 'participation_10',  41 => 'participants_10',  42 => 'participation_11',  43 => 'participants_11',  44 => 'participation_12',  45 => 'participants_12',  46 => 'participation_13',  47 => 'participants_13',  48 => 'participation_14',  49 => 'participants_14',  50 => 'participation_15',  51 => 'participants_15',  52 => 'agreement2',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'is_group' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'my_email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'organization_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'street' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'postal_code' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'locality' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'voivodeship' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'phone_number' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fax' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'organization_email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'internet_page' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'NIP' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'agreement1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'number_of_participants' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fee_number' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fee_total' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fac_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fac_address' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fac_NIP' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'accommodation' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_3' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_3' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_4' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_4' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_5' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_5' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_6' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_6' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_7' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_7' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_8' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_8' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_9' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_9' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_10' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_10' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_11' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_11' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_12' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_12' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_13' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_13' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_14' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_14' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participation_15' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'participants_15' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'agreement2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'is_group' => array(),
      'name' => array(),
      'my_email' => array(),
      'organization_name' => array(),
      'street' => array(),
      'postal_code' => array(),
      'locality' => array(),
      'voivodeship' => array(),
      'phone_number' => array(),
      'fax' => array(),
      'organization_email' => array(),
      'internet_page' => array(),
      'NIP' => array(),
      'agreement1' => array(),
      'number_of_participants' => array(),
      'fee_number' => array(),
      'fee_total' => array(),
      'fac_name' => array(),
      'fac_address' => array(),
      'fac_NIP' => array(),
      'accommodation' => array(),
      'participation_1' => array(),
      'participants_1' => array(),
      'participation_2' => array(),
      'participants_2' => array(),
      'participation_3' => array(),
      'participants_3' => array(),
      'participation_4' => array(),
      'participants_4' => array(),
      'participation_5' => array(),
      'participants_5' => array(),
      'participation_6' => array(),
      'participants_6' => array(),
      'participation_7' => array(),
      'participants_7' => array(),
      'participation_8' => array(),
      'participants_8' => array(),
      'participation_9' => array(),
      'participants_9' => array(),
      'participation_10' => array(),
      'participants_10' => array(),
      'participation_11' => array(),
      'participants_11' => array(),
      'participation_12' => array(),
      'participants_12' => array(),
      'participation_13' => array(),
      'participants_13' => array(),
      'participation_14' => array(),
      'participants_14' => array(),
      'participation_15' => array(),
      'participants_15' => array(),
      'agreement2' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'is_group' => array(),
      'name' => array(),
      'my_email' => array(),
      'organization_name' => array(),
      'street' => array(),
      'postal_code' => array(),
      'locality' => array(),
      'voivodeship' => array(),
      'phone_number' => array(),
      'fax' => array(),
      'organization_email' => array(),
      'internet_page' => array(),
      'NIP' => array(),
      'agreement1' => array(),
      'number_of_participants' => array(),
      'fee_number' => array(),
      'fee_total' => array(),
      'fac_name' => array(),
      'fac_address' => array(),
      'fac_NIP' => array(),
      'accommodation' => array(),
      'participation_1' => array(),
      'participants_1' => array(),
      'participation_2' => array(),
      'participants_2' => array(),
      'participation_3' => array(),
      'participants_3' => array(),
      'participation_4' => array(),
      'participants_4' => array(),
      'participation_5' => array(),
      'participants_5' => array(),
      'participation_6' => array(),
      'participants_6' => array(),
      'participation_7' => array(),
      'participants_7' => array(),
      'participation_8' => array(),
      'participants_8' => array(),
      'participation_9' => array(),
      'participants_9' => array(),
      'participation_10' => array(),
      'participants_10' => array(),
      'participation_11' => array(),
      'participants_11' => array(),
      'participation_12' => array(),
      'participants_12' => array(),
      'participation_13' => array(),
      'participants_13' => array(),
      'participation_14' => array(),
      'participants_14' => array(),
      'participation_15' => array(),
      'participants_15' => array(),
      'agreement2' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'is_group' => array(),
      'name' => array(),
      'my_email' => array(),
      'organization_name' => array(),
      'street' => array(),
      'postal_code' => array(),
      'locality' => array(),
      'voivodeship' => array(),
      'phone_number' => array(),
      'fax' => array(),
      'organization_email' => array(),
      'internet_page' => array(),
      'NIP' => array(),
      'agreement1' => array(),
      'number_of_participants' => array(),
      'fee_number' => array(),
      'fee_total' => array(),
      'fac_name' => array(),
      'fac_address' => array(),
      'fac_NIP' => array(),
      'accommodation' => array(),
      'participation_1' => array(),
      'participants_1' => array(),
      'participation_2' => array(),
      'participants_2' => array(),
      'participation_3' => array(),
      'participants_3' => array(),
      'participation_4' => array(),
      'participants_4' => array(),
      'participation_5' => array(),
      'participants_5' => array(),
      'participation_6' => array(),
      'participants_6' => array(),
      'participation_7' => array(),
      'participants_7' => array(),
      'participation_8' => array(),
      'participants_8' => array(),
      'participation_9' => array(),
      'participants_9' => array(),
      'participation_10' => array(),
      'participants_10' => array(),
      'participation_11' => array(),
      'participants_11' => array(),
      'participation_12' => array(),
      'participants_12' => array(),
      'participation_13' => array(),
      'participants_13' => array(),
      'participation_14' => array(),
      'participants_14' => array(),
      'participation_15' => array(),
      'participants_15' => array(),
      'agreement2' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'is_group' => array(),
      'name' => array(),
      'my_email' => array(),
      'organization_name' => array(),
      'street' => array(),
      'postal_code' => array(),
      'locality' => array(),
      'voivodeship' => array(),
      'phone_number' => array(),
      'fax' => array(),
      'organization_email' => array(),
      'internet_page' => array(),
      'NIP' => array(),
      'agreement1' => array(),
      'number_of_participants' => array(),
      'fee_number' => array(),
      'fee_total' => array(),
      'fac_name' => array(),
      'fac_address' => array(),
      'fac_NIP' => array(),
      'accommodation' => array(),
      'participation_1' => array(),
      'participants_1' => array(),
      'participation_2' => array(),
      'participants_2' => array(),
      'participation_3' => array(),
      'participants_3' => array(),
      'participation_4' => array(),
      'participants_4' => array(),
      'participation_5' => array(),
      'participants_5' => array(),
      'participation_6' => array(),
      'participants_6' => array(),
      'participation_7' => array(),
      'participants_7' => array(),
      'participation_8' => array(),
      'participants_8' => array(),
      'participation_9' => array(),
      'participants_9' => array(),
      'participation_10' => array(),
      'participants_10' => array(),
      'participation_11' => array(),
      'participants_11' => array(),
      'participation_12' => array(),
      'participants_12' => array(),
      'participation_13' => array(),
      'participants_13' => array(),
      'participation_14' => array(),
      'participants_14' => array(),
      'participation_15' => array(),
      'participants_15' => array(),
      'agreement2' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'is_group' => array(),
      'name' => array(),
      'my_email' => array(),
      'organization_name' => array(),
      'street' => array(),
      'postal_code' => array(),
      'locality' => array(),
      'voivodeship' => array(),
      'phone_number' => array(),
      'fax' => array(),
      'organization_email' => array(),
      'internet_page' => array(),
      'NIP' => array(),
      'agreement1' => array(),
      'number_of_participants' => array(),
      'fee_number' => array(),
      'fee_total' => array(),
      'fac_name' => array(),
      'fac_address' => array(),
      'fac_NIP' => array(),
      'accommodation' => array(),
      'participation_1' => array(),
      'participants_1' => array(),
      'participation_2' => array(),
      'participants_2' => array(),
      'participation_3' => array(),
      'participants_3' => array(),
      'participation_4' => array(),
      'participants_4' => array(),
      'participation_5' => array(),
      'participants_5' => array(),
      'participation_6' => array(),
      'participants_6' => array(),
      'participation_7' => array(),
      'participants_7' => array(),
      'participation_8' => array(),
      'participants_8' => array(),
      'participation_9' => array(),
      'participants_9' => array(),
      'participation_10' => array(),
      'participants_10' => array(),
      'participation_11' => array(),
      'participants_11' => array(),
      'participation_12' => array(),
      'participants_12' => array(),
      'participation_13' => array(),
      'participants_13' => array(),
      'participation_14' => array(),
      'participants_14' => array(),
      'participation_15' => array(),
      'participants_15' => array(),
      'agreement2' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'RegistrationFormForm';
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
    return 'RegistrationFormFormFilter';
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
