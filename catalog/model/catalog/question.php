<?php
class ModelCatalogQuestion extends Model {
    public function addQuestion($product_id, $data) {
        //$this->event->trigger('pre.review.add', $data);

        $this->db->query("INSERT INTO " . DB_PREFIX . "question SET question = '" . $this->db->escape($data['input-question']) . "', name= '" . $this->db->escape($data['input-question-name']) . "', product_id = '" . (int)$product_id . "',email = '" . $this->db->escape($data['input-question-email']) . "', status = '" . 0 . "', sts = NOW(), mts = NOW()");

        $question_id = $this->db->getLastId();

        if ($this->config->get('config_review_mail')) {
            $this->load->language('mail/review');
            $this->load->model('catalog/product');

            $product_info = $this->model_catalog_product->getProduct($product_id);

            $subject = sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));

            $message  = $this->language->get('text_waiting') . "\n";
            $message .= sprintf($this->language->get('text_product'), html_entity_decode($product_info['name'], ENT_QUOTES, 'UTF-8')) . "\n";
            $message .= sprintf($this->language->get('text_reviewer'), html_entity_decode($data['name'], ENT_QUOTES, 'UTF-8')) . "\n";
            $message .= sprintf($this->language->get('text_rating'), $data['rating']) . "\n";
            $message .= $this->language->get('text_review') . "\n";
            $message .= html_entity_decode($data['text'], ENT_QUOTES, 'UTF-8') . "\n\n";

            $mail = new Mail();
            $mail->protocol = $this->config->get('config_mail_protocol');
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            $mail->setTo($this->config->get('config_email'));
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $mail->setSubject($subject);
            $mail->setText($message);
            $mail->send();

            // Send to additional alert emails
            $emails = explode(',', $this->config->get('config_mail_alert'));

            foreach ($emails as $email) {
                if ($email && preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $email)) {
                    $mail->setTo($email);
                    $mail->send();
                }
            }
        }

        //$this->event->trigger('post.review.add', $review_id);
    }

	public function getQuestion($review_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT pd.name FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = r.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS product FROM " . DB_PREFIX . "question r WHERE r.id = '" . (int)$review_id . "'");

		return $query->row;
	}

	public function getQuestions($data = array()) {
		$sql = " SELECT * FROM  " . DB_PREFIX ."question q WHERE `status`=1 ";

		if (!empty($data['filter_product'])) {
			$sql .= " AND q.product_id ='" . (int)($data['filter_product']) . "'";
		}


		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

        $sql .= " ORDER BY  q.sort DESC";


		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalQuestions($data = array()) {

        $sql = " SELECT COUNT(*) AS total  FROM  " . DB_PREFIX ."question q WHERE `status`=1 ";

        if (!empty($data['filter_product'])) {
            $sql .= " AND q.product_id ='" . (int)($data['filter_product']) . "'";
        }



        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        }


		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalQuestionsAwaitingApproval() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "question WHERE status = '0'");

		return $query->row['total'];
	}
}