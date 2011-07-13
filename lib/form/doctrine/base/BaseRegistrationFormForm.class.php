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
      'id'                     => new sfWidgetFormInputHidden(),
      'is_group'               => new sfWidgetFormInputCheckbox(),
      'name'                   => new sfWidgetFormInputText(),
      'my_email'               => new sfWidgetFormInputText(),
      'organization_name'      => new sfWidgetFormInputText(),
      'street'                 => new sfWidgetFormInputText(),
      'postal_code'            => new sfWidgetFormInputText(),
      'locality'               => new sfWidgetFormInputText(),
      'voivodeship'            => new sfWidgetFormInputText(),
      'phone_number'           => new sfWidgetFormInputText(),
      'fax'                    => new sfWidgetFormInputText(),
      'organization_email'     => new sfWidgetFormInputText(),
      'internet_page'          => new sfWidgetFormTextarea(),
      'NIP'                    => new sfWidgetFormInputText(),
      'agreement1'             => new sfWidgetFormInputCheckbox(),
      'number_of_participants' => new sfWidgetFormInputText(),
      'fee_number'             => new sfWidgetFormInputText(),
      'fee_total'              => new sfWidgetFormInputText(),
      'fac_name'               => new sfWidgetFormInputText(),
      'fac_address'            => new sfWidgetFormInputText(),
      'fac_NIP'                => new sfWidgetFormInputText(),
      'accommodation'          => new sfWidgetFormInputCheckbox(),
      'participation_1'        => new sfWidgetFormInputCheckbox(),
      'participants_1'         => new sfWidgetFormInputCheckbox(),
      'participation_2'        => new sfWidgetFormInputCheckbox(),
      'participants_2'         => new sfWidgetFormInputCheckbox(),
      'participation_3'        => new sfWidgetFormInputCheckbox(),
      'participants_3'         => new sfWidgetFormInputCheckbox(),
      'participation_4'        => new sfWidgetFormInputCheckbox(),
      'participants_4'         => new sfWidgetFormInputCheckbox(),
      'participation_5'        => new sfWidgetFormInputCheckbox(),
      'participants_5'         => new sfWidgetFormInputCheckbox(),
      'participation_6'        => new sfWidgetFormInputCheckbox(),
      'participants_6'         => new sfWidgetFormInputCheckbox(),
      'participation_7'        => new sfWidgetFormInputCheckbox(),
      'participants_7'         => new sfWidgetFormInputCheckbox(),
      'participation_8'        => new sfWidgetFormInputCheckbox(),
      'participants_8'         => new sfWidgetFormInputCheckbox(),
      'participation_9'        => new sfWidgetFormInputCheckbox(),
      'participants_9'         => new sfWidgetFormInputCheckbox(),
      'participation_10'       => new sfWidgetFormInputCheckbox(),
      'participants_10'        => new sfWidgetFormInputCheckbox(),
      'participation_11'       => new sfWidgetFormInputCheckbox(),
      'participants_11'        => new sfWidgetFormInputCheckbox(),
      'participation_12'       => new sfWidgetFormInputCheckbox(),
      'participants_12'        => new sfWidgetFormInputCheckbox(),
      'participation_13'       => new sfWidgetFormInputCheckbox(),
      'participants_13'        => new sfWidgetFormInputCheckbox(),
      'participation_14'       => new sfWidgetFormInputCheckbox(),
      'participants_14'        => new sfWidgetFormInputCheckbox(),
      'participation_15'       => new sfWidgetFormInputCheckbox(),
      'participants_15'        => new sfWidgetFormInputCheckbox(),
      'agreement2'             => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'is_group'               => new sfValidatorBoolean(),
      'name'                   => new sfValidatorString(array('max_length' => 120)),
      'my_email'               => new sfValidatorEmail(array('max_length' => 120)),
      'organization_name'      => new sfValidatorString(array('max_length' => 120)),
      'street'                 => new sfValidatorString(array('max_length' => 120)),
      'postal_code'            => new sfValidatorString(array('max_length' => 120)),
      'locality'               => new sfValidatorString(array('max_length' => 120)),
      'voivodeship'            => new sfValidatorString(array('max_length' => 120)),
      'phone_number'           => new sfValidatorString(array('max_length' => 120)),
      'fax'                    => new sfValidatorString(array('max_length' => 120)),
      'organization_email'     => new sfValidatorEmail(array('max_length' => 120)),
      'internet_page'          => new sfValidatorString(),
      'NIP'                    => new sfValidatorString(array('max_length' => 120)),
      'agreement1'             => new sfValidatorBoolean(),
      'number_of_participants' => new sfValidatorInteger(),
      'fee_number'             => new sfValidatorInteger(),
      'fee_total'              => new sfValidatorString(array('max_length' => 120)),
      'fac_name'               => new sfValidatorString(array('max_length' => 120)),
      'fac_address'            => new sfValidatorString(array('max_length' => 120)),
      'fac_NIP'                => new sfValidatorString(array('max_length' => 120)),
      'accommodation'          => new sfValidatorBoolean(),
      'participation_1'        => new sfValidatorBoolean(),
      'participants_1'         => new sfValidatorBoolean(),
      'participation_2'        => new sfValidatorBoolean(),
      'participants_2'         => new sfValidatorBoolean(),
      'participation_3'        => new sfValidatorBoolean(),
      'participants_3'         => new sfValidatorBoolean(),
      'participation_4'        => new sfValidatorBoolean(),
      'participants_4'         => new sfValidatorBoolean(),
      'participation_5'        => new sfValidatorBoolean(),
      'participants_5'         => new sfValidatorBoolean(),
      'participation_6'        => new sfValidatorBoolean(),
      'participants_6'         => new sfValidatorBoolean(),
      'participation_7'        => new sfValidatorBoolean(),
      'participants_7'         => new sfValidatorBoolean(),
      'participation_8'        => new sfValidatorBoolean(),
      'participants_8'         => new sfValidatorBoolean(),
      'participation_9'        => new sfValidatorBoolean(),
      'participants_9'         => new sfValidatorBoolean(),
      'participation_10'       => new sfValidatorBoolean(),
      'participants_10'        => new sfValidatorBoolean(),
      'participation_11'       => new sfValidatorBoolean(),
      'participants_11'        => new sfValidatorBoolean(),
      'participation_12'       => new sfValidatorBoolean(),
      'participants_12'        => new sfValidatorBoolean(),
      'participation_13'       => new sfValidatorBoolean(),
      'participants_13'        => new sfValidatorBoolean(),
      'participation_14'       => new sfValidatorBoolean(),
      'participants_14'        => new sfValidatorBoolean(),
      'participation_15'       => new sfValidatorBoolean(),
      'participants_15'        => new sfValidatorBoolean(),
      'agreement2'             => new sfValidatorBoolean(),
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
