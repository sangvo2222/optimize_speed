//* TN Dequeue Styles - Remove Dashicons from Genesis Theme
add_action( 'wp_print_styles', 'tn_dequeue_dashicons_style' );
function tn_dequeue_dashicons_style() { 
      wp_dequeue_style( 'dashicons' );
}
