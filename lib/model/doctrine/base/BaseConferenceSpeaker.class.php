<?php

/**
 * BaseConferenceSpeaker
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $conference_program_id
 * @property integer $speaker_image_id
 * @property string $content
 * @property integer $order_nr
 * @property ConferenceProgram $ConferenceProgram
 * @property SpeakerImage $SpeakerImage
 * 
 * @method integer           getConferenceProgramId()   Returns the current record's "conference_program_id" value
 * @method integer           getSpeakerImageId()        Returns the current record's "speaker_image_id" value
 * @method string            getContent()               Returns the current record's "content" value
 * @method integer           getOrderNr()               Returns the current record's "order_nr" value
 * @method ConferenceProgram getConferenceProgram()     Returns the current record's "ConferenceProgram" value
 * @method SpeakerImage      getSpeakerImage()          Returns the current record's "SpeakerImage" value
 * @method ConferenceSpeaker setConferenceProgramId()   Sets the current record's "conference_program_id" value
 * @method ConferenceSpeaker setSpeakerImageId()        Sets the current record's "speaker_image_id" value
 * @method ConferenceSpeaker setContent()               Sets the current record's "content" value
 * @method ConferenceSpeaker setOrderNr()               Sets the current record's "order_nr" value
 * @method ConferenceSpeaker setConferenceProgram()     Sets the current record's "ConferenceProgram" value
 * @method ConferenceSpeaker setSpeakerImage()          Sets the current record's "SpeakerImage" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseConferenceSpeaker extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('conference_speaker');
        $this->hasColumn('conference_program_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('speaker_image_id', 'integer', 8, array(
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
        $this->hasOne('ConferenceProgram', array(
             'local' => 'conference_program_id',
             'foreign' => 'id'));

        $this->hasOne('SpeakerImage', array(
             'local' => 'speaker_image_id',
             'foreign' => 'id'));
    }
}