<?php

/**
 * BaseSaturdaysBreakfastSpeakerImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $filename
 * @property Doctrine_Collection $SaturdaysBreakfastSpeaker
 * 
 * @method string                         getFilename()                  Returns the current record's "filename" value
 * @method Doctrine_Collection            getSaturdaysBreakfastSpeaker() Returns the current record's "SaturdaysBreakfastSpeaker" collection
 * @method SaturdaysBreakfastSpeakerImage setFilename()                  Sets the current record's "filename" value
 * @method SaturdaysBreakfastSpeakerImage setSaturdaysBreakfastSpeaker() Sets the current record's "SaturdaysBreakfastSpeaker" collection
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSaturdaysBreakfastSpeakerImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('saturdays_breakfast_speaker_image');
        $this->hasColumn('filename', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SaturdaysBreakfastSpeaker', array(
             'local' => 'id',
             'foreign' => 'saturdays_breakfast_speaker_image_id'));
    }
}