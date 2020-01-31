<?php
class ModelExtensionPaymentJazzCash extends Model
{
    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/jazzcash');
        
        $method_data = array();
        $status      = true;
        if ($status) {
            $method_data = array(
                'code' => 'jazzcash',
                'title' => $this->language->get('text_title'),
                'terms' => '',
                'sort_order' => $this->config->get('payment_jazzcash_sort_order')
            );
        }
        
        return $method_data;
    }
}
