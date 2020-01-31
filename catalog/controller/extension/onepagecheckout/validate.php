<?php use OneCRM\APIClient\Authentication;
use OneCRM\APIClient;
class ControllerextensionOnepagecheckoutValidate extends Controller {
	private $ssl = 'SSL';
	private $requireds = array();
	private $prequireds = array();
	private $drequireds = array();
	
	public function __construct($registry){
		parent::__construct( $registry );
		$this->ssl = (defined('VERSION') && version_compare(VERSION,'2.2.0.0','>=')) ? true : 'SSL';
	}
	
	private function setPersonalRequiredFeilds(){
		$this->load->model('setting/setting');
		$onepagecheckout_info = $this->model_setting_setting->getSetting('onepagecheckout', $this->config->get('config_store_id'));
		
		$onepagecheckout_manage = (!empty($onepagecheckout_info['onepagecheckout_manage'])) ? $onepagecheckout_info['onepagecheckout_manage'] : array();
		
		$fields	= (isset($onepagecheckout_manage['personaldetails']['fields']) ? $onepagecheckout_manage['personaldetails']['fields'] : array());
		
		foreach($fields as $key => $feild){
			$required = false;
			switch($feild['show']) {
				case 2:
				$required = true;
				break;
			}
			
			if($required){
				$this->requireds[$key] = array(
					'required'	=> $required,
					'errormsg'	=> $onepagecheckout_manage['register'][$key]['error'][$this->config->get('config_language_id')],
				);
			}
		}
	}
	
	private function setPaymentRequiredFeilds(){
		$this->load->model('setting/setting');
		$onepagecheckout_info = $this->model_setting_setting->getSetting('onepagecheckout', $this->config->get('config_store_id'));
		
		$onepagecheckout_manage = (!empty($onepagecheckout_info['onepagecheckout_manage'])) ? $onepagecheckout_info['onepagecheckout_manage'] : array();
		
		$fields	= (isset($onepagecheckout_manage['payment_details']['fields']) ? $onepagecheckout_manage['payment_details']['fields'] : array());
		
		foreach($fields as $key => $feild){
			$required = false;
			switch($feild['show']) {
				case 2:
				$required = true;
				break;
			}
			
			if($required){
				$this->prequireds[$key] = array(
					'required'	=> $required,
					'errormsg'	=> $onepagecheckout_manage['payment_details_language'][$key]['error'][$this->config->get('config_language_id')],
				);
			}
		}
	}
	
	private function setDeliveryRequiredFeilds(){
		$this->load->model('setting/setting');
		$onepagecheckout_info = $this->model_setting_setting->getSetting('onepagecheckout', $this->config->get('config_store_id'));
		
		$onepagecheckout_manage = (!empty($onepagecheckout_info['onepagecheckout_manage'])) ? $onepagecheckout_info['onepagecheckout_manage'] : array();
		
		$fields	= (isset($onepagecheckout_manage['delivery']['fields']) ? $onepagecheckout_manage['delivery']['fields'] : array());
		
		
		foreach($fields as $key => $feild){
			$required = false;
			switch($feild['show']) {
				case 2:
				$required = true;
				break;
			}
			
			if($required){
				$this->drequireds[$key] = array(
					'required'	=> $required,
					'errormsg'	=> $onepagecheckout_manage['delivery_detail'][$key]['error'][$this->config->get('config_language_id')],
				);
			}
		}
	}
	
	public function validateForm(){
		$json = array();
		
		$this->load->language('extension/onepagecheckout/checkout');
		
		$this->load->model('account/customer');
		if(!$this->customer->isLogged()){
			$this->setPersonalRequiredFeilds();
			// Register Or Guest Checkout - Personal Details (Validate)
			if(!empty($this->request->post['account_type']) && ($this->request->post['account_type'] == 'register' || $this->request->post['account_type'] == 'guest')){
				foreach($this->requireds as $key => $required){
					if($key == 'firstname') {
						if ((utf8_strlen(trim($this->request->post['personal_details']['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['personal_details']['firstname'])) > 32)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_firstname');
						}
					}
					
					if($key == 'lastname'){
						if ((utf8_strlen(trim($this->request->post['personal_details']['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['personal_details']['lastname'])) > 32)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_lastname');
						}
					}
					
					if($key == 'email') {
						if ((utf8_strlen($this->request->post['personal_details']['email']) > 96) || !filter_var($this->request->post['personal_details']['email'], FILTER_VALIDATE_EMAIL)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_email');
						}
						
						if(!empty($this->request->post['account_type']) && $this->request->post['account_type'] == 'register') {
							if ($this->model_account_customer->getTotalCustomersByEmailNGuest($this->request->post['personal_details']['email'])) {
								$json['error']['warning'] = $this->language->get('error_exists');
								$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_email');
							}
						}
					}
					
					if($key == 'company') {
						if(empty($this->request->post['personal_details']['company'])) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_company');
						}
					}
					
					if($key == 'telephone') {
						if ((utf8_strlen($this->request->post['personal_details']['telephone']) < 3) || (utf8_strlen($this->request->post['personal_details']['telephone']) > 32)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_telephone');
						}
					}

					if($key == 'address_1') {
						if ((utf8_strlen($this->request->post['personal_details']['address_1']) < 3) || (utf8_strlen($this->request->post['personal_details']['address_1']) > 128)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_1');
						}
					}
					
					if($key == 'address_2') {
						if ((utf8_strlen($this->request->post['personal_details']['address_2']) < 3) || (utf8_strlen($this->request->post['personal_details']['address_2']) > 32)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_2');
						}
					}
					if($key == 'city') {
						if (intval($this->request->post['personal_details']['city']) == 0  ) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_city');
						}
					}
					
					if($key == 'postcode') {
						if ((utf8_strlen($this->request->post['personal_details']['postcode']) < 2) || (utf8_strlen($this->request->post['personal_details']['postcode']) > 10)) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_postcode');
						}
					}
					
					if($key == 'fax') {
						if(empty($this->request->post['personal_details']['fax'])) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_fax');
						}
					}
					
					if($key == 'country') {
						$this->load->model('localisation/country');
						$country_info = $this->model_localisation_country->getCountry($this->request->post['personal_details']['country_id']);
						if ($this->request->post['personal_details']['country_id'] == '') {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_country');
						}
					}
					
					if($key == 'zone') {
						if (!isset($this->request->post['personal_details']['zone_id']) || $this->request->post['personal_details']['zone_id'] == '' || !is_numeric($this->request->post['personal_details']['zone_id'])) {
							$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_zone');
						}
					}
					
					if(!empty($this->request->post['account_type']) && $this->request->post['account_type'] == 'register') {
						if($key == 'password') {
							if ((utf8_strlen($this->request->post['personal_details']['password']) < 4) || (utf8_strlen($this->request->post['personal_details']['password']) > 20)) {
								$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_password');


							}
						}

						if($key == 'confirm') {
							if ($this->request->post['personal_details']['confirm'] != $this->request->post['personal_details']['password']) {
								$json['error']['personal_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_confirm');
							}
						}
					}

                    if ($this->request->post['personal_details']['account-register']) {
                        if ((utf8_strlen($this->request->post['personal_details']['password']) < 6) || (utf8_strlen($this->request->post['personal_details']['password']) > 20)) {
                            $json['error']['personal_details']['password'] = 'Password Should Be more 6 characters and less than 20 characters';
                            $json['error']['warning']= $json['error']['personal_details']['password'] ;

                        }

                        if($this->request->post['personal_details']['password'] != $this->request->post['personal_details']['confirm']){
                            $json['error']['personal_details']['confirm'] = 'Password And Confirm Password are not similar';
                            $json['error']['warning']= $json['error']['personal_details']['confirm'] ;
                        }


                        $this->request->post['account_type'] = 'register';

                    }


				}
				
				// Customer Group
				if (isset($this->request->post['personal_details']['customer_group_id']) && is_array($this->config->get('onepagecheckout_customer_group_display')) && in_array($this->request->post['personal_details']['customer_group_id'], $this->config->get('onepagecheckout_customer_group_display'))) {
					$customer_group_id = $this->request->post['personal_details']['customer_group_id'];
				} else {
					 $customer_group_id = $this->config->get('onepagecheckout_customer_group_id');

				}


				// Custom field validation
				$this->load->model('account/custom_field');

				$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

				foreach ($custom_fields as $custom_field) {
					if ($custom_field['required'] && empty($this->request->post['personal_details']['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
						$json['error']['personal_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
					} elseif (($custom_field['type'] == 'text' && !empty($custom_field['validation'])) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
						$json['error']['personal_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field_validate'), $custom_field['name']);
					}
				}
			}
			
			// Delivery Address (Validate)
			
			if(!empty($onepagecheckout_manage['delivery']['delivery_status'])){
				$data['delivery_status'] = $onepagecheckout_manage['delivery']['delivery_status'];
			}else{
				$data['delivery_status'] = false;
			}
		
			if ($this->cart->hasShipping() && $data['delivery_status']){
				if(empty($this->request->post['personal_details']['shipping_address'])){
					$this->setDeliveryRequiredFeilds();
					foreach($this->drequireds as $key => $required){
						if($key == 'firstname') {
							if ((utf8_strlen(trim($this->request->post['delivery_details']['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['delivery_details']['firstname'])) > 32)) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_firstname');
							}
						}
						
						if($key == 'lastname') {
							if ((utf8_strlen(trim($this->request->post['delivery_details']['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['delivery_details']['lastname'])) > 32)) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_lastname');
							}
						}
						
						if($key == 'company') {
							if(empty($this->request->post['delivery_details']['company'])) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_company');
							}
						}
						
						
						if($key == 'address_1') {
							if ((utf8_strlen($this->request->post['delivery_details']['address_1']) < 3) || (utf8_strlen($this->request->post['delivery_details']['address_1']) > 128)) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_1');
							}
						}
						
						if($key == 'address_2') {
							if ((utf8_strlen($this->request->post['delivery_details']['address_2']) < 3) || (utf8_strlen($this->request->post['delivery_details']['address_2']) > 32)) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_2');
							}
						}
						
						if($key == 'city') {
							if (intval($this->request->post['delivery_details']['city']) == 0  ) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_city');
							}
						}
						
						if($key == 'postcode') {
							if ((utf8_strlen($this->request->post['delivery_details']['postcode']) < 2) || (utf8_strlen($this->request->post['delivery_details']['postcode']) > 10)) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_postcode');
							}
						}
						
						if($key == 'country') {
							$this->load->model('localisation/country');
							$country_info = $this->model_localisation_country->getCountry($this->request->post['delivery_details']['country_id']);
							if ($this->request->post['delivery_details']['country_id'] == '') {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_country');
							}
						}
						
						if($key == 'zone') {
							if (!isset($this->request->post['delivery_details']['zone_id']) || $this->request->post['delivery_details']['zone_id'] == '' || !is_numeric($this->request->post['delivery_details']['zone_id'])) {
								$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_zone');
							}
						}
					}
					
					// Customer Group
					if (isset($this->request->post['personal_details']['customer_group_id']) && is_array($this->config->get('onepagecheckout_customer_group_display')) && in_array($this->request->post['personal_details']['customer_group_id'], $this->config->get('onepagecheckout_customer_group_display'))) {
						$customer_group_id = $this->request->post['personal_details']['customer_group_id'];
					} else {
						$customer_group_id = $this->config->get('onepagecheckout_customer_group_id');
					}

					// Custom field validation
					$this->load->model('account/custom_field');

					$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

					foreach ($custom_fields as $custom_field) {
						if (($custom_field['location'] == 'address') && $custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['custom_field_id']])) {
							$json['error']['delivery_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
						} elseif (($custom_field['type'] == 'text' && !empty($custom_field['validation']) && $custom_field['location'] == 'address') && !filter_var($this->request->post['custom_field'][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
							$json['error']['delivery_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field_validate'), $custom_field['name']);
						}
					}
				}
			}
			
			$require_comment_status = $this->config->get('onepagecheckout_manage'); 
			
			if(!empty($require_comment_status['confirm_order']['terms'])){
					$this->load->model('catalog/information');

					$information_info = $this->model_catalog_information->getInformation($require_comment_status['confirm_order']['terms']);

					if ($information_info && !isset($this->request->post['agree'])) {
						$json['error']['warning'] = sprintf($this->language->get('error_agree'), $information_info['title']);
					}
			}
			
			if(!empty($require_comment_status['personaldetails']['terms'])){
					$this->load->model('catalog/information');

					$information_info = $this->model_catalog_information->getInformation($require_comment_status['personaldetails']['terms']);

					if ($information_info && !isset($this->request->post['personal_details']['agree'])) {
						$json['error']['warning'] = sprintf($this->language->get('error_agree'), $information_info['title']);
					}
			}
			
			if ($this->cart->hasShipping()){
				if(!isset($this->request->post['shipping_method'])) {
						$json['error']['shipping_method']['warning'] = $this->language->get('error_shipping');
				}else{
					$shipping = explode('.', $this->request->post['shipping_method']);
					if (!isset($shipping[0]) || !isset($shipping[1]) || !isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) {
							$json['error']['shipping_method']['warning'] = $this->language->get('error_shipping');
					}
				}
			}
			
			if(!isset($this->request->post['payment_method'])){
					$json['error']['payment_method']['warning'] = $this->language->get('error_payment');
			} elseif (!isset($this->session->data['payment_methods'][$this->request->post['payment_method']])) {
				$json['error']['payment_method']['warning'] = $this->language->get('error_payment');
			}
			
			
			if(!empty($require_comment_status['confirm_order']['require_comment_status']) && $require_comment_status['confirm_order']['comment_status']){
				if(empty($this->request->post['comment'])){
					$json['error']['comment'] = (!empty($require_comment_status['confirm_order']['comment_error'][$this->config->get('config_language_id')]) ? $require_comment_status['confirm_order']['comment_error'][$this->config->get('config_language_id')] : $this->language->get('text_comment'));
				}
			}
			
			if(empty($this->request->post['delivery_date']) && $this->config->get('onepagecheckout_delivery_required')){
				$json['error']['delivery_date'] = (!empty($require_comment_status['delivery']['required'][$this->config->get('config_language_id')]) ? $require_comment_status['delivery']['required'][$this->config->get('config_language_id')] : 'Required Delivery');
			}
			
			//comment_error
			if(!$json){
				$json = $this->save($this->request->post,$customer_group_id);
				$this->session->data['comment'] = (isset($this->request->post['comment']) ? $this->request->post['comment'] : '');
				$this->session->data['delivery_date'] = (isset($this->request->post['delivery_date']) ? $this->request->post['delivery_date'] : '');
				$this->session->data['agree'] = (isset($this->request->post['agree']) ? $this->request->post['agree'] : '');
			}
		}else{
			if(isset($this->request->post['personal_details'])){
				$json['redirect'] = true;
			}else{
			/*PAYMENT ADDRESS START*/
			if(isset($this->request->post['payment_details'])){
				$this->setPaymentRequiredFeilds();
				if($this->request->post['payment_details']['payment_address']=='new'){
					$this->load->model('account/address');
						foreach($this->prequireds as $key => $required){
							if($key == 'firstname'){
								if ((utf8_strlen(trim($this->request->post['payment_details']['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['payment_details']['firstname'])) > 32)) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_firstname');
								}
							}
							
							if($key == 'lastname'){
								if ((utf8_strlen(trim($this->request->post['payment_details']['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['payment_details']['lastname'])) > 32)) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_lastname');
								}
							}
							
							if($key == 'company'){
								if(empty($this->request->post['payment_details']['company'])) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_company');
								}
							}
							
							if($key == 'address_1'){
								if ((utf8_strlen($this->request->post['payment_details']['address_1']) < 3) || (utf8_strlen($this->request->post['payment_details']['address_1']) > 128)) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_1');
								}
							}
							
							if($key == 'address_2') {
								if ((utf8_strlen($this->request->post['payment_details']['address_2']) < 3) || (utf8_strlen($this->request->post['payment_details']['address_2']) > 32)) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_2');
								}
							}

							if($key == 'city') {

							   if (intval($this->request->post['payment_details'][$key]) == 0 ) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_city');
								}
							}
							
							if($key == 'postcode') {
								if ((utf8_strlen($this->request->post['payment_details']['postcode']) < 2) || (utf8_strlen($this->request->post['payment_details']['postcode']) > 10)) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_postcode');
								}
							}
							
							if($key == 'country') {
								$this->load->model('localisation/country');
								$country_info = $this->model_localisation_country->getCountry($this->request->post['payment_details']['country_id']);
								if ($this->request->post['payment_details']['country_id'] == '') {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_country');
								}
							}
							
							if($key == 'zone') {
								if (!isset($this->request->post['payment_details']['zone_id']) || $this->request->post['payment_details']['zone_id'] == '' || !is_numeric($this->request->post['payment_details']['zone_id'])) {
									$json['error']['payment_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_zone');
								}
							}
						}
						
						// Custom field validation
						$this->load->model('account/custom_field');

						$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('onepagecheckout_customer_group_id'));

						foreach ($custom_fields as $custom_field) {
							if (($custom_field['location'] == 'address') && $custom_field['required'] && empty($this->request->post['payment_details']['custom_field'][$custom_field['custom_field_id']])) {
								$json['error']['payment_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
							} elseif (($custom_field['type'] == 'text' && !empty($custom_field['validation']) && $custom_field['location'] == 'address') && !filter_var($this->request->post['payment_details']['custom_field'][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
								$json['error']['payment_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field_validate'), $custom_field['name']);
							}
						}
					 
					 //Vaildate Payment Method
					 if (!isset($this->request->post['payment_method'])) {
						$json['error']['payment_method']['warning'] = $this->language->get('error_payment');
					 } elseif (!isset($this->session->data['payment_methods'][$this->request->post['payment_method']])) {
						$json['error']['payment_method']['warning'] = $this->language->get('error_payment');
					 }

					if(!$json){
						
						if(!empty($onepagecheckout_manage['delivery']['delivery_status'])){
							$data['delivery_status'] = $onepagecheckout_manage['delivery']['delivery_status'];
						}else{
							$data['delivery_status'] = false;
						}
			
						 // Default Payment Address
						$this->load->model('account/address');
					
						$this->load->model('extension/onepagecheckout/customer');

						$address_id = $this->model_extension_onepagecheckout_customer->addAddress($this->request->post['payment_details']);

						$this->session->data['payment_address'] = $this->model_account_address->getAddress($address_id);
						
						if(!$data['delivery_status']){
							$this->session->data['shipping_address'] = $this->model_account_address->getAddress($address_id);
						}

						$this->load->model('account/activity');

						$activity_data = array(
							'customer_id' => $this->customer->getId(),
							'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
						);

						$this->model_account_activity->addActivity('address_add', $activity_data);
					}
				}
			}
			/*PAYMENT ADDRESS END*/
			/*Delivery ADDRESS START*/
			if ($this->cart->hasShipping()){
				if(isset($this->request->post['delivery_details'])){
					$this->setDeliveryRequiredFeilds();
					if($this->request->post['delivery_details']['shipping_address']=='new'){
						foreach($this->drequireds as $key => $required){
							if($key == 'firstname'){
								if ((utf8_strlen(trim($this->request->post['delivery_details']['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['delivery_details']['firstname'])) > 32)) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_firstname');
								}
							}
							
							if($key == 'lastname') {
								if ((utf8_strlen(trim($this->request->post['delivery_details']['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['delivery_details']['lastname'])) > 32)) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_lastname');
								}
							}
							
							if($key == 'company') {
								if(empty($this->request->post['delivery_details']['company'])) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_company');
								}
							}
							
							
							if($key == 'address_1') {
								if ((utf8_strlen($this->request->post['delivery_details']['address_1']) < 3) || (utf8_strlen($this->request->post['delivery_details']['address_1']) > 128)) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_1');
								}
							}
							
							if($key == 'address_2') {
								if ((utf8_strlen($this->request->post['delivery_details']['address_2']) < 3) || (utf8_strlen($this->request->post['delivery_details']['address_2']) > 32)) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_address_2');
								}
							}
							
							if($key == 'city') {
								if ((utf8_strlen($this->request->post['delivery_details']['city']) < 2) || (utf8_strlen($this->request->post['delivery_details']['city']) > 128)) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_city');
								}
							}
							
							if($key == 'postcode') {
								if ((utf8_strlen($this->request->post['delivery_details']['postcode']) < 2) || (utf8_strlen($this->request->post['delivery_details']['postcode']) > 10)) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_postcode');
								}
							}
							
							if($key == 'country') {
								$this->load->model('localisation/country');
								$country_info = $this->model_localisation_country->getCountry($this->request->post['delivery_details']['country_id']);
								if ($this->request->post['delivery_details']['country_id'] == '') {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_country');
								}
							}
							
							if($key == 'zone') {
								if (!isset($this->request->post['delivery_details']['zone_id']) || $this->request->post['delivery_details']['zone_id'] == '' || !is_numeric($this->request->post['delivery_details']['zone_id'])) {
									$json['error']['delivery_details'][$key] = (!empty($required['errormsg'])) ? $required['errormsg'] : $this->language->get('error_zone');
								}
							}
						}
							
						
						$this->load->model('account/custom_field');
						$custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('onepagecheckout_customer_group_id'));
						foreach($custom_fields as $custom_field){
							if (($custom_field['location'] == 'address') && $custom_field['required'] && empty($this->request->post['delivery_details']['custom_field'][$custom_field['custom_field_id']])) {
								$json['error']['delivery_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
							} elseif (($custom_field['type'] == 'text' && !empty($custom_field['validation']) && $custom_field['location'] == 'address') && !filter_var($this->request->post['delivery_details']['custom_field'][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
								$json['error']['delivery_details']['custom_field' . $custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field_validate'), $custom_field['name']);
							}
						}
						 
						 //Vaildate Shipping Method
						if (!isset($this->request->post['shipping_method'])){
							$json['error']['shipping_method']['warning'] = $this->language->get('error_shipping');
						} else {
							$shipping = explode('.', $this->request->post['shipping_method']);

							if (!isset($shipping[0]) || !isset($shipping[1]) || !isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) {
								$json['error']['shipping_method']['warning'] = $this->language->get('error_shipping');
							}
						}
						
						if (!$json) {
							 // Default Payment Address
							$this->load->model('account/address');

							$this->load->model('extension/onepagecheckout/customer');

							$address_id = $this->model_extension_onepagecheckout_customer->addAddress($this->request->post['delivery_details']);

							$this->session->data['shipping_address'] = $this->model_account_address->getAddress($address_id);

							$this->load->model('account/activity');

							$activity_data = array(
								'customer_id' => $this->customer->getId(),
								'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName()
							);

							$this->model_account_activity->addActivity('address_add', $activity_data);
						}
					}
				}
			}
			
			$require_comment_status = $this->config->get('onepagecheckout_manage'); 
			
			if(!empty($require_comment_status['confirm_order']['terms'])){
					$this->load->model('catalog/information');

					$information_info = $this->model_catalog_information->getInformation($require_comment_status['confirm_order']['terms']);

					if ($information_info && !isset($this->request->post['agree'])) {
						$json['error']['warning'] = sprintf($this->language->get('error_agree'), $information_info['title']);
					}
			}
			
			if(!empty($require_comment_status['confirm_order']['require_comment_status']) && $require_comment_status['confirm_order']['comment_status']){
				if(empty($this->request->post['comment'])){
					$json['error']['comment'] = (!empty($require_comment_status['confirm_order']['comment_error'][$this->config->get('config_language_id')]) ? $require_comment_status['confirm_order']['comment_error'][$this->config->get('config_language_id')] : $this->language->get('text_comment'));
				}
			}
			
			if(empty($this->request->post['delivery_date']) && $this->config->get('onepagecheckout_delivery_required')){
				$json['error']['delivery_date'] = (!empty($require_comment_status['delivery']['required'][$this->config->get('config_language_id')]) ? $require_comment_status['delivery']['required'][$this->config->get('config_language_id')] : 'Required Delivery');
			}
			
			if(!isset($json['error'])){
				$json['success'] = 'confirm';
			}
		
			$this->session->data['comment'] = (isset($this->request->post['comment']) ? $this->request->post['comment'] : '');
			
			$this->session->data['delivery_date'] = (isset($this->request->post['delivery_date']) ? $this->request->post['delivery_date'] : '');
			
			$this->session->data['agree'] = (isset($this->request->post['agree']) ? $this->request->post['agree'] : '');
			/*Delivery ADDRESS END*/
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	private function save($data,$customer_group_id){
		$this->load->model('extension/onepagecheckout/customer');

		$json=array();
		// Validate if customer is already logged out.
		if($this->customer->isLogged()){
			$json['redirect'] = $this->url->link('checkout/checkout', '', true);
		}

		if($data['account_type']=='register'){
			$randomString='';
			if(!isset($data['personal_details']['password'])){
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < 8; $i++){
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
				
				$data['personal_details']['password'] = $randomString;
			}
            $this->load->model('account/customer');
			$customer_id = $this->model_account_customer->addCustomer($data['personal_details']);
			$this->model_account_customer->deleteLoginAttempts($data['personal_details']['email']);
			$this->session->data['account'] = 'register';
			$this->load->model('account/customer_group');
			$customer_group_info = $this->model_account_customer_group->getCustomerGroup($customer_group_id);

			if ($customer_group_info && !$customer_group_info['approval']) {

			    $this->customer->login($data['personal_details']['email'], $data['personal_details']['password']);

				// Default Payment Address
				$this->load->model('account/address');
                $this->load->model('account/customer');
                $this->load->model('checkout/order');
                $this->load->model('extension/onepagecheckout/customer');

                $address_id = $this->model_extension_onepagecheckout_customer->addAddress($data['personal_details']);
                $this->session->data['shipping_address'] = $this->model_account_address->getAddress($address_id);
                $this->session->data['payment_address'] = $this->session->data['shipping_address'];
                $account = array();
                $account['name'] = $data['personal_details']['firstname'];
                $account['email'] = $data['personal_details']['email'];
                $account['phone'] = $data['personal_details']['telephone'];
                $account['shipping_city'] = $this->model_checkout_order->getCity($data['personal_details']['city']);
                $account['shipping_state'] = $this->model_checkout_order->getZoneName($data['personal_details']['zone_id']);
                $account['shipping_address'] = $data['personal_details']['address_1'];
                $account['shipping_country'] ='Pakistan';
                $account['sts'] = time();
                $account['mts'] = time();
                $refno = $this->addAccount($account);

                $this->model_account_customer->CustomerCRMref($refno,$this->customer->getId() );
                /*
                $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                if ($this->cart->hasShipping()){
                    if (!empty($data['personal_details']['shipping_address'])){
                        $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                    }else{
                        $this->session->data['shipping_address'] = $this->model_account_address->getAddress($address_id);
                    }
                }*/
                $json['success'] = 'register';
			} else {

				$json['redirect'] = $this->url->link('account/success');
			}
		}
		
		//Guest
		if($data['account_type']=='guest'){
            $customer_id = $this->model_extension_onepagecheckout_customer->getCustomerID($data['personal_details']['email']);
		    if($customer_id){
                $this->session->data['guest']['customer_id'] = $customer_id;
		    } else {
                $data['personal_details']['guest'] = 1;
                $custom_customer_id = $this->model_extension_onepagecheckout_customer->addCustomer($data['personal_details']);
                $this->load->model('account/customer');
                $this->load->model('checkout/order');
                $account = array();
                $account['name'] = $data['personal_details']['firstname'];
                $account['email'] = $data['personal_details']['email'];
                $account['phone'] = $data['personal_details']['telephone'];
                $account['shipping_city'] = $this->model_checkout_order->getCity($data['personal_details']['city']);
                $account['shipping_state'] = $this->model_checkout_order->getZoneName($data['personal_details']['zone_id']);
                $account['shipping_address'] = $data['personal_details']['address_1'];
                $account['shipping_country'] ='Pakistan';
                $account['sts'] = time();
                $account['mts'] = time();
                $refno = $this->addAccount($account);
                $this->model_account_customer->CustomerCRMref($refno,$custom_customer_id);
                $this->session->data['guest']['customer_id'] = $custom_customer_id;

            }





		        $this->session->data['account'] = 'guest';
				$this->session->data['guest']['customer_group_id'] = $customer_group_id;
				$this->session->data['guest']['firstname'] = (isset($data['personal_details']['firstname']) ? $data['personal_details']['firstname'] : '');
				$this->session->data['guest']['lastname'] = (isset($data['personal_details']['lastname']) ? $data['personal_details']['lastname'] : '');
				$this->session->data['guest']['email'] = (isset($data['personal_details']['email']) ? $data['personal_details']['email'] : '');
				$this->session->data['guest']['telephone'] = (isset($data['personal_details']['telephone']) ? $data['personal_details']['telephone'] : '');
				$this->session->data['guest']['fax'] = (isset($data['personal_details']['fax']) ? $data['personal_details']['fax'] : '');

				if (isset($data['personal_details']['custom_field']['account'])) {
					$this->session->data['guest']['custom_field'] = $data['personal_details']['custom_field']['account'];
				} else {
					$this->session->data['guest']['custom_field'] = array();
				}

				$this->session->data['payment_address']['firstname']  = (isset($data['personal_details']['firstname']) ? $data['personal_details']['firstname'] : '');
				$this->session->data['payment_address']['lastname']   = (isset($data['personal_details']['lastname']) ? $data['personal_details']['lastname'] : '');
				$this->session->data['payment_address']['company']    = (isset($data['personal_details']['company']) ? $data['personal_details']['company'] : '');
				$this->session->data['payment_address']['address_1']  = (isset($data['personal_details']['address_1']) ? $data['personal_details']['address_1'] : '');
				$this->session->data['payment_address']['address_2']  = (isset($data['personal_details']['address_2']) ? $data['personal_details']['address_2'] : '');
				$this->session->data['payment_address']['postcode']   = (isset($data['personal_details']['postcode']) ? $data['personal_details']['postcode'] : '');
				$this->session->data['payment_address']['city'] 		  = (isset($data['personal_details']['city']) ? $data['personal_details']['city'] : '');
				$this->session->data['payment_address']['country_id'] = (isset($data['personal_details']['country_id']) ? $data['personal_details']['country_id'] : 0);
				$this->session->data['payment_address']['zone_id'] 	  = (isset($data['personal_details']['zone_id']) ? $data['personal_details']['zone_id'] : 0);

				$this->load->model('localisation/country');

				$country_info = $this->model_localisation_country->getCountry((isset($data['personal_details']['country_id']) ? $data['personal_details']['country_id'] : 0));

				if ($country_info) {
					$this->session->data['payment_address']['country'] = $country_info['name'];
					$this->session->data['payment_address']['iso_code_2'] = $country_info['iso_code_2'];
					$this->session->data['payment_address']['iso_code_3'] = $country_info['iso_code_3'];
					$this->session->data['payment_address']['address_format'] = $country_info['address_format'];
				} else {
					$this->session->data['payment_address']['country'] = '';
					$this->session->data['payment_address']['iso_code_2'] = '';
					$this->session->data['payment_address']['iso_code_3'] = '';
					$this->session->data['payment_address']['address_format'] = '';
				}

				if (isset($data['personal_details']['custom_field']['address'])) {
					$this->session->data['payment_address']['custom_field'] = $data['personal_details']['custom_field']['address'];
				} else {
					$this->session->data['payment_address']['custom_field'] = array();
				}

				$this->load->model('localisation/zone');

				$zone_info = $this->model_localisation_zone->getZone($data['personal_details']['zone_id']);

				if ($zone_info) {
					$this->session->data['payment_address']['zone'] = $zone_info['name'];
					$this->session->data['payment_address']['zone_code'] = $zone_info['code'];
				} else {
					$this->session->data['payment_address']['zone'] = '';
					$this->session->data['payment_address']['zone_code'] = '';
				}

				if (!empty($data['personal_details']['shipping_address'])) {
					$this->session->data['guest']['shipping_address'] = $data['personal_details']['shipping_address'];
				} else {
					$this->session->data['guest']['shipping_address'] = false;
				}
				
				if ($this->cart->hasShipping()){
					if ($this->session->data['guest']['shipping_address']) {
						$this->session->data['shipping_address']['firstname'] = (isset($data['personal_details']['firstname']) ? $data['personal_details']['firstname'] : '');
						$this->session->data['shipping_address']['lastname'] = (isset($data['personal_details']['lastname']) ? $data['personal_details']['lastname'] : '');
						$this->session->data['shipping_address']['company'] = (isset($data['personal_details']['company']) ? $data['personal_details']['company'] : '');
						$this->session->data['shipping_address']['address_1'] = (isset($data['personal_details']['address_1']) ? $data['personal_details']['address_1'] : '');
						$this->session->data['shipping_address']['address_2'] = (isset($data['personal_details']['address_2']) ? $data['personal_details']['address_2'] : '');
						$this->session->data['shipping_address']['postcode'] = (isset($data['personal_details']['postcode']) ? $data['personal_details']['postcode'] : '');
						$this->session->data['shipping_address']['city'] = (isset($data['personal_details']['city']) ? $data['personal_details']['city'] : '');
						$this->session->data['shipping_address']['country_id'] = (isset($data['personal_details']['country_id']) ? $data['personal_details']['country_id'] : '');
						$this->session->data['shipping_address']['zone_id'] = (isset($data['personal_details']['zone_id']) ? $data['personal_details']['zone_id'] : '');

						if ($country_info) {
							$this->session->data['shipping_address']['country'] = $country_info['name'];
							$this->session->data['shipping_address']['iso_code_2'] = $country_info['iso_code_2'];
							$this->session->data['shipping_address']['iso_code_3'] = $country_info['iso_code_3'];
							$this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
						} else {
							$this->session->data['shipping_address']['country'] = '';
							$this->session->data['shipping_address']['iso_code_2'] = '';
							$this->session->data['shipping_address']['iso_code_3'] = '';
							$this->session->data['shipping_address']['address_format'] = '';
						}

						if ($zone_info) {
							$this->session->data['shipping_address']['zone'] = $zone_info['name'];
							$this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
						} else {
							$this->session->data['shipping_address']['zone'] = '';
							$this->session->data['shipping_address']['zone_code'] = '';
						}

						if (isset($data['personal_details']['custom_field']['address'])) {
							$this->session->data['shipping_address']['custom_field'] = $data['personal_details']['custom_field']['address'];
						} else {
							$this->session->data['shipping_address']['custom_field'] = array();
						}
					}else{
						$this->load->model('onepagecheckout/customer');
						
						$this->session->data['shipping_address']['firstname'] = (isset($data['delivery_details']['firstname']) ? $data['delivery_details']['firstname'] : '');
						$this->session->data['shipping_address']['lastname'] = (isset($data['delivery_details']['lastname']) ? $data['delivery_details']['lastname'] : '');
						$this->session->data['shipping_address']['company'] = (isset($data['delivery_details']['company']) ? $data['delivery_details']['company'] : '');
						$this->session->data['shipping_address']['address_1'] = (isset($data['delivery_details']['address_1']) ? $data['delivery_details']['address_1'] : '');
						$this->session->data['shipping_address']['address_2'] = (isset($data['delivery_details']['address_2']) ? $data['delivery_details']['address_2'] : '');
						$this->session->data['shipping_address']['postcode'] = (isset($data['delivery_details']['postcode']) ? $data['delivery_details']['postcode'] : '');
						$this->session->data['shipping_address']['city'] = (isset($data['delivery_details']['city']) ? $data['delivery_details']['city'] : '');
						$this->session->data['shipping_address']['country_id'] = (isset($data['delivery_details']['country_id']) ? $data['delivery_details']['country_id'] : '');
						$this->session->data['shipping_address']['zone_id'] = (isset($data['delivery_details']['zone_id']) ? $data['delivery_details']['zone_id'] : '');

						$this->load->model('localisation/country');

						$country_info = $this->model_localisation_country->getCountry((isset($data['delivery_details']['country_id']) ? $data['delivery_details']['country_id'] : ''));

						if ($country_info) {
							$this->session->data['shipping_address']['country'] = $country_info['name'];
							$this->session->data['shipping_address']['iso_code_2'] = $country_info['iso_code_2'];
							$this->session->data['shipping_address']['iso_code_3'] = $country_info['iso_code_3'];
							$this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
						} else {
							$this->session->data['shipping_address']['country'] = '';
							$this->session->data['shipping_address']['iso_code_2'] = '';
							$this->session->data['shipping_address']['iso_code_3'] = '';
							$this->session->data['shipping_address']['address_format'] = '';
						}

						$this->load->model('localisation/zone');

						$zone_info = $this->model_localisation_zone->getZone((isset($data['delivery_details']['zone_id']) ? $data['delivery_details']['zone_id'] : ''));

						if ($zone_info) {
							$this->session->data['shipping_address']['zone'] = $zone_info['name'];
							$this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
						} else {
							$this->session->data['shipping_address']['zone'] = '';
							$this->session->data['shipping_address']['zone_code'] = '';
						}

						if (isset($data['delivery_details']['custom_field'])) {
							$this->session->data['shipping_address']['custom_field'] = $data['delivery_details']['custom_field'];
						} else {
							$this->session->data['shipping_address']['custom_field'] = array();
						}
					}
				}
				$json['success'] = 'Guest';
		 }
		 //Guest
		return $json;
	}


    public function token(){
        $options = [
            'client_id' => '4b7f2ea5-87f1-fbeb-bf6a-5b604348c73a',
            'client_secret' => 'bargain2015',
            'scope' => 'read write profile',
            'username' => 'admin',
            'password' => 'BAR)(*gain',
        ];
        $flow = new APIClient\AuthorizationFlow('https://bargain.1crmcloud.com/api.php', $options);
        $access_token = $flow->init('password');
        return $access_token;
    }

    public function addAccount ($account) {
        $token = $this->token();
        $auth = new Authentication\OAuth($token);
        $client = new APIClient\Client('https://bargain.1crmcloud.com/api.php', $auth);
        $account_data = [
            'name' => $account['name'],
            'email1' => $account['email'],
            'is_supplier' => true,
            'industry' => 'Technology',
            'account_type' => 'Customer',
            'phone_office' => $account['phone'],
            'billing_address_city' => $account['shipping_city'],
            'billing_address_state' => $account['shipping_state'],
            'billing_address_country' => $account['shipping_country'],
            'billing_address_street' => $account['shipping_address'],
            'shipping_address_city' => $account['shipping_city'],
            'shipping_address_state' => $account['shipping_state'],
            'shipping_address_country' => $account['shipping_country'],
            'shipping_address_street' => $account['shipping_address'],
            'website' => 'https://www.bargain.pk/'
        ];
        $model = $client->model('Account');
        $account_id = $model->create($account_data);
        return $account_id;
    }
}