<?php

/**
 * BaseSpeakerImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $filename
 * @property Doctrine_Collection $ConferenceSpeaker
 * 
 * @method string              getFilename()          Returns the current record's "filename" value
 * @method Doctrine_Collection getConferenceSpeaker() Returns the current record's "ConferenceSpeaker" collection
 * @method SpeakerImage        setFilename()          Sets the current record's "filename" value
 * @method SpeakerImage        setConferenceSpeaker() Sets the current record's "ConferenceSpeaker" collection
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpeakerImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('speaker_image');
        $this->hasColumn('filename', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ConferenceSpeaker', array(
             'local' => 'id',
             'foreign' => 'speaker_image_id'));
    }
}