<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackendFileForm
 *
 * @author Lech Stawikowski
 */
class BackendFileForm extends FileForm {

    public function configure() {
        parent::configure();
        
        $this->widgetSchema['filename'] = new sfWidgetFormInputFileEditable(array(
                    'label' => 'Filename',
                    'file_src' => '/uploads/files/' . $this->getObject()->getFilename(),
                    'is_image' => true,
                    'edit_mode' => !$this->isNew(),
                    'template' => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
                ));

        $this->validatorSchema['filename_delete'] = new sfValidatorPass();
    }

}
