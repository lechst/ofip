<td colspan="7">
  <?php echo __('%%id%% - %%container_nr%% - %%event%% - %%is_active%% - %%title%% - %%content%% - %%image_id%%', array('%%id%%' => link_to($homepage_boxes->getId(), 'homepage_boxes_edit', $homepage_boxes), '%%container_nr%%' => $homepage_boxes->getContainerNr(), '%%event%%' => $homepage_boxes->getEvent(), '%%is_active%%' => get_partial('homepage_boxes/list_field_boolean', array('value' => $homepage_boxes->getIsActive())), '%%title%%' => $homepage_boxes->getTitle(), '%%content%%' => $homepage_boxes->getContent(), '%%image_id%%' => $homepage_boxes->getImageId()), 'messages') ?>
</td>