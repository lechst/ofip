<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($menu_category->getId(), 'menu_category_edit', $menu_category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $menu_category->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_order_nr">
  <?php echo $menu_category->getOrderNr() ?>
</td>
