<?php

/**
 * UserAreaAccommodation filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserAreaAccommodationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'place'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'content'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'order_nr' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'place'    => new sfValidatorPass(array('required' => false)),
      'image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Image'), 'column' => 'id')),
      'content'  => new sfValidatorPass(array('required' => false)),
      'order_nr' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_area_accommodation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserAreaAccommodation';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'place'    => 'Text',
      'image_id' => 'ForeignKey',
      'content'  => 'Text',
      'order_nr' => 'Number',
    );
  }
}
