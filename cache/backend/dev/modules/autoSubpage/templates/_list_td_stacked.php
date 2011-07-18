<td colspan="5">
  <?php echo __('%%id%% - %%menu_category_id%% - %%name%% - %%is_menu%% - %%is_module%%', array('%%id%%' => link_to($subpage->getId(), 'subpage_edit', $subpage), '%%menu_category_id%%' => $subpage->getMenuCategoryId(), '%%name%%' => $subpage->getName(), '%%is_menu%%' => get_partial('subpage/list_field_boolean', array('value' => $subpage->getIsMenu())), '%%is_module%%' => get_partial('subpage/list_field_boolean', array('value' => $subpage->getIsModule()))), 'messages') ?>
</td>
