 jQuery(function() {
    jQuery('.site-content').click(function() {
    jQuery('.search-field').show();
    });

    jQuery('.search-submit').on('click', function(event) {
    event.preventDefault();
    event.stopPropagation();
    jQuery('.search-field').toggle().focus();
    });

 });
(jQuery);