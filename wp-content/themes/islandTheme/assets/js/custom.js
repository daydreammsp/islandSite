$( document ).ready(function() {
    let degrees = 0;
  
    console.log('ready to use', $( window ).width())

    $('#menuGlyph').click(glyphMenu);
    $('#menuGlyph').mouseenter(glyphMouseEnter);
    $('#menuGlyph').mouseleave(glyphMouseLeave);

    $( "#menuGlyph" ).hide();
    if($( window ).width() > 800){
        window.onscroll = function() {myFunction()};
    }

    if($( window ).width() < 650){

        $('h1').removeClass('navHead').addClass('navHeadScroll');
        $('.preScroll').addClass('liScroll');
        $( "#menuGlyph" ).show();
        $( '.headContainer').css({'background-color' : 'rgba(0, 0, 0, 0.342'});

    }

    function myFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            
            $('h1').removeClass('navHead').addClass('navHeadScroll');
            $('.preScroll').addClass('liScroll');
            $( '#menuGlyph' ).show();
            $( '.headContainer').css({'background-color' : 'rgba(0, 0, 0, 0.342'});
            
            
            
        } else {
            // document.getElementById("myP").className = "";
            $('h1').removeClass('navHeadScroll').addClass('navHead');
            $('.preScroll').removeClass('liScroll')
            $( "#menuGlyph" ).hide();
            $( '.headContainer').css({'background-color' : ''});
            
            
            
            
        }
    }
    function glyphMouseEnter(){
        $('#menuGlyph').css({'transform' : 'rotate('+ 30 +'deg)'});
    }
    function glyphMouseLeave(){
        $('#menuGlyph').css({'transform' : 'rotate('+ 0 +'deg)'});
    }
    function glyphMenu(){
        degrees += 90
        $('#menuGlyph').css({'transform' : 'rotate('+ degrees +'deg)'});
        
    }
   
   
  });