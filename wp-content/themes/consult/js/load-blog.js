/**
 * Created by Marina on 04.04.2017.
 */
jQuery(function($){
    $('#blog_true_loadmore a').click(function(e){
        console.log('hjhkhjkj')
        e.preventDefault();
        e.stopPropagation();

        var data = {
            'action': 'blog-load',
            'query': blog_true_posts,
            'page' : blog_current_page
        };
        $.ajax({
            url: wp_vars.ajax_url,
            data:data,
            type:'POST',
            dataType: 'html',
            success:function(result){
                if( result ) {
                    blog_current_page++;
                    $('#blog-ajax-container .blog-list').append(result);
                    if (blog_current_page == blog_max_pages) $("#blog_true_loadmore").css('display','none');
                    console.log('ghjghjfkd')
                } else {
                    $('#blog_true_loadmore').css('display','none');
                }
            },
        });
    });
});
