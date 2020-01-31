<?php
class ControllerInformationHelp extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
        $data['breadcrumbs'][] = array(
            'text' => 'Help',
            'href' => $this->url->link('information/help')
        );
        $this->document->setTitle('HELP');
        $this->document->setDescription('HELP');
        $this->document->setKeywords('HELP');
        $this->document->addScript('catalog/view/theme/ceptz/js/static.js');

        $data['links'] = array();

        $data['links'][] = array(
            'name' => ' Orders',
            'icon' => 'fa fa-shopping-cart',
            'tab'  => 'tab-order'
        );

        $data['links'][] = array(
            'name' => ' Payment',
            'icon' => 'fa fa-money',
            'tab'  => 'tab-money'
        );

        $data['links'][] = array(
            'name' => ' Return & Refund',
            'icon' => 'fa fa-exchange',
            'tab'  => 'tab-return'
        );

        $data['links'][] = array(
            'name' => 'Deliveries',
            'icon' => 'fa fa-truck',
            'tab'  => 'tab-deliver'

        );

        $data['links'][] = array(
            'name' => ' Secure Shopping',
            'icon' => 'fa fa-shield',
            'tab' => 'tab-secure'
        );
        $data['links'][] = array(
            'name' => ' Privacy Policy',
            'icon' => 'fa fa-check-circle',
            'tab' => 'tab-privacy'
        );




		$data['heading_title'] = 'BARGAIN HELP CENTER';
        $data['continue'] = $this->url->link('common/home');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/help', $data));

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