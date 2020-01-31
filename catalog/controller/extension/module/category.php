<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/category');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}
        $this->load->model('catalog/category');

        $this->load->model('catalog/product');


        if (isset($parts[1])) {
            $catOrig =  $this->model_catalog_category->getCategoryOri($parts[1]);
		} else {
            $catOrig =  $this->model_catalog_category->getCategoryOri($parts[0]);
        }

        $did = $catOrig['depart_id'];
        if(empty($did)){
            $did =1;
            $data['tags'] = true;
        }
        $department = $this->model_catalog_category->getDepartment($did);
        $data['depart_id'] = $did;
        $data['depart_name'] = $department['name'];
		$data['categories'] = array();



		$categories = $this->model_catalog_category->getCategories(0,$did);

		foreach ($categories as $category) {
			$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id'],$did);

				foreach($children as $child) {
					$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

					$children_data[] = array(
						'category_id' => $child['category_id'],
						'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);

		}

		return $this->load->view('extension/module/category', $data);
	}
}