<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%order_nr%%', array('%%id%%' => link_to($menu_category->getId(), 'menu_category_edit', $menu_category), '%%name%%' => $menu_category->getName(), '%%order_nr%%' => $menu_category->getOrderNr()), 'messages') ?>
</td>
