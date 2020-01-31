<?php
class ControllerCommonHome extends Controller {
	public function index() {



      	$this->document->setTitle('Delivering a Best Online Shopping Experience in Pakistan -Bargain.pk');
		$this->document->setDescription('Quality products combined with friendly service. Bargain proudly offers great value to its customers through affordable prices, hassal-free return and exchange, easy to navigate website, daily deals, weekly sales and more. Browse our store today and start saving money. Shop Now!');
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

        $this->document->addStyle('catalog/view/javascript/caurosel/css/owl.carousel.min.css');
        $this->document->addStyle('catalog/view/javascript/caurosel/css/owl.theme.default.min.css');
        $this->document->addScript('catalog/view/javascript/caurosel/js/owl.carousel.min.js');
        $this->document->addScript('catalog/view/theme/ceptz/js/featured.js');
		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$this->load->model('catalog/category');
        $data['departments']= array();
        $results =  $this->model_catalog_category->getDepartments();
        foreach ($results as $result){
            $data['departments'][] = array(
                'id' => $result['id'],
                'name' => $result['name'],
                'href' =>  $this->config->get('config_ssl').$result['route']
            );
        }

        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $did = 2;
        $data['hotbuy_products'] = array();
        $hotbuy_products = $this->model_catalog_product->getHotBuy();
        foreach ($hotbuy_products as $result) {
            if ($result['image']) {

                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));

            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float)$result['special']) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            $hot_buy = (float)$this->model_catalog_product->isHotBuy($result['product_id']);
            if ($hot_buy) {
                $result['special'] = $hot_buy;
                $special = $this->currency->format($this->tax->calculate($hot_buy, $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            }


            $deal = (float)$this->model_catalog_product->isDeal($result['product_id']);
            if ($deal) {
                $result['special'] =  $deal;
                $special = $this->currency->format($this->tax->calculate($deal, $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$result['rating'];
            } else {
                $rating = false;
            }
            $per = $result['price'] - $result['special'];
            $percentage = ($per*100)/$result['price'];

            $data['hotbuy_products'][] = array(
                'product_id'  => $result['product_id'],
                'thumb'       => $image,
                'name'        => $result['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price'       => $price,
                'special'     => $special,
                'hotbuy'     => ($hot_buy) ? true : false,
                'deal'        => ($deal) ? true : false,
                'save'        => $this->currency->format((float)$per, $this->session->data['currency']),
                'is_zoom'     => ($result['depart_id'] == 3) ? true : false,
                'tax'         => $tax,
                'batch'       => true,
                'percentage'  => $percentage,
                'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
                'rating'      => $result['rating'],
                'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] )
            );
        }


        $data['deal_products'] = array();
        $deal_products= $this->model_catalog_product->getDeal();
        
        foreach ($deal_products as $result) {
            if ($result['image']) {

                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));

            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float)$result['special']) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$result['rating'];
            } else {
                $rating = false;
            }
            $per = $result['price'] - $result['special'];
            $percentage = ($per*100)/$result['price'];

            $data['deal_products'][] = array(
                'product_id'  => $result['product_id'],
                'thumb'       => $image,
                'name'        => $result['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price'       => $price,
                'special'     => $special,
                'save'        => $this->currency->format($this->tax->calculate($per, $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                'is_zoom'     => ($result['depart_id'] == 3) ? true : false,
                'tax'         => $tax,
                'batch'       => true,
                'percentage'  => $percentage,
                'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
                'rating'      => $result['rating'],
                'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] )
            );
        }




        $datestr="2018-09-29 23:59:59";
        $data['date'] = date('M d Y',strtotime($datestr));


        $data['column_left'] = $this->load->controller('common/banner_grid');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
