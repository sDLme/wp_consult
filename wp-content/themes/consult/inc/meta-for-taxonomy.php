<?php

add_action('admin_head', 'wpds_admin_head');
add_action('edit_term', 'wpds_save_tax_pic');
add_action('create_term', 'wpds_save_tax_pic');
function wpds_admin_head() {
    $taxonomies = array('works'); // раскомментируйте и укажите определенные таксономии, в которые хотите добавить изображение
    if (is_array($taxonomies)) {
        foreach ($taxonomies as $z_taxonomy) {
            add_action($z_taxonomy . '_add_form_fields', 'wpds_tax_field');
            add_action($z_taxonomy . '_edit_form_fields', 'wpds_tax_field');
        }
    }
}

// добавляем поле картинки в форме
function wpds_tax_field($taxonomy) {
    wp_enqueue_style('thickbox');
    wp_enqueue_script('thickbox');
    if(empty($taxonomy)) {
        echo '<div class="form-field">
                <label for="wpds_tax_pic">Изображение</label>
                <input type="text" name="wpds_tax_pic" id="wpds_tax_pic" value="" />
            </div>';
    }
    else{
        $wpds_tax_pic_url = get_option('wpds_tax_pic' . $taxonomy->term_id);
        echo '<tr class="form-field">
		<th scope="row" valign="top"><label for="wpds_tax_pic">Изображение</label></th>
		<td><input type="text" name="wpds_tax_pic" id="wpds_tax_pic" value="' . $wpds_tax_pic_url . '" /><br />';
        if(!empty($wpds_tax_pic_url))
            echo '<img src="'.$wpds_tax_pic_url.'" style="max-width:200px;border: 1px solid #ccc;padding: 5px;box-shadow: 5px 5px 10px #ccc;margin-top: 10px;" >';
        echo '</td></tr>';
    }
    echo '<script type="text/javascript">
	    jQuery(document).ready(function() {
                jQuery("#wpds_tax_pic").click(function() {
                    tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
                    return false;
                });
                window.send_to_editor = function(html) {
                    jQuery("#wpds_tax_pic").val( jQuery("img",html).attr("src") );
                    tb_remove();
                }
	    });
	</script>';
}

// сохраняем наше изображение таксономии при редактировании
function wpds_save_tax_pic($term_id) {
    if (isset($_POST['wpds_tax_pic']))
        update_option('wpds_tax_pic' . $term_id, $_POST['wpds_tax_pic']);
}

// выводим ссылку на изображение таксономии для данного term_id (NULL по-умолчанию)
function wpds_tax_pic_url($term_id = NULL) {
    if ($term_id)
        return get_option('wpds_tax_pic' . $term_id);
    elseif (is_category())
        return get_option('wpds_tax_pic' . get_query_var('cat')) ;
    elseif (is_tax()) {
        $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        return get_option('wpds_tax_pic' . $current_term->term_id);
    }
}