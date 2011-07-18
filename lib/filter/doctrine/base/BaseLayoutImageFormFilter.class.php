<?php

/**
 * LayoutImage filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLayoutImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'filename' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'order_nr' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'filename' => new sfValidatorPass(array('required' => false)),
      'order_nr' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('layout_image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LayoutImage';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'filename' => 'Text',
      'order_nr' => 'Number',
    );
  }
}
