<?php

/**
 * StaticContentSubpage form base class.
 *
 * @method StaticContentSubpage getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStaticContentSubpageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'menu_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'add_empty' => true)),
      'subpage_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Subpage'), 'add_empty' => true)),
      'name'             => new sfWidgetFormInputText(),
      'title'            => new sfWidgetFormTextarea(),
      'content'          => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'menu_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'required' => false)),
      'subpage_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Subpage'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 120)),
      'title'            => new sfValidatorString(array('max_length' => 512)),
      'content'          => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('static_content_subpage[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContentSubpage';
  }

}
