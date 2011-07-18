<?php

/**
 * Subpage filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSubpageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'menu_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'add_empty' => true)),
      'name'             => new sfWidgetFormFilterInput(),
      'is_menu'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_module'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'module'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'menu_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MenuCategory'), 'column' => 'id')),
      'name'             => new sfValidatorPass(array('required' => false)),
      'is_menu'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_module'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'module'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subpage_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subpage';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'menu_category_id' => 'ForeignKey',
      'name'             => 'Text',
      'is_menu'          => 'Boolean',
      'is_module'        => 'Boolean',
      'module'           => 'Text',
    );
  }
}
