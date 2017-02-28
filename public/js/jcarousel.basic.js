(function($) {
    $(function() {
      $('.jcarousel').jcarousel();
        
      $('.jcarousel')
        .jcarousel({
            // Core configuration goes here
             wrap: 'circular'
        })
        .jcarouselAutoscroll({
            interval: 6000,
            target: '+=3',
            autostart: true
        });
        
      $('.jcarousel2').jcarousel();
      

        
      $('.jcarousel2')
        .jcarousel({
            // Core configuration goes here

             wrap: 'circular'
        })
        .jcarouselAutoscroll({
            interval: 3000,
            target: '+=1',
            autostart: true
        });
   });



})(jQuery);