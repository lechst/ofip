<?php

/**
 * BaseMenuCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $order_nr
 * @property Doctrine_Collection $HomepageBoxes
 * @property Doctrine_Collection $Subpage
 * @property Doctrine_Collection $StaticContentSubpage
 * 
 * @method string              getName()                 Returns the current record's "name" value
 * @method integer             getOrderNr()              Returns the current record's "order_nr" value
 * @method Doctrine_Collection getHomepageBoxes()        Returns the current record's "HomepageBoxes" collection
 * @method Doctrine_Collection getSubpage()              Returns the current record's "Subpage" collection
 * @method Doctrine_Collection getStaticContentSubpage() Returns the current record's "StaticContentSubpage" collection
 * @method MenuCategory        setName()                 Sets the current record's "name" value
 * @method MenuCategory        setOrderNr()              Sets the current record's "order_nr" value
 * @method MenuCategory        setHomepageBoxes()        Sets the current record's "HomepageBoxes" collection
 * @method MenuCategory        setSubpage()              Sets the current record's "Subpage" collection
 * @method MenuCategory        setStaticContentSubpage() Sets the current record's "StaticContentSubpage" collection
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMenuCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('menu_category');
        $this->hasColumn('name', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 120,
             ));
        $this->hasColumn('order_nr', 'integer', null, array(
             'type' => 'integer',
             'unique' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('HomepageBoxes', array(
             'local' => 'id',
             'foreign' => 'menu_category_id'));

        $this->hasMany('Subpage', array(
             'local' => 'id',
             'foreign' => 'menu_category_id'));

        $this->hasMany('StaticContentSubpage', array(
             'local' => 'id',
             'foreign' => 'menu_category_id'));
    }
}