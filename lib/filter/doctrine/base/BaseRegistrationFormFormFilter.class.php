<?php

/**
 * RegistrationForm filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRegistrationFormFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_group'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'my_email'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'organization_name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'street'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'postal_code'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'locality'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'voivodeship'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone_number'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'organization_email'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'internet_page'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'NIP'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agreement1'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'number_of_participants' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fee_number'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fee_total'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_name'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_address'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fac_NIP'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'accommodation'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_1'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_1'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_2'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_2'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_3'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_3'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_4'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_4'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_5'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_5'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_6'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_6'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_7'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_7'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_8'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_8'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_9'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_9'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_10'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_10'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_11'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_11'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_12'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_12'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_13'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_13'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_14'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_14'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation_15'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participants_15'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'agreement2'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'is_group'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'my_email'               => new sfValidatorPass(array('required' => false)),
      'organization_name'      => new sfValidatorPass(array('required' => false)),
      'street'                 => new sfValidatorPass(array('required' => false)),
      'postal_code'            => new sfValidatorPass(array('required' => false)),
      'locality'               => new sfValidatorPass(array('required' => false)),
      'voivodeship'            => new sfValidatorPass(array('required' => false)),
      'phone_number'           => new sfValidatorPass(array('required' => false)),
      'fax'                    => new sfValidatorPass(array('required' => false)),
      'organization_email'     => new sfValidatorPass(array('required' => false)),
      'internet_page'          => new sfValidatorPass(array('required' => false)),
      'NIP'                    => new sfValidatorPass(array('required' => false)),
      'agreement1'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'number_of_participants' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fee_number'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fee_total'              => new sfValidatorPass(array('required' => false)),
      'fac_name'               => new sfValidatorPass(array('required' => false)),
      'fac_address'            => new sfValidatorPass(array('required' => false)),
      'fac_NIP'                => new sfValidatorPass(array('required' => false)),
      'accommodation'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_1'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_1'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_2'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_2'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_3'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_3'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_4'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_4'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_5'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_5'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_6'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_6'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_7'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_7'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_8'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_8'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_9'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_9'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_10'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_10'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_11'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_11'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_12'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_12'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_13'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_13'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_14'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_14'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation_15'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participants_15'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'agreement2'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('registration_form_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RegistrationForm';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'is_group'               => 'Boolean',
      'name'                   => 'Text',
      'my_email'               => 'Text',
      'organization_name'      => 'Text',
      'street'                 => 'Text',
      'postal_code'            => 'Text',
      'locality'               => 'Text',
      'voivodeship'            => 'Text',
      'phone_number'           => 'Text',
      'fax'                    => 'Text',
      'organization_email'     => 'Text',
      'internet_page'          => 'Text',
      'NIP'                    => 'Text',
      'agreement1'             => 'Boolean',
      'number_of_participants' => 'Number',
      'fee_number'             => 'Number',
      'fee_total'              => 'Text',
      'fac_name'               => 'Text',
      'fac_address'            => 'Text',
      'fac_NIP'                => 'Text',
      'accommodation'          => 'Boolean',
      'participation_1'        => 'Boolean',
      'participants_1'         => 'Boolean',
      'participation_2'        => 'Boolean',
      'participants_2'         => 'Boolean',
      'participation_3'        => 'Boolean',
      'participants_3'         => 'Boolean',
      'participation_4'        => 'Boolean',
      'participants_4'         => 'Boolean',
      'participation_5'        => 'Boolean',
      'participants_5'         => 'Boolean',
      'participation_6'        => 'Boolean',
      'participants_6'         => 'Boolean',
      'participation_7'        => 'Boolean',
      'participants_7'         => 'Boolean',
      'participation_8'        => 'Boolean',
      'participants_8'         => 'Boolean',
      'participation_9'        => 'Boolean',
      'participants_9'         => 'Boolean',
      'participation_10'       => 'Boolean',
      'participants_10'        => 'Boolean',
      'participation_11'       => 'Boolean',
      'participants_11'        => 'Boolean',
      'participation_12'       => 'Boolean',
      'participants_12'        => 'Boolean',
      'participation_13'       => 'Boolean',
      'participants_13'        => 'Boolean',
      'participation_14'       => 'Boolean',
      'participants_14'        => 'Boolean',
      'participation_15'       => 'Boolean',
      'participants_15'        => 'Boolean',
      'agreement2'             => 'Boolean',
    );
  }
}
