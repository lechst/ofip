<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($static_content_subpage->getId(), 'static_content_subpage_edit', $static_content_subpage) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_menu_category_id">
  <?php echo $static_content_subpage->getMenuCategoryId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_subpage_id">
  <?php echo $static_content_subpage->getSubpageId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $static_content_subpage->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $static_content_subpage->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $static_content_subpage->getContent() ?>
</td>
