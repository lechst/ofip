

<div class="container_subpage_menu" >

    <ul class="subpage_menu" >
                        <?php $i = 0;
            foreach ($menu_subpage_left as $ms) { ?>

                        <?php if ($ms['is_module'] == 0) { ?>
                
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li class="box_menu" style="border-color:#009eff;"><a style="color:#009eff;" href="<?php echo ('/strona/'.$ms['id'])  ?>"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>
               <?php }  else  { ?>
                        <?php if ($ms['menu_category_id'] == 2) { ?>
                                <li class="box_menu" style="border-color:#009eff;"><a style="color:#009eff;" href="/rejestracja"><?php echo $ms['name'] ?></a></li>
                        <?php }  ?>         
               <?php }  ?>
                                
                <?php $i++;
            } ?>
        
    </ul>

</div>

<div class="container_subpage_content" style="border-color:#009eff;">

<h2>FORMULARZ ZGŁOSZENIOWY<br />
VI OGÓLNOPOLSKIE FORUM INICJATYW POZARZĄDOWYCH<br />
CZĘŚĆ KONFERENCYJNA<br />
Warszawa 16-17 września 2011 r.</h2>
    
    <p>Wersja formularza do wysłania pocztą: <br />
    <a href="/pliki/formularz_OFIP.doc">formularz_OFIP.doc</a></p>

<?php include_partial('form', array('form' => $form)) ?>

</div>

<div class="clear"></div>