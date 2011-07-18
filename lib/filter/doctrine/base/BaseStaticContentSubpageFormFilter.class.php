<?php

/**
 * StaticContentSubpage filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStaticContentSubpageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'menu_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'add_empty' => true)),
      'subpage_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subpage'), 'add_empty' => true)),
      'name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'menu_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MenuCategory'), 'column' => 'id')),
      'subpage_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Subpage'), 'column' => 'id')),
      'name'             => new sfValidatorPass(array('required' => false)),
      'title'            => new sfValidatorPass(array('required' => false)),
      'content'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('static_content_subpage_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContentSubpage';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'menu_category_id' => 'ForeignKey',
      'subpage_id'       => 'ForeignKey',
      'name'             => 'Text',
      'title'            => 'Text',
      'content'          => 'Text',
    );
  }
}
