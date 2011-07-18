<ul class="menu_main">

    <li class="menu_main_box box_1"><a class="a_main" href=""><span><?php echo $menu_category[0] ?></span></a>
            <ul>
            
            
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                <?php if ($ms['is_module'] == 0) { ?>
                
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li><a href="/strona/<?php echo $ms['id'] ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li><a href="/<?php echo $ms['id'] ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>         
               <?php }  ?>
                                
                <?php $i++;
            } ?>
                        
            
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_2"><a class="a_main" href=""><span><?php echo $menu_category[1] ?></span></a>
        <ul>
            
            
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                        <?php if ($ms['menu_category_id'] == 3) { ?>
                                <li><a href=""><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
 

                <?php $i++;
            } ?>
                        
            
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_3"><a class="a_main" href=""><span><?php echo $menu_category[2] ?></span></a>
        <ul>
            <li><a href=""><?php echo $menu_subpage[4] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[5] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[6] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[7] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[8] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[9] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[10] ?></a></li>
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_4"><a class="a_main" href=""><span><?php echo $menu_category[3] ?></span></a>
        <ul>
            <li><a href=""><?php echo $menu_subpage[11] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[12] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[13] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[14] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[15] ?></a></li>
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_5"><a class="a_main" href=""><span><?php echo $menu_category[4] ?></span></a>
        <ul>
            <li><a href=""><?php echo $menu_subpage[16] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[17] ?></a></li>
            <li><a href=""><?php echo $menu_subpage[18] ?></a></li>
        </ul>   
        <div class="clear"></div>
    </li>

</ul>

<div class="clear"></div>
