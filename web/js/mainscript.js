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
            left: "-=1px"
        }, 20, 'linear', function(){
           
            x=parseInt($('.animate_logotypes').css('left'));
            
            if (x<=-1303) {
                $('.animate_logotypes').css('left', 0)
            }   

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
    
    //jQuery Logotypes Hover
    
    $(".logo_1").hover(function(){
        $(".logo_1").attr("src","images/logotype2_1.png")
        },function(){
        $(".logo_1").attr("src","images/logotype_1.png")
        });
    $(".logo_2").hover(function(){
        $(".logo_2").attr("src","images/logotype2_2.png")
        },function(){
        $(".logo_2").attr("src","images/logotype_2.png")
        });
    $(".logo_3").hover(function(){
        $(".logo_3").attr("src","images/logotype2_3.png")
        },function(){
        $(".logo_3").attr("src","images/logotype_3.png")
        });
    $(".logo_4").hover(function(){
        $(".logo_4").attr("src","images/logotype2_4.png")
        },function(){
        $(".logo_4").attr("src","images/logotype_4.png")
        });
    $(".logo_5").hover(function(){
        $(".logo_5").attr("src","images/logotype2_5.png")
        },function(){
        $(".logo_5").attr("src","images/logotype_5.png")
        });
    $(".logo_6").hover(function(){
        $(".logo_6").attr("src","images/logotype2_6.png")
        },function(){
        $(".logo_6").attr("src","images/logotype_6.png")
        });
    $(".logo_7").hover(function(){
        $(".logo_7").attr("src","images/logotype2_7.png")
        },function(){
        $(".logo_7").attr("src","images/logotype_7.png")
        });
    $(".logo_8").hover(function(){
        $(".logo_8").attr("src","images/logotype2_8.png")
        },function(){
        $(".logo_8").attr("src","images/logotype_8.png")
        });
    $(".logo_9").hover(function(){
        $(".logo_9").attr("src","images/logotype2_9.png")
        },function(){
        $(".logo_9").attr("src","images/logotype_9.png")
        });
    $(".logo_10").hover(function(){
        $(".logo_10").attr("src","images/logotype2_10.png")
        },function(){
        $(".logo_10").attr("src","images/logotype_10.png")
        });
    $(".logo_11").hover(function(){
        $(".logo_11").attr("src","images/logotype2_11.png")
        },function(){
        $(".logo_11").attr("src","images/logotype_11.png")
        });
     
    // Fixing containers on mainpage height
     
    var height1 = Math.max($('#ctnr-1').height(),$('#ctnr-2').height(),$('#ctnr-3').height());
    $('#ctnr-1').height(height1);
    $('#ctnr-2').height(height1);
    $('#ctnr-3').height(height1);
    
    var height2 = Math.max($('#ctnr-4').height(),$('#ctnr-5').height());
    $('#ctnr-4').height(height2);
    $('#ctnr-5').height(height2);
    
    // slideshow on main page
    
    ssStayTime = 4000;
    ssTransTime = 2000;
    
    ssImgs = new Array();
    ssActual = 0;
    
    $('.container_layoutimage img').each(function(index) {
        ssImgs.push($(this));
        $(this).css('opacity','0');
    }   
    );
    ssImgs[0].css('opacity','1');
    ssNumber = ssImgs.length;
    
    
    
    ssStep();        
    
    function ssStep() {
  
        ssImgs[(ssActual+1)%ssNumber].delay(ssStayTime).animate({
            opacity: 1
        },ssTransTime, function() {      
            ssActual = (ssActual+1)%ssNumber;
            
            ssStep();
                       
        });
        
        ssImgs[ssActual].delay(ssStayTime).animate({
            opacity: 0
        },ssTransTime);
  
    }
    
    
    
     
});
