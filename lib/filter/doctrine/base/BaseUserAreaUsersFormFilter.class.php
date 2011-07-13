<?php

/**
 * UserAreaUsers filter form base class.
 *
 * @package    ofip
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserAreaUsersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_area_user_image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserAreaUserImage'), 'add_empty' => true)),
      'content'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'order_nr'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_area_user_image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserAreaUserImage'), 'column' => 'id')),
      'content'                 => new sfValidatorPass(array('required' => false)),
      'order_nr'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_area_users_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserAreaUsers';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'user_area_user_image_id' => 'ForeignKey',
      'content'                 => 'Text',
      'order_nr'                => 'Number',
    );
  }
}
