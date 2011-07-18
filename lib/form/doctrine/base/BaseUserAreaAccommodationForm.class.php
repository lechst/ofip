<?php

/**
 * UserAreaAccommodation form base class.
 *
 * @method UserAreaAccommodation getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserAreaAccommodationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'place'    => new sfWidgetFormInputText(),
      'image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'content'  => new sfWidgetFormTextarea(),
      'order_nr' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'place'    => new sfValidatorString(array('max_length' => 120)),
      'image_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
      'content'  => new sfValidatorString(),
      'order_nr' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('user_area_accommodation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserAreaAccommodation';
  }

}
