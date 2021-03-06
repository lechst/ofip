<?php

/**
 * BaseUserAreaUsers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_area_user_image_id
 * @property string $content
 * @property integer $order_nr
 * @property UserAreaUserImage $UserAreaUserImage
 * 
 * @method integer           getUserAreaUserImageId()     Returns the current record's "user_area_user_image_id" value
 * @method string            getContent()                 Returns the current record's "content" value
 * @method integer           getOrderNr()                 Returns the current record's "order_nr" value
 * @method UserAreaUserImage getUserAreaUserImage()       Returns the current record's "UserAreaUserImage" value
 * @method UserAreaUsers     setUserAreaUserImageId()     Sets the current record's "user_area_user_image_id" value
 * @method UserAreaUsers     setContent()                 Sets the current record's "content" value
 * @method UserAreaUsers     setOrderNr()                 Sets the current record's "order_nr" value
 * @method UserAreaUsers     setUserAreaUserImage()       Sets the current record's "UserAreaUserImage" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserAreaUsers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_area_users');
        $this->hasColumn('user_area_user_image_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('order_nr', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UserAreaUserImage', array(
             'local' => 'user_area_user_image_id',
             'foreign' => 'id'));
    }
}