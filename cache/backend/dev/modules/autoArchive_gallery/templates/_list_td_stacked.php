<td colspan="5">
  <?php echo __('%%id%% - %%archive_id%% - %%image_id%% - %%order_nr%% - %%content%%', array('%%id%%' => link_to($archive_gallery->getId(), 'archive_gallery_edit', $archive_gallery), '%%archive_id%%' => $archive_gallery->getArchiveId(), '%%image_id%%' => $archive_gallery->getImageId(), '%%order_nr%%' => $archive_gallery->getOrderNr(), '%%content%%' => $archive_gallery->getContent()), 'messages') ?>
</td>
