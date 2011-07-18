<?php

/**
 * SaturdaysBreakfastSpeaker filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSaturdaysBreakfastSpeakerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'saturdays_breakfast_program_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SaturdaysBreakfastProgram'), 'add_empty' => true)),
      'saturdays_breakfast_speaker_image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SaturdaysBreakfastSpeakerImage'), 'add_empty' => true)),
      'content'                              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'order_nr'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'saturdays_breakfast_program_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SaturdaysBreakfastProgram'), 'column' => 'id')),
      'saturdays_breakfast_speaker_image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SaturdaysBreakfastSpeakerImage'), 'column' => 'id')),
      'content'                              => new sfValidatorPass(array('required' => false)),
      'order_nr'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('saturdays_breakfast_speaker_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SaturdaysBreakfastSpeaker';
  }

  public function getFields()
  {
    return array(
      'id'                                   => 'Number',
      'saturdays_breakfast_program_id'       => 'ForeignKey',
      'saturdays_breakfast_speaker_image_id' => 'ForeignKey',
      'content'                              => 'Text',
      'order_nr'                             => 'Number',
    );
  }
}
