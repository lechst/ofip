<?php

/**
 * BaseExhibitions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $link_to
 * @property integer $image_id
 * @property Image $Image
 * 
 * @method string      getName()     Returns the current record's "name" value
 * @method string      getLinkTo()   Returns the current record's "link_to" value
 * @method integer     getImageId()  Returns the current record's "image_id" value
 * @method Image       getImage()    Returns the current record's "Image" value
 * @method Exhibitions setName()     Sets the current record's "name" value
 * @method Exhibitions setLinkTo()   Sets the current record's "link_to" value
 * @method Exhibitions setImageId()  Sets the current record's "image_id" value
 * @method Exhibitions setImage()    Sets the current record's "Image" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExhibitions extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('exhibitions');
        $this->hasColumn('name', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
        $this->hasColumn('link_to', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('image_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Image', array(
             'local' => 'image_id',
             'foreign' => 'id'));
    }
}