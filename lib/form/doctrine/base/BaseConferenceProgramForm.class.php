<?php

/**
 * ConferenceProgram form base class.
 *
 * @method ConferenceProgram getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConferenceProgramForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'day'     => new sfWidgetFormDate(),
      'hour'    => new sfWidgetFormDate(),
      'place'   => new sfWidgetFormInputText(),
      'content' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'day'     => new sfValidatorDate(),
      'hour'    => new sfValidatorDate(),
      'place'   => new sfValidatorString(array('max_length' => 120)),
      'content' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('conference_program[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConferenceProgram';
  }

}
