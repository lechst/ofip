$(document).ready(function () {
     
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
     
});
