<?php

/**
 * ConcertProgram form base class.
 *
 * @method ConcertProgram getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConcertProgramForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'day'      => new sfWidgetFormDate(),
      'hour'     => new sfWidgetFormDate(),
      'place'    => new sfWidgetFormInputText(),
      'content'  => new sfWidgetFormTextarea(),
      'image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'day'      => new sfValidatorDate(),
      'hour'     => new sfValidatorDate(),
      'place'    => new sfValidatorString(array('max_length' => 120)),
      'content'  => new sfValidatorString(),
      'image_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('concert_program[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConcertProgram';
  }

}
