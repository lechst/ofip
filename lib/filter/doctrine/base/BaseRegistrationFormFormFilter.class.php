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
      'name'               => new sfWidgetFormFilterInput(),
      'my_email'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'organization_name'  => new sfWidgetFormFilterInput(),
      'street'             => new sfWidgetFormFilterInput(),
      'postal_code'        => new sfWidgetFormFilterInput(),
      'locality'           => new sfWidgetFormFilterInput(),
      'voivodeship'        => new sfWidgetFormFilterInput(),
      'phone_number'       => new sfWidgetFormFilterInput(),
      'fax'                => new sfWidgetFormFilterInput(),
      'organization_email' => new sfWidgetFormFilterInput(),
      'internet_page'      => new sfWidgetFormFilterInput(),
      'NIP'                => new sfWidgetFormFilterInput(),
      'agreement1'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fee_number'         => new sfWidgetFormFilterInput(),
      'fac_name'           => new sfWidgetFormFilterInput(),
      'fac_address'        => new sfWidgetFormFilterInput(),
      'fac_NIP'            => new sfWidgetFormFilterInput(),
      'accommodation'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation1'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation2'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation3'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation4'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation5'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation6'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation7'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation8'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation9'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation10'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation11'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation12'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation13'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation14'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participation15'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'agreement2'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'name'               => new sfValidatorPass(array('required' => false)),
      'my_email'           => new sfValidatorPass(array('required' => false)),
      'organization_name'  => new sfValidatorPass(array('required' => false)),
      'street'             => new sfValidatorPass(array('required' => false)),
      'postal_code'        => new sfValidatorPass(array('required' => false)),
      'locality'           => new sfValidatorPass(array('required' => false)),
      'voivodeship'        => new sfValidatorPass(array('required' => false)),
      'phone_number'       => new sfValidatorPass(array('required' => false)),
      'fax'                => new sfValidatorPass(array('required' => false)),
      'organization_email' => new sfValidatorPass(array('required' => false)),
      'internet_page'      => new sfValidatorPass(array('required' => false)),
      'NIP'                => new sfValidatorPass(array('required' => false)),
      'agreement1'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fee_number'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fac_name'           => new sfValidatorPass(array('required' => false)),
      'fac_address'        => new sfValidatorPass(array('required' => false)),
      'fac_NIP'            => new sfValidatorPass(array('required' => false)),
      'accommodation'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation1'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation2'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation3'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation4'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation5'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation6'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation7'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation8'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation9'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation10'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation11'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation12'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation13'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation14'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participation15'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'agreement2'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
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
      'id'                 => 'Number',
      'name'               => 'Text',
      'my_email'           => 'Text',
      'organization_name'  => 'Text',
      'street'             => 'Text',
      'postal_code'        => 'Text',
      'locality'           => 'Text',
      'voivodeship'        => 'Text',
      'phone_number'       => 'Text',
      'fax'                => 'Text',
      'organization_email' => 'Text',
      'internet_page'      => 'Text',
      'NIP'                => 'Text',
      'agreement1'         => 'Boolean',
      'fee_number'         => 'Number',
      'fac_name'           => 'Text',
      'fac_address'        => 'Text',
      'fac_NIP'            => 'Text',
      'accommodation'      => 'Boolean',
      'participation1'     => 'Boolean',
      'participation2'     => 'Boolean',
      'participation3'     => 'Boolean',
      'participation4'     => 'Boolean',
      'participation5'     => 'Boolean',
      'participation6'     => 'Boolean',
      'participation7'     => 'Boolean',
      'participation8'     => 'Boolean',
      'participation9'     => 'Boolean',
      'participation10'    => 'Boolean',
      'participation11'    => 'Boolean',
      'participation12'    => 'Boolean',
      'participation13'    => 'Boolean',
      'participation14'    => 'Boolean',
      'participation15'    => 'Boolean',
      'agreement2'         => 'Boolean',
    );
  }
}
