<?php

/**
 * BaseUserAreaUserImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $filename
 * @property Doctrine_Collection $UserAreaUsers
 * 
 * @method string              getFilename()      Returns the current record's "filename" value
 * @method Doctrine_Collection getUserAreaUsers() Returns the current record's "UserAreaUsers" collection
 * @method UserAreaUserImage   setFilename()      Sets the current record's "filename" value
 * @method UserAreaUserImage   setUserAreaUsers() Sets the current record's "UserAreaUsers" collection
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserAreaUserImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_area_user_image');
        $this->hasColumn('filename', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('UserAreaUsers', array(
             'local' => 'id',
             'foreign' => 'user_area_user_image_id'));
    }
}