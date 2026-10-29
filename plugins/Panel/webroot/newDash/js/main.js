  jQuery(document).ready(function($){
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
      
      
    $("#menu").slicknav({
        prependTo: '#mobile-menu',
    });

      
        
     $('.maninmanu_logo').click(function(){
       $('.left_menu_area').css('left', 5 + 'px');
        $(this).hide();
    });

    $('.hide_manu').click(function(){
       $('.left_menu_area').css('left', -500 + 'px');
        $('.maninmanu_logo').show();
    });

      
    });



  