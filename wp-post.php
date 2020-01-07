<?php
require('wp-load.php');
add_action('woocommerce_checkout_process', 'create_vip_order');
function create_vip_order()
{
    global $woocommerce;
    if ($_POST) {
        $user = $_POST['user'];
        $product_id = $_POST['product_id'];
        $charge = $_POST['stripe'];
        $payment_status = $_POST['payment_status'];
        $note = $_POST['note'];
        $address = array(
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
            'phone' => $user['phone'],
            'address_1' => $user['address'],
            'city' => $user['city'],
            'postcode' => $user['zip'],
        );
        // Now we create the order
        $order = wc_create_order();
        // The add_product() function below is located in /plugins/woocommerce/includes/abstracts/abstract_wc_order.php
        $order->add_product(get_product($product_id), 1); // This is an existing SIMPLE product
        $order->set_address($address, 'billing');
        //Set payment gateways if its paid
        if ($payment_status) {
            $payment_gateways = WC()->payment_gateways->payment_gateways();
            $order->set_payment_method($payment_gateways['stripe']);
            $order->update_meta_data('_transaction_id', $charge['id']);
            $order->update_meta_data('_stripe_source_id', $charge['payment_method']);
            $order->update_meta_data('_stripe_charge_captured', 'yes');
            $order->update_meta_data('_stripe_currency', $charge['currency']);
            $order->update_meta_data('_stripe_customer_id', $charge['customer']);
            $order->set_status("processing");
        } else {
            $order->set_status("pending");
        }
        $order->calculate_totals(true);
        // Add the note
        $order->add_order_note($note);
        $order->save();
    }
}

create_vip_order();