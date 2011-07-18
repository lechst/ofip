<?php

/**
 * PicnicPlan filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePicnicPlanFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'place'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'     => new sfValidatorPass(array('required' => false)),
      'place'    => new sfValidatorPass(array('required' => false)),
      'content'  => new sfValidatorPass(array('required' => false)),
      'image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Image'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('picnic_plan_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PicnicPlan';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'name'     => 'Text',
      'place'    => 'Text',
      'content'  => 'Text',
      'image_id' => 'ForeignKey',
    );
  }
}
