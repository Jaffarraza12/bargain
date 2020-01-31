<?php
class ControllerCommonCarve extends Controller {
    public function index() {
        $this->document->setTitle("Carve - Pakistan's Only Personalized Fashion Brand - Bargain.Pk");
        $this->document->setDescription("Carve is the only fashion brand in Pakistan that brings designs to match your personality. We crafted each single product with balance and harmony in mind, so you can discover the greatness within. Get compliments each time. Shop Now!");
        $this->document->setKeywords($this->config->get('config_meta_keyword'));

        if (isset($this->request->get['route'])) {
            $this->document->addLink($this->config->get('config_url').'carve', 'canonical');
        }



        $this->load->model('catalog/category');
        $did = 6;
        $this->load->model('tool/image');
        $results  =$this->model_catalog_category->getDepartmentCategory($did);
        foreach ($results as $result){
            $data['categories'][] = array(
                'id' => $result['id'],
                'name' => $result['name'],
                'image' => ($result['image']) ? $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height')) : $this->model_tool_image->resize('placeholder.png',  $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height')),
                'href' => $this->url->link('product/category', 'path=' . $result['category_id'])
            );
        }

        $data['did'] = $did;
        $data['heading'] = 'Electronics & Appliances';
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/carve', $data));
    }

}