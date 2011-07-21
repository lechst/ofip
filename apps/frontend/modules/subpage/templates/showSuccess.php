<div class="container_subpage_menu">

    <ul class="subpage_menu" style="color:<?php echo($content['name']);?>">
                        <?php $i = 0;
            foreach ($menu_subpage_left as $ms) { ?>

                        <?php if ($ms['is_module'] == 0) { ?>
                
                        <?php if ($ms['menu_category_id'] == $content['menu_category_id']) { ?>
                                <li class="box_menu" style="border-color:<?php echo($content['name']);?>"><a style="color:<?php echo($content['name']);?>" href="<?php echo ('/ofip/web/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == $content['menu_category_id']) { ?>
                                <li class="box_menu" style="border-color:<?php echo($content['name']);?>"><a style="color:<?php echo($content['name']);?>" href="/ofip/web/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>         
               <?php }  ?>
                                
                <?php $i++;
            } ?>
        
    </ul>

</div>

<div class="container_subpage_content" style="border-color:<?php echo($content['name']);?>">

    <h2><?php echo($content['title']) ?></h2>
    <p>
        <?php echo(html_entity_decode($content['content'])) ?>
   </p>

</div>

<div class="clear"></div>
