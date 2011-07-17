<?php

/**
 * HomepageBoxes form base class.
 *
 * @method HomepageBoxes getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHomepageBoxesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'order_nr'         => new sfWidgetFormInputText(),
      'menu_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'add_empty' => true)),
      'is_active'        => new sfWidgetFormInputCheckbox(),
      'title'            => new sfWidgetFormTextarea(),
      'content'          => new sfWidgetFormTextarea(),
      'image_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'order_nr'         => new sfValidatorInteger(array('required' => false)),
      'menu_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MenuCategory'), 'required' => false)),
      'is_active'        => new sfValidatorBoolean(array('required' => false)),
      'title'            => new sfValidatorString(array('max_length' => 512)),
      'content'          => new sfValidatorString(),
      'image_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'HomepageBoxes', 'column' => array('order_nr')))
    );

    $this->widgetSchema->setNameFormat('homepage_boxes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HomepageBoxes';
  }

}
