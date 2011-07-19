

<div class="container_subpage_menu">

    <ul class="subpage_menu">
                        <?php $i = 0;
            foreach ($menu_subpage_left as $ms) { ?>

                        <?php if ($ms['is_module'] == 0) { ?>
                
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li class="box_menu"><a href="<?php echo ('/ofip/web/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li class="box_menu"><a href="/ofip/web/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>         
               <?php }  ?>
                                
                <?php $i++;
            } ?>
        
    </ul>

</div>

<div class="container_subpage_content">

<h2>FORMULARZ ZGŁOSZENIOWY<br />
VI OGÓLNOPOLSKIE FORUM INICJATYW POZARZĄDOWYCH<br />
CZĘŚĆ KONFERENCYJNA<br />
Warszawa 16-17 września 2011 r.</h2>

    <div class="reg-form">
        <div class="field">
            dziękujemy za rejestrację
        </div>
           </div>
        
    
</div>

<div class="clear"></div>