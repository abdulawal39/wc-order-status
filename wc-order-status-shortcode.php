function u_wc_order_status_sc(){
  $get_order_id = $_REQUEST['order_id'];
  echo u_wc_order_status($get_order_id);
}
add_shortcode('u-woocommerce-order-status', 'u_wc_order_status_sc');
