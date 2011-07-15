$(document).ready(function () {
    
    //jQuery Drop Down Menu
    
    $('.menu_main_box').hover(
        function () {
            //show its submenu
            $('ul', this).slideDown(100);
 
        },
        function () {
            //hide its submenu
            $('ul', this).slideUp(100);        
        }
        );
        
    //jQuery Logotypes Animation
    
    function animation() { 
        
        $(".animate_logotypes").animate({
            left: "-=940px"
        }, 20000, 'linear', function(){
            $('.animate_logotypes').css('left', 0);
            animation();
        });
          
    }
    
    animation();
    
    $(".animate_logotypes").mouseenter(function() {
        $(this).stop()
    });
    $(".animate_logotypes").mouseleave(function() {
        animation();
    });
     
});
