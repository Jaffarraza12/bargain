<?php
class ControllerCommonBannerGrid extends Controller {
	public function index() {
		$this->load->model('design/layout');

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$layout_id = 0;

		if ($route == 'product/category' && isset($this->request->get['path'])) {
			$this->load->model('catalog/category');

			$path = explode('_', (string)$this->request->get['path']);

			$layout_id = $this->model_catalog_category->getCategoryLayoutId(end($path));
		}

		if ($route == 'product/product' && isset($this->request->get['product_id'])) {
			$this->load->model('catalog/product');

			$layout_id = $this->model_catalog_product->getProductLayoutId($this->request->get['product_id']);
		}

		if ($route == 'information/information' && isset($this->request->get['information_id'])) {
			$this->load->model('catalog/information');

			$layout_id = $this->model_catalog_information->getInformationLayoutId($this->request->get['information_id']);
		}

		if (!$layout_id) {
			$layout_id = $this->model_design_layout->getLayout($route);
		}

		if (!$layout_id) {
			$layout_id = $this->config->get('config_layout_id');
		}

		$this->load->model('setting/module');

		$data['modules'] = array();

		$modules = $this->model_design_layout->getLayoutModules($layout_id, 'column_left');
        $banner_id = rand(0,100);
        $data['banner_id'] = $banner_id;
        $banner = array();
        $link = array();
        $banner[0] = '/image/catalog/TEES%20BANNERS/sidebannar002b.jpg';
        $banner[1] = '/image/catalog/TEES%20BANNERS/motsidebannar004.jpg';
        $link[0] = 'nutrition';
        $link[1] = 'graphic-tees';
        $i=0;
        foreach ($modules as $module) {
			$part = explode('.', $module['code']);

			if (isset($part[0]) && $this->config->get('module_' . $part[0] . '_status')) {
				$module_data = $this->load->controller('extension/module/' . $part[0]);

				if ($module_data) {
					$data['modules'][] = $module_data;
				}
			}

			if (isset($part[1])) {
				$setting_info = $this->model_setting_module->getModule($part[1]);
                $setting_info['banner'] = $banner[$i];
                $setting_info['link'] = $link[$i];
				if ($setting_info && $setting_info['status']) {
					$output = $this->load->controller('extension/module/banner_grid', $setting_info);

					if ($output) {
						$data['modules'][] = $output;
					}
				}
			}

			$i++;
		}




		return $this->load->view('common/banner_grid', $data);
	}
}
