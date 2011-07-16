<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($homepage_boxes->getId(), 'homepage_boxes_edit', $homepage_boxes) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_container_nr">
  <?php echo $homepage_boxes->getContainerNr() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_event">
  <?php echo $homepage_boxes->getEvent() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_active">
  <?php echo get_partial('homepage_boxes/list_field_boolean', array('value' => $homepage_boxes->getIsActive())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $homepage_boxes->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $homepage_boxes->getContent() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_image_id">
  <?php echo $homepage_boxes->getImageId() ?>
</td>
