<?php
function u_wc_order_status( $order_id ){
  $order = new WC_Order( $order_id );
  $get_status = $order->get_status();
  return $get_status;
}
?>
