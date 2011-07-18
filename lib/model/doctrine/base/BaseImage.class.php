<?php

/**
 * BaseImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $filename
 * @property Doctrine_Collection $HomepageBoxes
 * @property Doctrine_Collection $Archive
 * @property Doctrine_Collection $ArchiveGallery
 * @property Doctrine_Collection $ArchiveExhibitionImage
 * @property Doctrine_Collection $UserAreaAccommodation
 * @property Doctrine_Collection $CafeteriaProgram
 * @property Doctrine_Collection $SpectacleProgram
 * @property Doctrine_Collection $ConcertProgram
 * @property Doctrine_Collection $Exhibitions
 * @property Doctrine_Collection $Calendar
 * @property Doctrine_Collection $PicnicPlan
 * 
 * @method string              getFilename()               Returns the current record's "filename" value
 * @method Doctrine_Collection getHomepageBoxes()          Returns the current record's "HomepageBoxes" collection
 * @method Doctrine_Collection getArchive()                Returns the current record's "Archive" collection
 * @method Doctrine_Collection getArchiveGallery()         Returns the current record's "ArchiveGallery" collection
 * @method Doctrine_Collection getArchiveExhibitionImage() Returns the current record's "ArchiveExhibitionImage" collection
 * @method Doctrine_Collection getUserAreaAccommodation()  Returns the current record's "UserAreaAccommodation" collection
 * @method Doctrine_Collection getCafeteriaProgram()       Returns the current record's "CafeteriaProgram" collection
 * @method Doctrine_Collection getSpectacleProgram()       Returns the current record's "SpectacleProgram" collection
 * @method Doctrine_Collection getConcertProgram()         Returns the current record's "ConcertProgram" collection
 * @method Doctrine_Collection getExhibitions()            Returns the current record's "Exhibitions" collection
 * @method Doctrine_Collection getCalendar()               Returns the current record's "Calendar" collection
 * @method Doctrine_Collection getPicnicPlan()             Returns the current record's "PicnicPlan" collection
 * @method Image               setFilename()               Sets the current record's "filename" value
 * @method Image               setHomepageBoxes()          Sets the current record's "HomepageBoxes" collection
 * @method Image               setArchive()                Sets the current record's "Archive" collection
 * @method Image               setArchiveGallery()         Sets the current record's "ArchiveGallery" collection
 * @method Image               setArchiveExhibitionImage() Sets the current record's "ArchiveExhibitionImage" collection
 * @method Image               setUserAreaAccommodation()  Sets the current record's "UserAreaAccommodation" collection
 * @method Image               setCafeteriaProgram()       Sets the current record's "CafeteriaProgram" collection
 * @method Image               setSpectacleProgram()       Sets the current record's "SpectacleProgram" collection
 * @method Image               setConcertProgram()         Sets the current record's "ConcertProgram" collection
 * @method Image               setExhibitions()            Sets the current record's "Exhibitions" collection
 * @method Image               setCalendar()               Sets the current record's "Calendar" collection
 * @method Image               setPicnicPlan()             Sets the current record's "PicnicPlan" collection
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('image');
        $this->hasColumn('filename', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('HomepageBoxes', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('Archive', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('ArchiveGallery', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('ArchiveExhibitionImage', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('UserAreaAccommodation', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('CafeteriaProgram', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('SpectacleProgram', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('ConcertProgram', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('Exhibitions', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('Calendar', array(
             'local' => 'id',
             'foreign' => 'image_id'));

        $this->hasMany('PicnicPlan', array(
             'local' => 'id',
             'foreign' => 'image_id'));
    }
}