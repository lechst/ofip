<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%event%% - %%content%%', array('%%id%%' => link_to($subpage->getId(), 'subpage_edit', $subpage), '%%name%%' => $subpage->getName(), '%%event%%' => $subpage->getEvent(), '%%content%%' => $subpage->getContent()), 'messages') ?>
</td>
