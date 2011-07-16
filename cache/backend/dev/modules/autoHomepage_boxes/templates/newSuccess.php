<?php use_helper('I18N', 'Date') ?>
<?php include_partial('homepage_boxes/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Homepage boxes', array(), 'messages') ?></h1>

  <?php include_partial('homepage_boxes/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('homepage_boxes/form_header', array('homepage_boxes' => $homepage_boxes, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('homepage_boxes/form', array('homepage_boxes' => $homepage_boxes, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('homepage_boxes/form_footer', array('homepage_boxes' => $homepage_boxes, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>