<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($subpage->getId(), 'subpage_edit', $subpage) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $subpage->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_event">
  <?php echo $subpage->getEvent() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $subpage->getContent() ?>
</td>
