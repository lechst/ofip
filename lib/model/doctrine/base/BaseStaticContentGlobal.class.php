<?php

/**
 * BaseStaticContentGlobal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $title
 * @property string $content
 * 
 * @method string              getName()    Returns the current record's "name" value
 * @method string              getTitle()   Returns the current record's "title" value
 * @method string              getContent() Returns the current record's "content" value
 * @method StaticContentGlobal setName()    Sets the current record's "name" value
 * @method StaticContentGlobal setTitle()   Sets the current record's "title" value
 * @method StaticContentGlobal setContent() Sets the current record's "content" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStaticContentGlobal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('static_content_global');
        $this->hasColumn('name', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}