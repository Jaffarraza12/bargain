<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {

		$this->load->language('extension/module/featured');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();



		$data['heading'] = $setting['name'];
		if (!$setting['limit']) {
			$setting['limit'] = 8;
		}

        $this->document->addStyle('catalog/view/javascript/caurosel/css/owl.carousel.min.css');
        $this->document->addStyle('catalog/view/javascript/caurosel/css/owl.theme.default.min.css');
        $this->document->addScript('catalog/view/javascript/caurosel/js/owl.carousel.min.js');
        $this->document->addScript('catalog/view/theme/ceptz/js/featured.js');

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);


			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);
               if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}



                   $hot_buy = (float)$this->model_catalog_product->isHotBuy($product_info['product_id']);
                   if ($hot_buy) {
                       $product_info['special'] = $hot_buy;
                       $special = $this->currency->format($this->tax->calculate($hot_buy, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                   }


                   $deal = (float)$this->model_catalog_product->isDeal($product_info['product_id']);
                   if ($deal) {
                       $product_info['special'] =  $deal;
                       $special = $this->currency->format($this->tax->calculate($deal, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                   }


                   if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}
                    $per = $product_info['price'] - $product_info['special'];
					$percentage = ($per*100)/$product_info['price'];

					$data['products'][] = array(
						'product_id'  => $product_info['product_id'],
						'thumb'       => $image,
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
                        'hotbuy'     => ($hot_buy) ? true : false,
                        'deal'        => ($deal) ? true : false,
                        'save'        => $this->currency->format((float)$per, $this->session->data['currency']),
                        'percentage'  => $percentage,
						'is_zoom'     => ($product_info['depart_id'] == 3) ? true : false,
						'tax'         => $tax,
						'rating'      => $rating,
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

        $data['class'] = 25;
        $data['id'] = rand(0, 5000)*rand(0, 5000);
        $data['all'] = 4;
        $data['row'] = 4;

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}