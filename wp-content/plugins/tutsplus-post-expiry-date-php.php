<?php
/*
Plugin Name: Add an Expiry Date to Posts
Plugin URI: http://.tutsplus.com/tutorials/add-an-expiry-date-to-wordpress-posts--cms-22665
Description: Adds an expiry date to posts, using a the jQuery UI datepicker
Author: Rachel McCollin
Version: 1.0
 */
?>
<?php
// load the scripts for the jQuery datepicker
function tutsplus_load_jquery_datepicker() {
    wp_enqueue_script( 'jquery-ui-datepicker' );
    wp_enqueue_style( 'jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css' );
}
add_action( 'admin_enqueue_scripts', 'tutsplus_load_jquery_datepicker' );


// create the metabox for the datepicker
function tutsplus_add_expiry_date_metabox() {
    add_meta_box( 'tutsplus_expiry_date_metabox', __( 'Expiry Date', 'tutsplus'), 'tutsplus_expiry_date_metabox_callback', 'post', 'side', 'high' );
}
add_action( 'add_meta_boxes', 'tutsplus_add_expiry_date_metabox' );


// the callback function for the metabox contents
function tutsplus_expiry_date_metabox_callback( $post ) { ?>

    <form action="" method="post">

        <?php
        // add nonce for security
        wp_nonce_field( 'tutsplus_expiry_date_metabox_nonce', 'tutsplus_nonce' );

        //retrieve metadata value if it exists
        $tutsplus_expiry_date = get_post_meta( $post->ID, 'expires', true );
        ?>

        <label for "tutsplus_expiry_date"><?php __('Expiry Date', 'tutsplus' ); ?></label>

        <input type="text" class="MyDate" name="tutsplus_expiry_date" value=<?php echo esc_attr( $tutsplus_expiry_date ); ?> / >

        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.MyDate').datepicker({
                    dateFormat : 'dd-mm-yy'
                });
            });
        </script>

    </form>

<?php }



// the function to save date from the metabox
function tutsplus_save_expiry_date_meta( $post_id ) {

    //check for nonce
    if( !isset( $_POST['tutsplus_nonce'] ) ||
        !wp_verify_nonce( $_POST['tutsplus_nonce'],
            'tutsplus_expiry_date_metabox_nonce'
        ) )
        return;

    // Check if the current user has permission to edit the post. */
    if ( !current_user_can( 'edit_post', $post->ID ) )
        return;

    if ( isset( $_POST['tutsplus_expiry_date'] ) ) {
        $new_expiry_date = ( $_POST['tutsplus_expiry_date'] );
        update_post_meta( $post_id, 'expires', $new_expiry_date );
    }

}
add_action( 'save_post', 'tutsplus_save_expiry_date_meta' );

// check if the expiry date has passed when querying the post
function tutsplus_filter_expired_posts( $query ) {

    // doesn't affect admin screens
    if ( is_admin() )
        return;
    // check for main query
    if ( $query->is_main_query() ) {

        //filter out expired posts
        $today = date('d-m-Y');
        $metaquery = array(
            array(
                'key' => 'expires',
                'value' => $today,
                'type' => 'DATE',
                'compare' => '<'
            )
        );
        $query->set( 'meta_query', $metaquery );
    }
}
add_action( 'pre_get_posts', 'tutsplus_filter_expired_posts' );
?>