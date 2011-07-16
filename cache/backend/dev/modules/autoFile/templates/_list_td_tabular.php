<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($file->getId(), 'file_edit', $file) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_filename">
  <?php echo $file->getFilename() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_filesize">
  <?php echo $file->getFilesize() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_filetype">
  <?php echo $file->getFiletype() ?>
</td>
