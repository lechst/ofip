<?php

/**
 * BaseHomepageBoxes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $container_nr
 * @property integer $menu_category_id
 * @property boolean $is_active
 * @property string $title
 * @property string $content
 * @property integer $image_id
 * @property MenuCategory $MenuCategory
 * @property Image $Image
 * 
 * @method integer       getContainerNr()      Returns the current record's "container_nr" value
 * @method integer       getMenuCategoryId()   Returns the current record's "menu_category_id" value
 * @method boolean       getIsActive()         Returns the current record's "is_active" value
 * @method string        getTitle()            Returns the current record's "title" value
 * @method string        getContent()          Returns the current record's "content" value
 * @method integer       getImageId()          Returns the current record's "image_id" value
 * @method MenuCategory  getMenuCategory()     Returns the current record's "MenuCategory" value
 * @method Image         getImage()            Returns the current record's "Image" value
 * @method HomepageBoxes setContainerNr()      Sets the current record's "container_nr" value
 * @method HomepageBoxes setMenuCategoryId()   Sets the current record's "menu_category_id" value
 * @method HomepageBoxes setIsActive()         Sets the current record's "is_active" value
 * @method HomepageBoxes setTitle()            Sets the current record's "title" value
 * @method HomepageBoxes setContent()          Sets the current record's "content" value
 * @method HomepageBoxes setImageId()          Sets the current record's "image_id" value
 * @method HomepageBoxes setMenuCategory()     Sets the current record's "MenuCategory" value
 * @method HomepageBoxes setImage()            Sets the current record's "Image" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHomepageBoxes extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('homepage_boxes');
        $this->hasColumn('container_nr', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('menu_category_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('title', 'string', 512, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 512,
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('image_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MenuCategory', array(
             'local' => 'menu_category_id',
             'foreign' => 'id'));

        $this->hasOne('Image', array(
             'local' => 'image_id',
             'foreign' => 'id'));
    }
}