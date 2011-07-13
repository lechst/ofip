<?php

/**
 * ConferenceSpeaker form base class.
 *
 * @method ConferenceSpeaker getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConferenceSpeakerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'conference_program_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConferenceProgram'), 'add_empty' => true)),
      'speaker_image_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SpeakerImage'), 'add_empty' => true)),
      'content'               => new sfWidgetFormTextarea(),
      'order_nr'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'conference_program_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ConferenceProgram'), 'required' => false)),
      'speaker_image_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SpeakerImage'), 'required' => false)),
      'content'               => new sfValidatorString(),
      'order_nr'              => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('conference_speaker[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConferenceSpeaker';
  }

}
