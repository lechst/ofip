<?php

/**
 * HomepageBoxes filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseHomepageBoxesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'container_nr'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'menu_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'add_empty' => true)),
      'is_active'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'title'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'container_nr'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'menu_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MenuCategory'), 'column' => 'id')),
      'is_active'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'title'            => new sfValidatorPass(array('required' => false)),
      'content'          => new sfValidatorPass(array('required' => false)),
      'image_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Image'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('homepage_boxes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HomepageBoxes';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'container_nr'     => 'Number',
      'menu_category_id' => 'ForeignKey',
      'is_active'        => 'Boolean',
      'title'            => 'Text',
      'content'          => 'Text',
      'image_id'         => 'ForeignKey',
    );
  }
}
