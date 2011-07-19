<?php

/**
 * RegistrationForm form.
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegistrationFormForm extends BaseRegistrationFormForm
{
  public function configure()
  {
      parent::configure();
      
      $this->widgetSchema->getFormFormatter()->setTranslationCatalogue('registration_form');
      
     
     $this->setWidget('internet_page', new sfWidgetFormInputText());
     $this->setWidget('fee_number', new sfWidgetFormSelect(array('choices'=>array('105'=>'75zł + 30 zł = 105 zł (brutto)- koszt uczestnictwa w konferencji oraz zimny lunch* 16 i 17 września;' , '90'=>'75zł + 15 zł = 90 zł (brutto)- koszt uczestnictwa w konferencji i zimny lunch 16 września;' ,'75'=>'75 zł (brutto)- koszt uczestnictwa w konferencji'))));
      
     $this->setValidator('agreement1', new sfValidatorBoolean(array('required'=>true)));
     $this->setValidator('agreement2', new sfValidatorBoolean(array('required'=>true)));
     
      /* 
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(array('label'=>" ")),
      'is_group'               => new sfWidgetFormInputHidden(array('label'=>" ")),
      'name'                   => new sfWidgetFormInputText(array('label'=>"Imię i nazwisko przedstawicielki / przedstawiciela organizacji:")),
      'my_email'               => new sfWidgetFormInputText(array('label'=>"E-mail:")),
      'organization_name'      => new sfWidgetFormInputText(array('label'=>"Pełna nazwa organizacji:")),
      'street'                 => new sfWidgetFormInputText(array('label'=>"Ulica:")),
      'postal_code'            => new sfWidgetFormInputText(array('label'=>"Kod pocztowy:")),
      'locality'               => new sfWidgetFormInputText(array('label'=>"Miejscowość:")),
      'voivodeship'            => new sfWidgetFormInputText(array('label'=>"Województwo:")),
      'phone_number'           => new sfWidgetFormInputText(array('label'=>"Telefon (z nr kierunkowym):")),
      'fax'                    => new sfWidgetFormInputText(array('label'=>"Fax:")),
      'organization_email'     => new sfWidgetFormInputText(array('label'=>"E-mail organizacji:")),
      'internet_page'          => new sfWidgetFormInputText(array('label'=>"strona internetowa:")),
      'NIP'                    => new sfWidgetFormInputText(array('label'=>"NIP organizacji:")),
      'agreement1'             => new sfWidgetFormInputCheckbox(array('label'=>"Wyrażam zgodę na opublikowanie mojego imienia i nazwiska oraz organizacji na liście uczestników VI Ogólnopolskiego Forum Inicjatyw Pozarządowych na stronie http://www.ofip.org.pl/:")),
      'number_of_participants' => new sfWidgetFormInputHidden(array('label'=>" ")),
      'fee_number'             => new sfWidgetFormSelect(array('label'=>"Zgłaszam swój udział w konferencji i jednocześnie deklaruję opłatę w wysokości:" , 'choices'=>array('1'=>'75zł + 30 zł = 105 zł (brutto)- koszt uczestnictwa w konferencji oraz zimny lunch* 16 i 17 września;' , '2'=>'75zł + 15 zł = 90 zł (brutto)- koszt uczestnictwa w konferencji i zimny lunch 16 września;' ,'3'=>'75 zł (brutto)- koszt uczestnictwa w konferencji'))),
      'fee_total'              => new sfWidgetFormInputHidden(array('label'=>" ")),
      'fac_name'               => new sfWidgetFormInputText(array('label'=>"nazwa:")),
      'fac_address'            => new sfWidgetFormInputText(array('label'=>"adres:")),
      'fac_NIP'                => new sfWidgetFormInputText(array('label'=>"NIP:")),
      'accommodation'          => new sfWidgetFormInputCheckbox(array('label'=>"Jestem zainteresowany/a możliwością skorzystania z noclegów udostępnionych po preferencyjnych stawkach dla uczestników VI OFIP-u.")),
      'participation_1'        => new sfWidgetFormInputCheckbox(array('label'=>"Działalność charytatywna/integracja społeczna")),
      'participants_1'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_2'        => new sfWidgetFormInputCheckbox(array('label'=>"Ekologia")),
      'participants_2'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_3'        => new sfWidgetFormInputCheckbox(array('label'=>"Edukacja (przedszkolna, w wieku szkolnym, pozaszkolna)")),
      'participants_3'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_4'        => new sfWidgetFormInputCheckbox(array('label'=>"Edukacja obywatelska")),
      'participants_4'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_5'        => new sfWidgetFormInputCheckbox(array('label'=>"Infrastruktura (organizacje wspierające)")),
      'participants_5'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_6'        => new sfWidgetFormInputCheckbox(array('label'=>"Kultura")),
      'participants_6'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_7'        => new sfWidgetFormInputCheckbox(array('label'=>"Działalność na rzecz osób niepełnosprawnych")),
      'participants_7'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_8'        => new sfWidgetFormInputCheckbox(array('label'=>"Działalność na rzecz seniorów")),
      'participants_8'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_9'        => new sfWidgetFormInputCheckbox(array('label'=>"Organizacje kobiece, genderowe")),
      'participants_9'         => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_10'       => new sfWidgetFormInputCheckbox(array('label'=>"Pomoc rozwojowa (w tym działalność poza granicami Polski)")),
      'participants_10'        => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_11'       => new sfWidgetFormInputCheckbox(array('label'=>"Prawa człowieka")),
      'participants_11'        => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_12'       => new sfWidgetFormInputCheckbox(array('label'=>"Rozwój lokalny/regionalny")),
      'participants_12'        => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_13'       => new sfWidgetFormInputCheckbox(array('label'=>"Rynek pracy i aktywizacja zawodowa")),
      'participants_13'        => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_14'       => new sfWidgetFormInputCheckbox(array('label'=>"Sport amatorski i turystyka")),
      'participants_14'        => new sfWidgetFormInputHidden(array('label'=>" ")),
      'participation_15'       => new sfWidgetFormInputCheckbox(array('label'=>"Żadna z powyższych sesji nie jest zbieżna z tym, czym zajmuje się moja organizacja, w związku z tym wezmę udział w sesji VARIA")),
      'participants_15'        => new sfWidgetFormInputHidden(array('label'=>" ")),
      'agreement2'             => new sfWidgetFormInputCheckbox(array('label'=>"Wyrażam zgodę na przetwarzanie moich danych osobowych w celach rekrutacji uczestników VI Ogólnopolskiego Forum Inicjatyw Pozarządowych, zgodnie z Ustawą z dn. 29.08.1997 o ochronie danych osobowych (Dz. U. nr 133, poz. 883).")),
   
    ));
      
        $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'is_group'               => new sfValidatorString(array('required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 120)),
      'my_email'               => new sfValidatorEmail(array('max_length' => 120)),
      'organization_name'      => new sfValidatorString(array('max_length' => 120)),
      'street'                 => new sfValidatorString(array('max_length' => 120)),
      'postal_code'            => new sfValidatorString(array('max_length' => 120)),
      'locality'               => new sfValidatorString(array('max_length' => 120)),
      'voivodeship'            => new sfValidatorString(array('max_length' => 120)),
      'phone_number'           => new sfValidatorString(array('max_length' => 120)),
      'fax'                    => new sfValidatorString(array('max_length' => 120)),
      'organization_email'     => new sfValidatorEmail(array('max_length' => 120)),
      'internet_page'          => new sfValidatorString(),
      'NIP'                    => new sfValidatorString(array('max_length' => 120)),
      'agreement1'             => new sfValidatorBoolean(),
      'number_of_participants' => new sfValidatorInteger(array('required' => false)),
      'fee_number'             => new sfValidatorInteger(),
      'fee_total'              => new sfValidatorString(array('max_length' => 120 , 'required' => false)),
      'fac_name'               => new sfValidatorString(array('max_length' => 120)),
      'fac_address'            => new sfValidatorString(array('max_length' => 120)),
      'fac_NIP'                => new sfValidatorString(array('max_length' => 120)),
      'accommodation'          => new sfValidatorBoolean(),
      'participation_1'        => new sfValidatorBoolean(),
      'participants_1'         => new sfValidatorBoolean(),
      'participation_2'        => new sfValidatorBoolean(),
      'participants_2'         => new sfValidatorBoolean(),
      'participation_3'        => new sfValidatorBoolean(),
      'participants_3'         => new sfValidatorBoolean(),
      'participation_4'        => new sfValidatorBoolean(),
      'participants_4'         => new sfValidatorBoolean(),
      'participation_5'        => new sfValidatorBoolean(),
      'participants_5'         => new sfValidatorBoolean(),
      'participation_6'        => new sfValidatorBoolean(),
      'participants_6'         => new sfValidatorBoolean(),
      'participation_7'        => new sfValidatorBoolean(),
      'participants_7'         => new sfValidatorBoolean(),
      'participation_8'        => new sfValidatorBoolean(),
      'participants_8'         => new sfValidatorBoolean(),
      'participation_9'        => new sfValidatorBoolean(),
      'participants_9'         => new sfValidatorBoolean(),
      'participation_10'       => new sfValidatorBoolean(),
      'participants_10'        => new sfValidatorBoolean(),
      'participation_11'       => new sfValidatorBoolean(),
      'participants_11'        => new sfValidatorBoolean(),
      'participation_12'       => new sfValidatorBoolean(),
      'participants_12'        => new sfValidatorBoolean(),
      'participation_13'       => new sfValidatorBoolean(),
      'participants_13'        => new sfValidatorBoolean(),
      'participation_14'       => new sfValidatorBoolean(),
      'participants_14'        => new sfValidatorBoolean(),
      'participation_15'       => new sfValidatorBoolean(),
      'participants_15'        => new sfValidatorBoolean(),
      'agreement2'             => new sfValidatorBoolean(),
    ));
    */
    
  }
}
