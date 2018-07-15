$(document).ready(function(){
    
    $('.carousel').flickity({
        // options
        wrapAround: true,
        cellAlign: 'left',
        pageDots: false,
        setGallerySize: false,
        imagesLoaded: true,
        contain: true,
        percentPosition: false
    });
    
    $('.hamburger').click(function() {
       $('body').toggleClass('canvas-open');
       
       $('.fmenu').toggleClass('open');
       
       $(".fmenu").on("click", "li", function () {
            //$("#nav").slideToggle();
            $(".fmenu").removeClass('open');
            $("body").removeClass('canvas-open');
        });

    });
    
    $('#fullpage').fullpage({
    
        afterLoad: function(anchorLink, index){
        var loadedSection = $(this);
        
            switch (index) {
                case 3:
                case 4:
                case 5:
                case 6:
                    $('.fmenu').addClass('visible');
                    break;
                case 1:
                case 2:
                case 7:
                case 8:
                    $('.fmenu').removeClass('visible');
                    break;
                }
    },
    
    onLeave: function(index, nextIndex, direction){
        var leavingSection = $(this);

        if(index == 4 && direction =='up'){
          $('.fmenu').removeClass('visible');
        }
    
        else if(index == 7 && direction == 'down'){
          $('.fmenu').removeClass('visible');
        }
      },
      
    afterRender: function(){

    },
      
    anchors: ['portrait','portrait-2','vita','aktuell','profil','rep','buehne','kontakt'],
    menu: '#menu',
        
    scrollOverflow: true,
    scrollOverflowReset: true,
    loopTop: false,
    loopBottom: false,
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    v2compatible: true
        
    });
    

    
    fitty('#fit');


});

