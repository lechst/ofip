<?php

/**
 * UserAreaPlace filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserAreaPlaceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'place'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'place'   => new sfValidatorPass(array('required' => false)),
      'content' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_area_place_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserAreaPlace';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'place'   => 'Text',
      'content' => 'Text',
    );
  }
}
