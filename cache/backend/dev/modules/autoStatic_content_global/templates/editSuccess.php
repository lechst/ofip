<?php use_helper('I18N', 'Date') ?>
<?php include_partial('static_content_global/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Static content global', array(), 'messages') ?></h1>

  <?php include_partial('static_content_global/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('static_content_global/form_header', array('static_content_global' => $static_content_global, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('static_content_global/form', array('static_content_global' => $static_content_global, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('static_content_global/form_footer', array('static_content_global' => $static_content_global, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
