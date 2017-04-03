/**
 * Created by Marina on 29.03.2017.
 */
jQuery(function($){
    $('#true_loadmore a').click(function(e){
        e.preventDefault();
        e.stopPropagation();
       $(this).html('<span class="loader">Load More</span>');
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url: wp_vars.ajax_url,
            data:data,
            type:'POST',
            dataType: 'html',
            success:function(result){
                if( result ) {
                    current_page++;
                    result = $(result);
                    $('#true_loadmore').prev('#ajax-content').find('.project-list').append(result);
                    $(result).find('.project-img-slide').slick({
                        autoplay: true,
                        dots: true,
                        nextArrow: false,
                        prevArrow: false,
                    });
                    if (current_page == max_pages) $("#true_loadmore").css('display','none');
                } else {
                    $('#true_loadmore').css('display','none');
                }
            },

        });
    });
});


