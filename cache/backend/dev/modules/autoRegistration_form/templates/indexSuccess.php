<?php use_helper('I18N', 'Date') ?>
<?php include_partial('registration_form/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Registration form List', array(), 'messages') ?></h1>

  <?php include_partial('registration_form/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('registration_form/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('registration_form/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('registration_form_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('registration_form/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('registration_form/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('registration_form/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('registration_form/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
