<?php

/**
 * BaseArchiveExhibitionImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $archive_id
 * @property integer $image_id
 * @property integer $order_nr
 * @property string $content
 * @property Archive $Archive
 * @property Image $Image
 * 
 * @method integer                getArchiveId()  Returns the current record's "archive_id" value
 * @method integer                getImageId()    Returns the current record's "image_id" value
 * @method integer                getOrderNr()    Returns the current record's "order_nr" value
 * @method string                 getContent()    Returns the current record's "content" value
 * @method Archive                getArchive()    Returns the current record's "Archive" value
 * @method Image                  getImage()      Returns the current record's "Image" value
 * @method ArchiveExhibitionImage setArchiveId()  Sets the current record's "archive_id" value
 * @method ArchiveExhibitionImage setImageId()    Sets the current record's "image_id" value
 * @method ArchiveExhibitionImage setOrderNr()    Sets the current record's "order_nr" value
 * @method ArchiveExhibitionImage setContent()    Sets the current record's "content" value
 * @method ArchiveExhibitionImage setArchive()    Sets the current record's "Archive" value
 * @method ArchiveExhibitionImage setImage()      Sets the current record's "Image" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArchiveExhibitionImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('archive_exhibition_image');
        $this->hasColumn('archive_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('image_id', 'integer', 8, array(
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

        $this->hasOne('Image', array(
             'local' => 'image_id',
             'foreign' => 'id'));
    }
}