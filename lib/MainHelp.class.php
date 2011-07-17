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
    
    public static function getCategories() {
      $menu_category = Doctrine::getTable('MenuCategory')
      ->createQuery('a')
      ->execute();
      
      return $menu_category;
    }
    
}
