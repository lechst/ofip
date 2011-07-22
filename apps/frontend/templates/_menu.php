<ul class="menu_main">

    <li class="menu_main_box box_1"><a class="a_main" href="<?php echo ('/strona/'.'13')  ?>"><span><?php echo $menu_category[0] ?></span></a>
            <ul>
            
            
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                <?php if ($ms['is_module'] == 0) { ?>
                
                        <?php if ($ms['menu_category_id'] == 1) { ?>
                                <li><a href="/strona/<?php echo $ms['id'] ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 1) { ?>
                                <li><a href="/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>         
               <?php }  ?>
                                
                <?php $i++;
            } ?>
                        
            
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_2"><a class="a_main" href="<?php echo ('/strona/'.'9')  ?>"><span><?php echo $menu_category[1] ?></span></a>
        <ul>
            
            <li><a href="/strona/7">Strefa uczestnika</a></li>
            <li><a href="/rejestracja">Rejestracja indywidualna</a></li>
            <li><a href="/strona/8">Rejestracja grupowa</a></li>
            <li><a href="/strona/3">Noclegi</a></li>
            <li><a href="/strona/4">Fundusz Stypendialny</a></li>
            <li><a href="/strona/2">Miejsce</a></li>
            <li><a href="/strona/5">Targi Organizacji Wspierających</a></li>

       
<!--
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                <?php if ($ms['is_module'] == 0) { ?>
                
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li><a href="<?php echo ('/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li><a href="/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>         
               <?php }  ?>
                                
                <?php $i++;
            } ?>
-->    

        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_3"><a class="a_main" href="<?php echo ('/strona/'.'10')  ?>"><span><?php echo $menu_category[2] ?></span></a>
        <ul>
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                <?php if ($ms['is_module'] == 0) { ?>

                        <?php if ($ms['menu_category_id'] == 3) { ?>
                                <li><a href="<?php echo ('/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 3) { ?>
                                <li><a href="/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  ?>

                <?php $i++;
            } ?>
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_4"><a class="a_main" href="<?php echo ('/strona/'.'11')  ?>"><span><?php echo $menu_category[3] ?></span></a>
        <ul>
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                <?php if ($ms['is_module'] == 0) { ?>

                        <?php if ($ms['menu_category_id'] == 4) { ?>
                                <li><a href="<?php echo ('/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 4) { ?>
                                <li><a href="/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  ?>

                <?php $i++;
            } ?>
        </ul>   
        <div class="clear"></div>
    </li>
    <li class="menu_main_box box_5"><a class="a_main" href="<?php echo ('/strona/'.'12')  ?>"><span><?php echo $menu_category[4] ?></span></a>
        <ul>
                        <?php $i = 0;
            foreach ($menu_subpage as $ms) { ?>

                <?php if ($ms['is_module'] == 0) { ?>

                        <?php if ($ms['menu_category_id'] == 5) { ?>
                                <li><a href="<?php echo ('/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 5) { ?>
                                <li><a href="/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  ?>

                <?php $i++;
            } ?>
        </ul>   
        <div class="clear"></div>
    </li>

</ul>

<div class="clear"></div>
