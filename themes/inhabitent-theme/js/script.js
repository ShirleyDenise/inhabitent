 jQuery(function() {
    jQuery('.search-field').hide();


    jQuery('.search-submit').on('click', function(event) {
    event.preventDefault();
    event.stopPropagation();
    jQuery('.search-field').toggle(400).focus();
    });

 });
