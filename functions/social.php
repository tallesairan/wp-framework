<?php
// Adiciona a tag og:image no head
add_action( 'wp_head', 'insert_image_src_rel_in_head', 5 );

function insert_image_src_rel_in_head() {
    global $post;

    if ( !is_singular()) //if it is not a post or a page
        return;
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image= get_bloginfo('template_directory') ."/images/padrao-facebook.jpg"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-facebook' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
}


