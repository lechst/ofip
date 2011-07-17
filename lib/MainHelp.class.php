<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainHelp
 *
 * @author Lech Stawikowski
 */
class MainHelp {
    
    public static function getMenuCategories() {
      $menu_category = Doctrine::getTable('MenuCategory')
      ->createQuery('a')
      ->execute();
      
      return $menu_category;
    }
    
    public static function getMenuSubpages() {
      $menu_subpage = Doctrine::getTable('Subpage')
      ->createQuery('a')
      ->execute();
      
      return $menu_subpage;
    }
    
}
