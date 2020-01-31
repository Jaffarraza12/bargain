<?php
class ControllerCommonSupplement extends Controller {
	public function index() {
	    $this->document->setTitle("Nutrition Center - Live a Healthy Life with Bargain.pk");
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

        if (isset($this->request->get['route'])) {
            $this->document->addLink($this->config->get('config_url'), 'canonical');
        }

        $this->load->model('catalog/category');


        $did = 1;

        $data['depart']  =$this->model_catalog_category->getDepartmentCategory($did);
        $data['did'] = $did;
        $data['heading'] = 'Nutrition Center';
        $data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/depart', $data));

	}
}