<?php use_helper('I18N', 'Date') ?>
<?php include_partial('static_content_subpage/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Static content subpage', array(), 'messages') ?></h1>

  <?php include_partial('static_content_subpage/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('static_content_subpage/form_header', array('static_content_subpage' => $static_content_subpage, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('static_content_subpage/form', array('static_content_subpage' => $static_content_subpage, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('static_content_subpage/form_footer', array('static_content_subpage' => $static_content_subpage, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
