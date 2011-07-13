<?php

/**
 * SaturdaysBreakfastProgram form base class.
 *
 * @method SaturdaysBreakfastProgram getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSaturdaysBreakfastProgramForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'hour'    => new sfWidgetFormDate(),
      'place'   => new sfWidgetFormInputText(),
      'content' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hour'    => new sfValidatorDate(),
      'place'   => new sfValidatorString(array('max_length' => 120)),
      'content' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('saturdays_breakfast_program[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SaturdaysBreakfastProgram';
  }

}
