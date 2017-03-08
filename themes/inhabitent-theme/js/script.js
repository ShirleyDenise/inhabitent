 $(function() {
    $('.site-content').click(function() {
    $('.search-field').show();
    });

    $('.search-submit').on('click', function(event) {
    event.preventDefault();
    event.stopPropagation();
    $('.search-field').toggle().focus();
    });

    


 });
(jQuery);