<?php
class ControllerInformationSitemap extends Controller {
	public function index()
    {
        $this->load->language('information/sitemap');

        $this->document->setTitle("Site Map - One Stop Resource Page - Bargain.pk");
	$this->document->setDescription("Need to find a Page? Checkout our site map for easy navigation to your desiered page.  Bargain offers best shopping experience in Pakistan. Shop Now!");

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => 'sitemap'
        );

        $this->load->model('catalog/category');
        $this->load->model('catalog/product');

        $data['categories'] = array();
        $data['departments'] = array();
        $departments = $this->model_catalog_category->getDepartments();
        foreach ($departments as $depart) {
            $categories_1 = $this->model_catalog_category->getCategories(0,$depart['id']);
            $categories = array();
            if($categories_1) {
                foreach ($categories_1 as $category_1) {
                    $level_2_data = array();
                    $categories_2 = $this->model_catalog_category->getCategories($category_1['category_id'], $depart['id']);
                    foreach ($categories_2 as $category_2) {
                        $level_3_data = array();
                        $categories_3 = $this->model_catalog_category->getCategories($category_2['category_id'], $depart['id']);
                        foreach ($categories_3 as $category_3) {
                            $level_3_data[] = array(
                                'name' => $category_3['name'],
                                'href' => $this->url->link('product/category', 'path=' . $category_1['category_id'] . '_' . $category_2['category_id'] . '_' . $category_3['category_id'])
                            );
                        }
                        $level_2_data[] = array(
                            'name' => $category_2['name'],
                            'children' => $level_3_data,
                            'href' => $this->url->link('product/category', 'path=' . $category_1['category_id'] . '_' . $category_2['category_id'])
                        );
                    }
                    $categories[] = array(
                        'name' => $category_1['name'],
                        'children' => $level_2_data,
                        'href' => $this->url->link('product/category', 'path=' . $category_1['category_id'])
                    );

                }
            }
            $data['departments'][] = array(
                'id' => $depart['id'],
                'name' => $depart['name'],
                'categories' => $categories,
                'href' => $depart['route'],
            );
        }

      

		/*$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['history'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['search'] = $this->url->link('product/search');*/
		$data['contact'] ='contact';

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
		    if($result['information_id'] != 8 ) {
                $data['informations'][] = array(
                    'title' => $result['title'],
                    'href' => $this->url->link('information/information', 'information_id=' . $result['information_id'])
                );
            }
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/sitemap', $data));
	}
}