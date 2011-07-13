<?php use_helper('I18N', 'Date') ?>
<?php include_partial('registration_form/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Registration form', array(), 'messages') ?></h1>

  <?php include_partial('registration_form/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('registration_form/form_header', array('registration_form' => $registration_form, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('registration_form/form', array('registration_form' => $registration_form, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('registration_form/form_footer', array('registration_form' => $registration_form, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
