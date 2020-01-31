<?php  class ControllerExtensionModuleNewsletter extends Controller {
    public function index() {
        $data['module_title'] = 'Newsletter';
        $data['module_text'] = '';
        $data['input_placeholder'] = '';
        $data['subscribe_text'] = 'Subscribe';
        $data['unsubscribe_text'] = 'Unsubscribe';

        if(isset($setting[$this->config->get('config_language_id')]['module_title'])) $data['module_title'] = $setting[$this->config->get('config_language_id')]['module_title'];

        if(isset($setting[$this->config->get('config_language_id')]['module_text'])) $data['module_text'] = html_entity_decode($setting[$this->config->get('config_language_id')]['module_text'], ENT_QUOTES, 'UTF-8');

        if(isset($setting[$this->config->get('config_language_id')]['input_placeholder'])) $data['input_placeholder'] = $setting[$this->config->get('config_language_id')]['input_placeholder'];

        if(isset($setting[$this->config->get('config_language_id')]['subscribe_text'])) $data['subscribe_text'] = $setting[$this->config->get('config_language_id')]['subscribe_text'];

        if(isset($setting[$this->config->get('config_language_id')]['unsubscribe_text'])) $data['unsubscribe_text'] = $setting[$this->config->get('config_language_id')]['unsubscribe_text'];

        $data['button_unsubscribe'] = $setting['button_unsubscribe'];
        $data['position'] = $setting['position'];
        $data['module_id'] = rand(0, 5000);

        $data['subscribe_url'] = $this->url->link('module/newsletter/subscribe', '', 'SSL');
        $data['unsubscribe_url'] = $this->url->link('module/newsletter/unsubscribe', '', 'SSL');


    }


    public function getText($text) {
        $newsletter_settings = $this->config->get('newsletter_settings');
        $subscribe_message = false;
        $subscribe_ButNoConfirm_message = false;
        $unsubscribe_message = false;
        $confirm_unsubscribe = false;
        $invalid_email_message = false;
        $email_not_found = false;
        if($subscribe_message == '') $subscribe_message = "Your subscription has been confirmed. You've been added to our list and will hear from us soon.";
        if($subscribe_ButNoConfirm_message == '') $subscribe_ButNoConfirm_message = " Please check your email to confirm the newsletter.";
        if($unsubscribe_message == '') $unsubscribe_message = 'You have successfully unsubscribed from our newsletter.';
        if($confirm_unsubscribe == '') $confirm_unsubscribe = 'That email address is already subscribed to the list. ';
        if($invalid_email_message == '') $invalid_email_message = 'Invalid email address.';
        if($email_not_found == '') $email_not_found = 'Your e-mail not found.';
        
        if($text == 'subscribe_message') return $subscribe_message;
        if($text == 'subscribe_ButNoConfirm_message') return $subscribe_ButNoConfirm_message;
        if($text == 'unsubscribe_message') return $unsubscribe_message;
        if($text == 'confirm_unsubscribe') return $confirm_unsubscribe;
        if($text == 'invalid_email_message') return $invalid_email_message;
        if($text == 'email_not_found') return $email_not_found;
    }
	

	public function subscribe() {
		$this->load->model('newsletter/newsletter');
		$this->load->language('mail/newsletter');
		$json = array();
		if ($this->validateEmail()) {
		    $newsletter = $this->model_newsletter_newsletter;
		    if ($newsletter->isSubscribed($this->request->post['email'])) {
		        $json['error'] = 1;
		        $json['message'] = $this->getText('confirm_unsubscribe');
		    } else {

                $data['text_welcome'] = sprintf($this->language->get('text_welcome'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                $data['text_info']  = $this->language->get('text_info');
                $code =  $this->url->link('extension/module/newsletter/confirm', 'subscribe='.$newsletter->subscribe($this->request->post['email']));

                $data['href'] = html_entity_decode($code, ENT_QUOTES, 'UTF-8');
                $mail = new Mail($this->config->get('config_mail_engine'));
                $mail->parameter = $this->config->get('config_mail_parameter');
                $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                $mail->smtp_port = $this->config->get('config_mail_smtp_port');
                $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

                $mail->setTo($this->request->post['email']);
                $mail->setFrom('noreply@bargain.pk');
                $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                $mail->setSubject(sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')));
                $mail->setText($this->load->view('mail/newsletter', $data));
                $mail->send();

		        $json['error'] = 0;
		        $json['message'] = $this->getText('subscribe_ButNoConfirm_message');
		    }
		} else {
		    $json['error'] = 2;
		    $json['message'] = $this->getText('invalid_email_message');
		}
		
		$this->response->setOutput(json_encode($json));
	}
	
	public function unsubscribe() {
		$this->load->model('newsletter/newsletter');
		$json = array();
		if ($this->validateEmail()) {
		    $newsletter = $this->model_newsletter_newsletter;
		    if ($newsletter->isSubscribed($this->request->post['email'])) {
		    	$newsletter->unsubscribe($this->request->post['email']);
		        $json['message'] = $this->getText('unsubscribe_message');
		    } else {
		        $json['message'] =  $this->getText('email_not_found');
		    }
		} else {
		    $json['message'] = $this->getText('invalid_email_message');
		}
		
		$this->response->setOutput(json_encode($json));
	}
	
	private function validateEmail() {
	    return isset($this->request->post['email']) && preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $this->request->post['email']);
	}
    public function confirm() {
        $this->load->language('information/information');
        $this->load->model('newsletter/newsletter');
        $this->load->model('catalog/information');
        $code =  $this->request->get['subscribe'];
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $key =explode('_',$code);
        $newsletter = $this->model_newsletter_newsletter;
        $auth = $newsletter->validateCode($key[0],(int)$key[1]);

        if ($auth) {
            $this->document->setTitle('Newsletter Subscribtion');
            $this->document->setDescription('Bargain');
            $this->document->setKeywords('Bargain');

            $information_info = $this->model_catalog_information->getInformation(8);
            $data['breadcrumbs'][] = array(
                'text' => $information_info['title'],
                'href' => $this->url->link('information/information', 'information_id=' .  8)
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

            $this->response->setOutput($this->load->view('information/information', $data));

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
}
?>