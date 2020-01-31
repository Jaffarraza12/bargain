<?php
class ModelExtensionShippingBargain extends Model {
	function getQuote($address) {
		$this->load->language('extension/shipping/bargain');
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('shipping_bargain_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
		if (!$this->config->get('shipping_bargain_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}
		$method_data = array();
		$cost = $this->config->get('shipping_bargain_cost');
		if(!empty($address)){
		    $cost = $this->getBargainCost($address['zone_id'],$address['city'],$this->cart->getWeight());
        }

		if ($status) {
			$quote_data = array();

			$quote_data['bargain'] = array(
				'code'         => 'bargain.bargain',
				'title'        => $this->language->get('text_description'),
				'cost'         => $cost,
				'tax_class_id' => $this->config->get('shipping_bargain_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($cost, $this->config->get('shipping_bargain_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
			);

			$method_data = array(
				'code'       => 'bargain',
				'title'      => $this->language->get('text_title'),
				'quote'      => $quote_data,
				'sort_order' => $this->config->get('shipping_bargain_sort_order'),
				'error'      => false
			);
		}

		return $method_data;
	}
	private function getBargainCost($zone,$city,$weight){
	    if($zone == 2462) {
	        if($city == 41){
                $z = 'wz';
            } else {
                $z = 'sz';
            }
        } else {
	        $z = 'dc';
        }
        if($weight <=0.5 )
        {
            $w= 0.5;
        } else {
	        $w = ceil($weight);
        }
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "shipping_rate WHERE zone = '".$z."' AND weight= '" . $w . "' ");
	    $res = $query->row;
        return $res['rates'];

    }
}