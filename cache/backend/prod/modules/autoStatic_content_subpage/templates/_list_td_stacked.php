<td colspan="6">
  <?php echo __('%%id%% - %%menu_category_id%% - %%subpage_id%% - %%name%% - %%title%% - %%content%%', array('%%id%%' => link_to($static_content_subpage->getId(), 'static_content_subpage_edit', $static_content_subpage), '%%menu_category_id%%' => $static_content_subpage->getMenuCategoryId(), '%%subpage_id%%' => $static_content_subpage->getSubpageId(), '%%name%%' => $static_content_subpage->getName(), '%%title%%' => $static_content_subpage->getTitle(), '%%content%%' => $static_content_subpage->getContent()), 'messages') ?>
</td>
