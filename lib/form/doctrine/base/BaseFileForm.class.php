<?php

/**
 * File form base class.
 *
 * @method File getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'filename' => new sfWidgetFormInputText(),
      'filesize' => new sfWidgetFormInputText(),
      'filetype' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'filename' => new sfValidatorString(array('max_length' => 120)),
      'filesize' => new sfValidatorInteger(),
      'filetype' => new sfValidatorString(array('max_length' => 120)),
    ));

    $this->widgetSchema->setNameFormat('file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'File';
  }

}
