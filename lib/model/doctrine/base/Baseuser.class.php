<?php

/**
 * Baseuser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $last_name
 * @property string $role
 * 
 * @method string getLogin()     Returns the current record's "login" value
 * @method string getPassword()  Returns the current record's "password" value
 * @method string getName()      Returns the current record's "name" value
 * @method string getLastName()  Returns the current record's "last_name" value
 * @method string getRole()      Returns the current record's "role" value
 * @method user   setLogin()     Sets the current record's "login" value
 * @method user   setPassword()  Sets the current record's "password" value
 * @method user   setName()      Sets the current record's "name" value
 * @method user   setLastName()  Sets the current record's "last_name" value
 * @method user   setRole()      Sets the current record's "role" value
 * 
 * @package    Project
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class Baseuser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('login', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => '50',
             ));
        $this->hasColumn('password', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('name', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '40',
             ));
        $this->hasColumn('last_name', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '50',
             ));
        $this->hasColumn('role', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '10',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}