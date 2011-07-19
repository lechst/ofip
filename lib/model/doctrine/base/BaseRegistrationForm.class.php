<?php

/**
 * BaseRegistrationForm
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $my_email
 * @property string $organization_name
 * @property string $street
 * @property string $postal_code
 * @property string $locality
 * @property string $voivodeship
 * @property string $phone_number
 * @property string $fax
 * @property string $organization_email
 * @property string $internet_page
 * @property string $NIP
 * @property boolean $agreement1
 * @property integer $fee_number
 * @property string $fac_name
 * @property string $fac_address
 * @property string $fac_NIP
 * @property boolean $accommodation
 * @property boolean $participation1
 * @property boolean $participation2
 * @property boolean $participation3
 * @property boolean $participation4
 * @property boolean $participation5
 * @property boolean $participation6
 * @property boolean $participation7
 * @property boolean $participation8
 * @property boolean $participation9
 * @property boolean $participation10
 * @property boolean $participation11
 * @property boolean $participation12
 * @property boolean $participation13
 * @property boolean $participation14
 * @property boolean $participation15
 * @property boolean $agreement2
 * 
 * @method string           getName()               Returns the current record's "name" value
 * @method string           getMyEmail()            Returns the current record's "my_email" value
 * @method string           getOrganizationName()   Returns the current record's "organization_name" value
 * @method string           getStreet()             Returns the current record's "street" value
 * @method string           getPostalCode()         Returns the current record's "postal_code" value
 * @method string           getLocality()           Returns the current record's "locality" value
 * @method string           getVoivodeship()        Returns the current record's "voivodeship" value
 * @method string           getPhoneNumber()        Returns the current record's "phone_number" value
 * @method string           getFax()                Returns the current record's "fax" value
 * @method string           getOrganizationEmail()  Returns the current record's "organization_email" value
 * @method string           getInternetPage()       Returns the current record's "internet_page" value
 * @method string           getNIP()                Returns the current record's "NIP" value
 * @method boolean          getAgreement1()         Returns the current record's "agreement1" value
 * @method integer          getFeeNumber()          Returns the current record's "fee_number" value
 * @method string           getFacName()            Returns the current record's "fac_name" value
 * @method string           getFacAddress()         Returns the current record's "fac_address" value
 * @method string           getFacNIP()             Returns the current record's "fac_NIP" value
 * @method boolean          getAccommodation()      Returns the current record's "accommodation" value
 * @method boolean          getParticipation1()     Returns the current record's "participation1" value
 * @method boolean          getParticipation2()     Returns the current record's "participation2" value
 * @method boolean          getParticipation3()     Returns the current record's "participation3" value
 * @method boolean          getParticipation4()     Returns the current record's "participation4" value
 * @method boolean          getParticipation5()     Returns the current record's "participation5" value
 * @method boolean          getParticipation6()     Returns the current record's "participation6" value
 * @method boolean          getParticipation7()     Returns the current record's "participation7" value
 * @method boolean          getParticipation8()     Returns the current record's "participation8" value
 * @method boolean          getParticipation9()     Returns the current record's "participation9" value
 * @method boolean          getParticipation10()    Returns the current record's "participation10" value
 * @method boolean          getParticipation11()    Returns the current record's "participation11" value
 * @method boolean          getParticipation12()    Returns the current record's "participation12" value
 * @method boolean          getParticipation13()    Returns the current record's "participation13" value
 * @method boolean          getParticipation14()    Returns the current record's "participation14" value
 * @method boolean          getParticipation15()    Returns the current record's "participation15" value
 * @method boolean          getAgreement2()         Returns the current record's "agreement2" value
 * @method RegistrationForm setName()               Sets the current record's "name" value
 * @method RegistrationForm setMyEmail()            Sets the current record's "my_email" value
 * @method RegistrationForm setOrganizationName()   Sets the current record's "organization_name" value
 * @method RegistrationForm setStreet()             Sets the current record's "street" value
 * @method RegistrationForm setPostalCode()         Sets the current record's "postal_code" value
 * @method RegistrationForm setLocality()           Sets the current record's "locality" value
 * @method RegistrationForm setVoivodeship()        Sets the current record's "voivodeship" value
 * @method RegistrationForm setPhoneNumber()        Sets the current record's "phone_number" value
 * @method RegistrationForm setFax()                Sets the current record's "fax" value
 * @method RegistrationForm setOrganizationEmail()  Sets the current record's "organization_email" value
 * @method RegistrationForm setInternetPage()       Sets the current record's "internet_page" value
 * @method RegistrationForm setNIP()                Sets the current record's "NIP" value
 * @method RegistrationForm setAgreement1()         Sets the current record's "agreement1" value
 * @method RegistrationForm setFeeNumber()          Sets the current record's "fee_number" value
 * @method RegistrationForm setFacName()            Sets the current record's "fac_name" value
 * @method RegistrationForm setFacAddress()         Sets the current record's "fac_address" value
 * @method RegistrationForm setFacNIP()             Sets the current record's "fac_NIP" value
 * @method RegistrationForm setAccommodation()      Sets the current record's "accommodation" value
 * @method RegistrationForm setParticipation1()     Sets the current record's "participation1" value
 * @method RegistrationForm setParticipation2()     Sets the current record's "participation2" value
 * @method RegistrationForm setParticipation3()     Sets the current record's "participation3" value
 * @method RegistrationForm setParticipation4()     Sets the current record's "participation4" value
 * @method RegistrationForm setParticipation5()     Sets the current record's "participation5" value
 * @method RegistrationForm setParticipation6()     Sets the current record's "participation6" value
 * @method RegistrationForm setParticipation7()     Sets the current record's "participation7" value
 * @method RegistrationForm setParticipation8()     Sets the current record's "participation8" value
 * @method RegistrationForm setParticipation9()     Sets the current record's "participation9" value
 * @method RegistrationForm setParticipation10()    Sets the current record's "participation10" value
 * @method RegistrationForm setParticipation11()    Sets the current record's "participation11" value
 * @method RegistrationForm setParticipation12()    Sets the current record's "participation12" value
 * @method RegistrationForm setParticipation13()    Sets the current record's "participation13" value
 * @method RegistrationForm setParticipation14()    Sets the current record's "participation14" value
 * @method RegistrationForm setParticipation15()    Sets the current record's "participation15" value
 * @method RegistrationForm setAgreement2()         Sets the current record's "agreement2" value
 * 
 * @package    ofip
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistrationForm extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('registration_form');
        $this->hasColumn('name', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('my_email', 'string', 120, array(
             'type' => 'string',
             'email' => true,
             'notnull' => true,
             'length' => 120,
             ));
        $this->hasColumn('organization_name', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('street', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('postal_code', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('locality', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('voivodeship', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('phone_number', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('fax', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('organization_email', 'string', 120, array(
             'type' => 'string',
             'email' => true,
             'length' => 120,
             ));
        $this->hasColumn('internet_page', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('NIP', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
        $this->hasColumn('agreement1', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('fee_number', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('fac_name', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('fac_address', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('fac_NIP', 'string', 120, array(
             'type' => 'string',
             'length' => 120,
             ));
        $this->hasColumn('accommodation', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation1', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation2', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation3', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation4', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation5', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation6', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation7', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation8', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation9', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation10', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation11', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation12', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation13', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation14', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('participation15', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('agreement2', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}