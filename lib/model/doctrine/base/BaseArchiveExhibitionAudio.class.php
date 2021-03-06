<?php

/**
 * BaseArchiveExhibitionAudio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $archive_id
 * @property integer $audio_id
 * @property integer $order_nr
 * @property string $content
 * @property Archive $Archive
 * @property Audio $Audio
 * 
 * @method integer                getArchiveId()  Returns the current record's "archive_id" value
 * @method integer                getAudioId()    Returns the current record's "audio_id" value
 * @method integer                getOrderNr()    Returns the current record's "order_nr" value
 * @method string                 getContent()    Returns the current record's "content" value
 * @method Archive                getArchive()    Returns the current record's "Archive" value
 * @method Audio                  getAudio()      Returns the current record's "Audio" value
 * @method ArchiveExhibitionAudio setArchiveId()  Sets the current record's "archive_id" value
 * @method ArchiveExhibitionAudio setAudioId()    Sets the current record's "audio_id" value
 * @method ArchiveExhibitionAudio setOrderNr()    Sets the current record's "order_nr" value
 * @method ArchiveExhibitionAudio setContent()    Sets the current record's "content" value
 * @method ArchiveExhibitionAudio setArchive()    Sets the current record's "Archive" value
 * @method ArchiveExhibitionAudio setAudio()      Sets the current record's "Audio" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArchiveExhibitionAudio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('archive_exhibition_audio');
        $this->hasColumn('archive_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('audio_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('order_nr', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Archive', array(
             'local' => 'archive_id',
             'foreign' => 'id'));

        $this->hasOne('Audio', array(
             'local' => 'audio_id',
             'foreign' => 'id'));
    }
}