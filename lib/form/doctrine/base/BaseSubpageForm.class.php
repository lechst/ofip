<?php

/**
 * Subpage form base class.
 *
 * @method Subpage getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSubpageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'menu_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'add_empty' => true)),
      'name'             => new sfWidgetFormInputText(),
      'is_menu'          => new sfWidgetFormInputCheckbox(),
      'is_module'        => new sfWidgetFormInputCheckbox(),
      'module'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'menu_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'required' => false)),
      'name'             => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'is_menu'          => new sfValidatorBoolean(),
      'is_module'        => new sfValidatorBoolean(array('required' => false)),
      'module'           => new sfValidatorString(array('max_length' => 120)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Subpage', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('subpage[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subpage';
  }

}
