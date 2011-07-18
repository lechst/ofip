<?php use_helper('I18N', 'Date') ?>
<?php include_partial('subpage/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Subpage', array(), 'messages') ?></h1>

  <?php include_partial('subpage/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('subpage/form_header', array('subpage' => $subpage, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('subpage/form', array('subpage' => $subpage, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('subpage/form_footer', array('subpage' => $subpage, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
