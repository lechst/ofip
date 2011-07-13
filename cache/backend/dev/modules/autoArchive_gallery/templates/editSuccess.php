<?php use_helper('I18N', 'Date') ?>
<?php include_partial('archive_gallery/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Archive gallery', array(), 'messages') ?></h1>

  <?php include_partial('archive_gallery/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('archive_gallery/form_header', array('archive_gallery' => $archive_gallery, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('archive_gallery/form', array('archive_gallery' => $archive_gallery, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('archive_gallery/form_footer', array('archive_gallery' => $archive_gallery, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
