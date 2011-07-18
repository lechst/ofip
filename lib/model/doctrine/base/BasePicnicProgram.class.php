<?php

/**
 * BasePicnicProgram
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property date $hour
 * @property string $place
 * @property string $content
 * 
 * @method date          getHour()    Returns the current record's "hour" value
 * @method string        getPlace()   Returns the current record's "place" value
 * @method string        getContent() Returns the current record's "content" value
 * @method PicnicProgram setHour()    Sets the current record's "hour" value
 * @method PicnicProgram setPlace()   Sets the current record's "place" value
 * @method PicnicProgram setContent() Sets the current record's "content" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePicnicProgram extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('picnic_program');
        $this->hasColumn('hour', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
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