<?php
class ControllerCommonGraphicTees extends Controller {
	public function index() {

	 	$this->document->setTitle("Printed Graphic T-Shirts - Largest Original Selection Online In Pakistan | Bargain.Pk");
		$this->document->setDescription("Browse our collection of thousand of original printed graphic t-shirts design. Each design is created by local Pakistani Artist. Utilizing one of the world's premium and advance printed technology, Bargain.pk offers great value to you everyday casual dressing. Shop Now and Save!");
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
      	if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url').'graphic-tees', 'canonical');
		}

		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
        $did =3;

        $this->load->model('tool/image');
        $filter = array(
            'parent_id' => 0
        );


        $this->document->addStyle('catalog/view/javascript/caurosel/css/owl.carousel.min.css');
        $this->document->addStyle('catalog/view/javascript/caurosel/css/owl.theme.default.min.css');
        $this->document->addScript('catalog/view/javascript/caurosel/js/owl.carousel.min.js');
        $this->document->addScript('catalog/view/theme/ceptz/js/tees-v-0.1.js');
        $filter['custom'] = '1201,1203,1206,1205,1237,1233,1214,1218,1257,1329';
        $results  =$this->model_catalog_category->getDepartmentCategory($did,$filter);
        foreach ($results as $result){
            $filter_data = array('filter_category_id' => $result['category_id'], 'filter_sub_category' => true);
            $data['categories'][] = array(
                'id' => $result['id'],
                'name' => $result['name'],
                'count' => $this->model_catalog_product->getTotalProducts($filter_data),
                'image' => ($result['image']) ? $this->model_tool_image->resize($result['image'], 425,250) : $this->model_tool_image->resize('placeholder.png',  450, 250),
                'href' => $this->url->link('product/category', 'path=' . $result['category_id'])
            );
        }

        $latest_products =  $this->model_catalog_product->getLatestProductFromDepartment(3);
        $products = array();
        foreach ($latest_products as $res) {
            $products[] = $res['product_id'];
        }

        foreach ($products as $product_id) {

            $product_info = $this->model_catalog_product->getProduct($product_id);


            if ($product_info) {
                if ($product_info['image']) {
                    $image = $this->model_tool_image->resize($product_info['image'], 300, 300);
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', 300,300);
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
                $percentage = ($per * 100) / $product_info['price'];

                $data['products'][] = array(
                    'product_id' => $product_info['product_id'],
                    'thumb' => $image,
                    'name' => $product_info['name'],
                    'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price' => $price,
                    'special' => $special,
                    'percentage' => $percentage,
                    'tax' => $tax,
                    'rating' => $rating,
                    'href' => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
                );
            }
        }
      $data['column_left'] = $this->load->controller('common/column_custom_left');
		$data['column_right'] = $this->load->controller('common/column_custom_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/tees', $data));
	}
}
