<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($subpage->getId(), 'subpage_edit', $subpage) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_menu_category_id">
  <?php echo $subpage->getMenuCategoryId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $subpage->getName() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_menu">
  <?php echo get_partial('subpage/list_field_boolean', array('value' => $subpage->getIsMenu())) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_module">
  <?php echo get_partial('subpage/list_field_boolean', array('value' => $subpage->getIsModule())) ?>
</td>
