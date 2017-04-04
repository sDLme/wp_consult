/**
 * Created by Marina on 04.04.2017.
 */

jQuery(function($){
    $('#features_true_loadmore a').click(function(e){
        e.preventDefault();
        e.stopPropagation();

        var data = {
            'action': 'feature-load',
            'query': features_true_posts,
            'page' : features_current_page
        };
        $.ajax({
            url: wp_vars.ajax_url,
            data:data,
            type:'POST',
            dataType: 'html',
            success:function(result){
                if( result ) {
                    features_current_page++;
                    $('#feature-ajax-container .feature-list-page').append(result);
                    if (features_current_page == features_max_pages) $("#features_true_loadmore").css('display','none');
                } else {
                    $('#features_true_loadmore').css('display','none');
                }
            },

        });
    });
});