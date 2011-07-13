<?php

/**
 * ArchiveExhibitionVideo filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArchiveExhibitionVideoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'archive_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Archive'), 'add_empty' => true)),
      'video_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Video'), 'add_empty' => true)),
      'order_nr'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'archive_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Archive'), 'column' => 'id')),
      'video_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Video'), 'column' => 'id')),
      'order_nr'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'content'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('archive_exhibition_video_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArchiveExhibitionVideo';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'archive_id' => 'ForeignKey',
      'video_id'   => 'ForeignKey',
      'order_nr'   => 'Number',
      'content'    => 'Text',
    );
  }
}
