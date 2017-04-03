/**
 * Created by Marina on 30.03.2017.
 */
jQuery(function($){
    $('#service_true_loadmore a').click(function(e){
        console.log('hjhkjk');
        e.preventDefault();
        e.stopPropagation();
        $(this).html('<span class="loader">Load More</span>');
        var data = {
            'action': 'service',
            'query': servise_true_posts,
            'page' : servise_current_page,
        };
        $.ajax({
            url: wp_vars.ajax_url,
            data: data,
            type: 'POST',
            success: function (result) {
                console.log(result);
                if (result) {
                    servise_current_page++;
                    $('#service_true_loadmore').prev('#service-ajax-content').find('.services-list').after(result);
                    if (servise_current_page == servise_max_pages) $("#service_true_loadmore").css('display', 'none');
                } else {
                    $('#service_true_loadmore').css('display', 'none');
                }
            }

        });

    });
});
