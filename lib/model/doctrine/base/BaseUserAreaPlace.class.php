<?php

/**
 * BaseUserAreaPlace
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $place
 * @property string $content
 * 
 * @method string        getPlace()   Returns the current record's "place" value
 * @method string        getContent() Returns the current record's "content" value
 * @method UserAreaPlace setPlace()   Sets the current record's "place" value
 * @method UserAreaPlace setContent() Sets the current record's "content" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserAreaPlace extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_area_place');
        $this->hasColumn('place', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}