<?php

/**
 * ArchiveGallery form base class.
 *
 * @method ArchiveGallery getObject() Returns the current form's model object
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArchiveGalleryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'archive_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Archive'), 'add_empty' => true)),
      'image_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'order_nr'   => new sfWidgetFormInputText(),
      'content'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'archive_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Archive'), 'required' => false)),
      'image_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
      'order_nr'   => new sfValidatorInteger(),
      'content'    => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('archive_gallery[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveGallery';
  }

}
