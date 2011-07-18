<?php

/**
 * SaturdaysBreakfastSpeakerImage filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSaturdaysBreakfastSpeakerImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'filename' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'filename' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('saturdays_breakfast_speaker_image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SaturdaysBreakfastSpeakerImage';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'filename' => 'Text',
    );
  }
}
