<?php

/**
 * LayoutImage form base class.
 *
 * @method LayoutImage getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLayoutImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'filename' => new sfWidgetFormInputText(),
      'order_nr' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'filename' => new sfValidatorString(array('max_length' => 120)),
      'order_nr' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('layout_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LayoutImage';
  }

}
