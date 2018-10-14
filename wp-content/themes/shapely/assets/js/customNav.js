$( document ).ready(function() {
    console.log('ready to use', $( window ).width())
    
    window.onscroll = function() {navBackground()};
    // if($( window ).width() > 800){
    //     window.onscroll = function() {myFunction()};
    // }

    // if($( window ).width() < 650){

    //     $('h1').removeClass('navHead').addClass('navHeadScroll');
    //     $('.preScroll').addClass('liScroll');
    //     $( "#menuGlyph" ).show();
    //     $( '.headContainer').css({'background-color' : 'rgba(0, 0, 0, 0.342'});

    // }

    function navBackground() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            
            $( 'nav').css({'background-color' : 'rgba(116, 93, 249, 0.57)'});
            $( 'header' ).show();
            
                
        } else {
            
            $( 'nav').css({'background-color' : ''});
            
            
        }
    }
    
   
   
  });