<?php

/**
 * RegistrationForm form base class.
 *
 * @method RegistrationForm getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegistrationFormForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInputText(),
      'my_email'           => new sfWidgetFormInputText(),
      'organization_name'  => new sfWidgetFormInputText(),
      'street'             => new sfWidgetFormInputText(),
      'postal_code'        => new sfWidgetFormInputText(),
      'locality'           => new sfWidgetFormInputText(),
      'voivodeship'        => new sfWidgetFormInputText(),
      'phone_number'       => new sfWidgetFormInputText(),
      'fax'                => new sfWidgetFormInputText(),
      'organization_email' => new sfWidgetFormInputText(),
      'internet_page'      => new sfWidgetFormTextarea(),
      'NIP'                => new sfWidgetFormInputText(),
      'agreement1'         => new sfWidgetFormInputCheckbox(),
      'fee_number'         => new sfWidgetFormInputText(),
      'fac_name'           => new sfWidgetFormInputText(),
      'fac_address'        => new sfWidgetFormInputText(),
      'fac_NIP'            => new sfWidgetFormInputText(),
      'accommodation'      => new sfWidgetFormInputCheckbox(),
      'participation1'     => new sfWidgetFormInputCheckbox(),
      'participation2'     => new sfWidgetFormInputCheckbox(),
      'participation3'     => new sfWidgetFormInputCheckbox(),
      'participation4'     => new sfWidgetFormInputCheckbox(),
      'participation5'     => new sfWidgetFormInputCheckbox(),
      'participation6'     => new sfWidgetFormInputCheckbox(),
      'participation7'     => new sfWidgetFormInputCheckbox(),
      'participation8'     => new sfWidgetFormInputCheckbox(),
      'participation9'     => new sfWidgetFormInputCheckbox(),
      'participation10'    => new sfWidgetFormInputCheckbox(),
      'participation11'    => new sfWidgetFormInputCheckbox(),
      'participation12'    => new sfWidgetFormInputCheckbox(),
      'participation13'    => new sfWidgetFormInputCheckbox(),
      'participation14'    => new sfWidgetFormInputCheckbox(),
      'participation15'    => new sfWidgetFormInputCheckbox(),
      'agreement2'         => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'my_email'           => new sfValidatorEmail(array('max_length' => 120)),
      'organization_name'  => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'street'             => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'postal_code'        => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'locality'           => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'voivodeship'        => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'phone_number'       => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'fax'                => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'organization_email' => new sfValidatorEmail(array('max_length' => 120, 'required' => false)),
      'internet_page'      => new sfValidatorString(array('required' => false)),
      'NIP'                => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'agreement1'         => new sfValidatorBoolean(array('required' => false)),
      'fee_number'         => new sfValidatorInteger(array('required' => false)),
      'fac_name'           => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'fac_address'        => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'fac_NIP'            => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'accommodation'      => new sfValidatorBoolean(array('required' => false)),
      'participation1'     => new sfValidatorBoolean(array('required' => false)),
      'participation2'     => new sfValidatorBoolean(array('required' => false)),
      'participation3'     => new sfValidatorBoolean(array('required' => false)),
      'participation4'     => new sfValidatorBoolean(array('required' => false)),
      'participation5'     => new sfValidatorBoolean(array('required' => false)),
      'participation6'     => new sfValidatorBoolean(array('required' => false)),
      'participation7'     => new sfValidatorBoolean(array('required' => false)),
      'participation8'     => new sfValidatorBoolean(array('required' => false)),
      'participation9'     => new sfValidatorBoolean(array('required' => false)),
      'participation10'    => new sfValidatorBoolean(array('required' => false)),
      'participation11'    => new sfValidatorBoolean(array('required' => false)),
      'participation12'    => new sfValidatorBoolean(array('required' => false)),
      'participation13'    => new sfValidatorBoolean(array('required' => false)),
      'participation14'    => new sfValidatorBoolean(array('required' => false)),
      'participation15'    => new sfValidatorBoolean(array('required' => false)),
      'agreement2'         => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('registration_form[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RegistrationForm';
  }

}
