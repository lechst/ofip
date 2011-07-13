<?php

/**
 * Archive filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArchiveFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'edition'  => new sfWidgetFormFilterInput(),
      'link_to'  => new sfWidgetFormFilterInput(),
      'image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'edition'  => new sfValidatorPass(array('required' => false)),
      'link_to'  => new sfValidatorPass(array('required' => false)),
      'image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Image'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('archive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Archive';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'edition'  => 'Text',
      'link_to'  => 'Text',
      'image_id' => 'ForeignKey',
    );
  }
}
