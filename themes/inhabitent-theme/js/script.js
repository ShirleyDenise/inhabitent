 (function( $ ) {
     $('.search-submit').on('click', function() {
         event.preventDefault();
 +       event.stopPropagation();
 +       $('.search-field').toggle().focus();
     });

     
})( jQuery ); 