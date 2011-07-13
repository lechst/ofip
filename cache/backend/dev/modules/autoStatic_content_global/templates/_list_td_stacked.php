<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%content%%', array('%%id%%' => link_to($static_content_global->getId(), 'static_content_global_edit', $static_content_global), '%%name%%' => $static_content_global->getName(), '%%content%%' => $static_content_global->getContent()), 'messages') ?>
</td>
