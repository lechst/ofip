<?php

/**
 * ConferenceSpeaker filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConferenceSpeakerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'conference_program_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConferenceProgram'), 'add_empty' => true)),
      'speaker_image_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SpeakerImage'), 'add_empty' => true)),
      'content'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'order_nr'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'conference_program_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ConferenceProgram'), 'column' => 'id')),
      'speaker_image_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SpeakerImage'), 'column' => 'id')),
      'content'               => new sfValidatorPass(array('required' => false)),
      'order_nr'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('conference_speaker_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConferenceSpeaker';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'conference_program_id' => 'ForeignKey',
      'speaker_image_id'      => 'ForeignKey',
      'content'               => 'Text',
      'order_nr'              => 'Number',
    );
  }
}
