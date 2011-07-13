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
      'id'      => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
      'event'   => new sfWidgetFormInputText(),
      'content' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'event'   => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'content' => new sfValidatorString(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Subpage', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Subpage', 'column' => array('event'))),
      ))
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
