<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($archive_gallery->getId(), 'archive_gallery_edit', $archive_gallery) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_archive_id">
  <?php echo $archive_gallery->getArchiveId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_image_id">
  <?php echo $archive_gallery->getImageId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_order_nr">
  <?php echo $archive_gallery->getOrderNr() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $archive_gallery->getContent() ?>
</td>
