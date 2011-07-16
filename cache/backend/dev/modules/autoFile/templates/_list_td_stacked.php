<td colspan="4">
  <?php echo __('%%id%% - %%filename%% - %%filesize%% - %%filetype%%', array('%%id%%' => link_to($file->getId(), 'file_edit', $file), '%%filename%%' => $file->getFilename(), '%%filesize%%' => $file->getFilesize(), '%%filetype%%' => $file->getFiletype()), 'messages') ?>
</td>
