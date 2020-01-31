<?php
class ControllerInformationInformation extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}
        $information_info = $this->model_catalog_information->getInformation($information_id);
        $this->document->addStyle('catalog/view/theme/ceptz/css/owl2.carousel.css');
        $this->document->addScript('catalog/view/theme/ceptz/js/owl.carousel.min.js');
        $this->document->addScript('catalog/view/theme/ceptz/js/blog.js');


        $data['blog_categories'] = array();
		$data['blog_categories'][] = array(
		    'name' => 'Body Building & Fitnesss',
         );
        $data['blog_categories'][] = array(
            'name' => 'Multivitaminis',
        );

        $data['blog_categories'][] = array(
            'name' => 'Fat Burner',
        );
        $data['blog_categories'][] = array(
            'name' => 'Protein Powder',
        );
        $data['blog_categories'][] = array(
            'name' => 'Pre Workout',
        );
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        /*FEATURE PRODUCT*/
        $Featured = $this->model_catalog_product->getCustomProduct(array($information_info['product_id'] ));
        $Featured = $Featured[$information_info['product_id']];
        if ($Featured['image']) {
                $image = $this->model_tool_image->resize($Featured['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($Featured['price'], $Featured['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float)$Featured['special']) {
                $special = $this->currency->format($this->tax->calculate($Featured['special'], $Featured['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float)$Featured['special'] ? $Featured['special'] : $Featured['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$Featured['rating'];
            } else {
                $rating = false;
            }
            $per = $Featured['price'] - $Featured['special'];
            $percentage = ($per*100)/$Featured['price'];

            $data['Feature'][] = array(
                'product_id'  => $Featured['product_id'],
                'thumb'       => $image,
                'name'        => $Featured['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($Featured['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price'       => $price,
                'special'     => $special,
                'percentage'  => $percentage,
                'tax'         => $tax,
                'minimum'     => $Featured['minimum'] > 0 ? $Featured['minimum'] : 1,
                'rating'      => $rating,
                'href'        => $this->url->link('product/product', 'product_id=' . $Featured['product_id'])
           );
        /*FEATURE PRODUCT*/


        /*PRODUCT GRID*/
        $related = explode(',',$information_info['related_product']);
        $results = $this->model_catalog_product->getCustomProduct($related);

        if($results ){
            foreach ($results as $result) {

                if ($result['image']) {
                    $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
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
                $percentage = ($per * 100) / $result['price'];

                $data['related_products'][] = array(
                    'product_id' => $result['product_id'],
                    'thumb' => $image,
                    'name' => $result['name'],
                    'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                    'price' => $price,
                    'special' => $special,
                    'percentage' => $percentage,
                    'tax' => $tax,
                    'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
                    'rating' => $rating,
                    'href' => $this->url->link('product/product', 'product_id=' . $result['product_id'])
                );
            }
        }
        /*PRODUCT GRID*/

        /*Related articles*/
        $articles = explode(',',$information_info['related_article']);
        if($articles ) {
            $this->load->model('tool/image');
            foreach($articles as $article){
                $info = $this->model_catalog_information->getInformation($article);
                $data['related_articles'][] = array(
                    'id' => $info['heading'],
                    'name' => $info['title'],
                    'image' => $this->model_tool_image->resize($info['image'], 350, 270),
                    'href'  => $this->url->link('information/information', 'information_id=' . $info['information_id'])
                );
            }


        }



        if ($information_info) {
			$this->document->setTitle($information_info['meta_title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);

			$data['breadcrumbs'][] = array(
				'text' => $information_info['title'],
				'href' => $this->url->link('information/information', 'information_id=' .  $information_id)
			);

			$data['heading_title'] = $information_info['title'];

			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
            if($information_info['type'] == 2 ){
                $this->response->setOutput($this->load->view('information/blog_detail', $data));
            } else {
                $this->response->setOutput($this->load->view('information/information', $data));
            }

		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->setOutput($output);
	}
}