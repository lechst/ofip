<?php

/**
 * PicnicParticipant filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePicnicParticipantFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'picnic_participant_image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PicnicParticipantImage'), 'add_empty' => true)),
      'content'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'order_nr'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'picnic_participant_image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PicnicParticipantImage'), 'column' => 'id')),
      'content'                     => new sfValidatorPass(array('required' => false)),
      'order_nr'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('picnic_participant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PicnicParticipant';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'picnic_participant_image_id' => 'ForeignKey',
      'content'                     => 'Text',
      'order_nr'                    => 'Number',
    );
  }
}
