<?php

/**
 * File form.
 *
 * @package    ofip
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FileForm extends BaseFileForm
{
  public function configure()
  {
      $this->widgetSchema['filename'] = new sfWidgetFormInputFile(array(
                    'label' => 'Filename',
                ));
      
      $this->validatorSchema['filename'] = new sfValidatorFile(array(
                    'required' => false,
                    'path' => sfConfig::get('sf_upload_dir') . '/files',
                    'mime_types' => 'web_images',
                ));
  }
}
