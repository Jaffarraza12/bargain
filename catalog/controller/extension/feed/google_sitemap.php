<?php
class ControllerExtensionFeedGoogleSitemap extends Controller {
	public function index() {
		if ($this->config->get('feed_google_sitemap_status')) {
			$output  = '<?xml version="1.0" encoding="UTF-8"?>';
			$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
			$this->load->model('catalog/product');
            $this->load->model('catalog/category');
			$this->load->model('tool/image');

			//  $data['limit'] = 43;
			$products = $this->model_catalog_product->getProducts();
            /*print_r($products);
            exit();*/
            $output .= '<url>';
            $output .= '  <loc>https://www.bargain.pk/'.'</loc>';
            $output .= '  <changefreq>daily</changefreq>';
            $output .= '  <priority>1.0</priority>';
            $output .= '</url>';
            $departments = $this->model_catalog_category->getDepartments();
            foreach ($departments as $depart) {
                $output .= '<url>';
                $output .= '  <loc>https://www.bargain.pk/'.$depart['route'].'</loc>';
                $output .= '  <changefreq>daily</changefreq>';
                //$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP',strtotime($depart['mts'])) . '</lastmod>';
                $output .= '  <priority>1.0</priority>';

                $output .= '</url>';
                $categories_1 = $this->model_catalog_category->getCategories(0, $depart['id']);
                $categories = array();
                if ($categories_1) {
                    foreach ($categories_1 as $category_1) {
                        $level_2_data = array();
                        $categories_2 = $this->model_catalog_category->getCategories($category_1['category_id'], $depart['id']);
                        foreach ($categories_2 as $category_2) {
                            $output .= '<url>';
                            $output .= '  <loc>' . $this->url->link('product/category', 'path=' . $category_2['category_id']) . '</loc>';
                            $output .= '  <changefreq>daily</changefreq>';
                            //$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($category_2['date_modified'])) . '</lastmod>';
                            $output .= '  <priority>1.0</priority>';

                            $output .= '</url>';

                        }
                    }

                    $output .= '<url>';
                    $output .= '  <loc>' . $this->url->link('product/category', 'path=' . $category_1['category_id']) . '</loc>';
                    $output .= '  <changefreq>daily</changefreq>';
                    //$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($category_1['date_modified'])) . '</lastmod>';
                    $output .= '  <priority>1.0</priority>';

                    $output .= '</url>';
                }

            }
			foreach ($products as $product) {
				//echo $product['product_id'].'<br/>';
			    if ($product['image']) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('product/product', 'product_id=' . $product['product_id']) . '</loc>';
					$output .= '  <changefreq>daily</changefreq>';
					//$output .= '  <id>'.$product['product_id'].'</id>';
					//$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])) . '</lastmod>';
					$output .= '  <priority>1.0</priority>';
					/*$output .= '  <image:image>';
					//$output .= '  <image:loc>' . $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')) . '</image:loc>';
					//$output .= '  <image:caption>' . $product['name'] . '</image:caption>';
					//$output .= '  <image:title>' . $product['name'] . '</image:title>';
					$output .= '  </image:image>';*/
					$output .= '</url>';
				}
			}

			$this->load->model('catalog/category');

			$output .= $this->getCategories(0);

			$this->load->model('catalog/manufacturer');

			$manufacturers = $this->model_catalog_manufacturer->getManufacturers();

			/*foreach ($manufacturers as $manufacturer) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.7</priority>';
				$output .= '</url>';

				$products = $this->model_catalog_product->getProducts(array('filter_manufacturer_id' => $manufacturer['manufacturer_id']));

				foreach ($products as $product) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('product/product', 'manufacturer_id=' . $manufacturer['manufacturer_id'] . '&product_id=' . $product['product_id']) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <priority>1.0</priority>';
					$output .= '</url>';
				}
			}*/

			$this->load->model('catalog/information');

			$informations = $this->model_catalog_information->getInformations();

			/*foreach ($informations as $information) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('information/information', 'information_id=' . $information['information_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.5</priority>';
				$output .= '</url>';
			}*/

            foreach ($informations  as $information) {
                if($information['information_id'] != 8 ) {
                    $output .= '<url>';
                    $output .= '  <loc>' . $this->url->link('information/information', 'information_id=' . $information['information_id']) . '</loc>';
                    $output .= '  <changefreq>weekly</changefreq>';
                    $output .= '  <priority>0.5</priority>';
                    $output .= '</url>';
                }
            }

			$output .= '</urlset>';

			$this->response->addHeader('Content-Type: application/xml');
			$this->response->setOutput($output);
		}
	}

	protected function getCategories($parent_id, $current_path = '') {
		$output = '';

		$results = $this->model_catalog_category->getCategories($parent_id);

		foreach ($results as $result) {
			if (!$current_path) {
				$new_path = $result['category_id'];
			} else {
				$new_path = $current_path . '_' . $result['category_id'];
			}

			$output .= '<url>';
			$output .= '  <loc>' . $this->url->link('product/category', 'path=' . $new_path) . '</loc>';
			$output .= '  <changefreq>weekly</changefreq>';
			$output .= '  <priority>0.7</priority>';
			$output .= '</url>';

			$products = $this->model_catalog_product->getProducts(array('filter_category_id' => $result['category_id']));

			foreach ($products as $product) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/product', 'path=' . $new_path . '&product_id=' . $product['product_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>1.0</priority>';
				$output .= '</url>';
			}

			$output .= $this->getCategories($result['category_id'], $new_path);
		}

		return $output;
	}
}
