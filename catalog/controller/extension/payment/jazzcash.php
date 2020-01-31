<?php

class ControllerExtensionPaymentJazzCash extends Controller
{
    
    public function index()
    {
        $this->language->load('extension/payment/jazzcash');
        $data['button_confirm'] = $this->language->get('button_confirm');
        $this->load->model('checkout/order');
        $order_info   = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        $invoice_desc = '';
        
        $data['pp_MerchantID']  = $this->config->get('payment_jazzcash_merchantId');
        $data['pp_Password']    = $this->config->get('payment_jazzcash_password');
        $data['pp_ActionUrl']   = $this->config->get('payment_jazzcash_actionUrl');
        $data['pp_ReturnURL']   = $this->config->get('payment_jazzcash_returnUrl'); //$this->url->link('extension/payment/jazzcash/callback');
		$data['pp_Version']     = '1.1';
        $data['pp_Language']    = 'EN';
        $data['pp_TxnCurrency'] = 'PKR';
        $integritySalt          = $this->config->get('payment_jazzcash_integritySalt');
        $expiryHours            = $this->config->get('payment_jazzcash_txnExpiryHours');
        
        date_default_timezone_set("Asia/karachi");
        $dateTime       = new DateTime();
        $txnDateTime    = $dateTime->format('YmdHis');
        $txnRefNo       = "T" . $dateTime->format('YmdHis');
        $expiryDateTime = $dateTime;
        $expiryDateTime->modify('+' . $expiryHours . ' hours');
        $data['pp_TxnRefNo']          = $txnRefNo;
        $data['pp_TxnDateTime']       = $txnDateTime;
        $data['pp_TxnExpiryDateTime'] = $expiryDateTime->format('YmdHis');
        
        foreach ($this->cart->getProducts() as $product) {
            $item_price        = $this->currency->format($product['price'], $order_info['currency_code'], false, false);
            $item_total        = $this->currency->format($product['total'], $order_info['currency_code'], false, false);
            $item              = new stdClass();
            $item->SKU         = (string) substr($product['product_id'], 0, 12);
            $item->Description = (string) substr($product['name'], 0, 26);
            $item->Quantity    = strval($product['quantity']);
            $item->UnitCost    = strval($item_price * 100);
            $item->Total       = strval($item_total * 100);
            $request->Items[]  = $item;
            $invoice_desc .= $product['name'] . ', ';
        }
        
        $invoice_desc = (string) substr($invoice_desc, 0, -2);
        if (strlen($invoice_desc) > 64) {
            $invoice_desc = (string) substr($invoice_desc, 0, 61) . '...';
        }
        
        $amountTmp                = $order_info['total'] * 100;
        $amount                   = explode('.', $amountTmp);
        $amount                   = $amount[0];
        $data['pp_Amount']        = $amount;
        $data['pp_BillReference'] = $this->session->data['order_id'];
        $data['pp_Description']   = trim($invoice_desc, ",");
        $data['ppmpf_1']          = '1';
        $data['ppmpf_2']          = '2';
        $data['ppmpf_3']          = '3';
        $data['ppmpf_4']          = '4';
        $data['ppmpf_5']          = '5';
        
        $sortedArrayOld        = $integritySalt . '&' . $data['pp_Amount'] . '&' . $data['pp_BillReference'] . '&' . $data['pp_Description'] . '&' . $data['pp_Language'] . '&' . $data['pp_MerchantID'];
        $sortedArrayOld        = $sortedArrayOld . '&' . $data['pp_Password'] . '&' . $data['pp_ReturnURL'] . '&' . $data['pp_TxnCurrency'] . '&' . $data['pp_TxnDateTime'] . '&' . $data['pp_TxnExpiryDateTime'];
        $sortedArrayOld        = $sortedArrayOld . '&' . $data['pp_TxnRefNo'] . '&' . $data['pp_Version'] . '&' . $data['ppmpf_1'] . '&' . $data['ppmpf_2'] . '&' . $data['ppmpf_3'] . '&' . $data['ppmpf_4'] . '&' . $data['ppmpf_5'];
        $secureHash            = hash_hmac('sha256', $sortedArrayOld, $integritySalt);
        $data['pp_SecureHash'] = $secureHash;
        
		$this->session->data['jazzCashRequestData'] = $data;
		
        $data['button_confirm'] = $this->language->get('button_confirm');
        $data['continue']       = $this->url->link('checkout/success');
        
        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/extension/payment/jazzcash')) {
            return $this->load->view($this->config->get('config_template') . '/template/extension/payment/jazzcash', $data);
        } else {
            return $this->load->view('/extension/payment/jazzcash', $data);
        }
    }
    
    public function callback()
    {
        
        $comment               = "";
        $isResponseOk          = false;
        $isOrderSuccess        = false;
        $orderStatusCompleteId = '5';
        $orderStatusFailedId   = '10';
        $orderStatusPendingId  = '1';
        $sortedResponseArray   = array();
        
        if (!empty($_POST)) {
            foreach ($_POST as $key => $val) {
                $comment .= $key . "[" . $val . "],<br/>";
                $sortedResponseArray[$key] = $val;
            }
        }
        
        //getting JazzCash response params
        $_ResponseMessage      = $this->getEmptyIfNullFromPOST('pp_ResponseMessage');
        $_ResponseCode         = $this->getEmptyIfNullFromPOST('pp_ResponseCode');
        $_BillReference        = $this->getEmptyIfNullFromPOST('pp_BillReference');
        $_RetreivalReferenceNo = $this->getEmptyIfNullFromPOST('pp_RetreivalReferenceNo');
        $_TxnRefNo             = $this->getEmptyIfNullFromPOST('pp_TxnRefNo');
        $_SecureHash           = $this->getEmptyIfNullFromPOST('pp_SecureHash');
        $integritySalt         = $this->config->get('payment_jazzcash_integritySalt');
        $validateHash          = $this->config->get('payment_jazzcash_validateHash');
        
        if ($validateHash) {
            if (!$this->isNullOrEmptyString($integritySalt)) {
                //removing pp_SecureHash key
                unset($sortedResponseArray['pp_SecureHash']);
                //sorting array w.r.t key
                ksort($sortedResponseArray);
				
				$sortedResponseValuesArray = array();
                //Populating Sorted Array
                array_push($sortedResponseValuesArray, $integritySalt);
                
                foreach ($sortedResponseArray as $key => $val) {
                    if (!$this->isNullOrEmptyString($val)) {
                        array_push($sortedResponseValuesArray, $val);
                    }
                }
                
                //joining array of sorted response values 
                $sortedResponseValuesForHash = implode('&', $sortedResponseValuesArray);
                //Calculating Hash
                $CalSecureHash               = hash_hmac('sha256', $sortedResponseValuesForHash, $integritySalt);
				
                if (strtolower($CalSecureHash) == strtolower($_SecureHash)) {
                    $isResponseOk = true;
                } else {
                    $isResponseOk = false;
                    $comment .= "Secure Hash mismatched.";
                }
            } else {
                $isResponseOk = false;
                $comment .= "Secure Hash is empty.";
            }
        } else {
            $isResponseOk = true;
        }
		
		//validating request integrity
		$requestData = $this->session->data['jazzCashRequestData'];
		if($isResponseOk) {
			if(isset($requestData)) {
				if((strtolower($this->getEmptyIfNull($requestData['pp_TxnRefNo'])) == strtolower($this->getEmptyIfNull($sortedResponseArray['pp_TxnRefNo']))) && 
				(strtolower($this->getEmptyIfNull($requestData['pp_TxnDateTime'])) == strtolower($this->getEmptyIfNull($sortedResponseArray['pp_TxnDateTime']))) &&
				(strtolower($this->getEmptyIfNull($requestData['pp_MerchantID'])) == strtolower($this->getEmptyIfNull($sortedResponseArray['pp_MerchantID']))) && 
                (strtolower($this->getEmptyIfNull($requestData['pp_BillReference'])) == strtolower($this->getEmptyIfNull($sortedResponseArray['pp_BillReference']))) &&
                (strtolower($this->getEmptyIfNull($requestData['pp_Amount'])) == strtolower($this->getEmptyIfNull($sortedResponseArray['pp_Amount'])))) {
					$isResponseOk = true;
                }
                else {
                    $isResponseOk = false;
                    $comment .= "Response integrity violated. Response values are not same as Request.";
                }
			}
			else {
				$isResponseOk = false;
				$comment .= "Session is empty. Response integrity cannot be validated.";
			}
		}
        
        $order_id = 0;
        if (!$this->isNullOrEmptyString($_BillReference)) {
            $order_id = (int) $_BillReference;
        }
        
        $this->load->model('checkout/order');
        $order_info = $this->model_checkout_order->getOrder($order_id);
        
        if ($isResponseOk) {
            if ($_ResponseCode == '000') {
                $this->model_checkout_order->addOrderHistory($order_id, $orderStatusCompleteId, '' /*$comment*/, $_TxnRefNo, $notify = true);
                $isOrderSuccess = true;
            } else if ($_ResponseCode == '124') {
                $this->model_checkout_order->addOrderHistory($order_id, $orderStatusPendingId, '' /*$comment*/, $_TxnRefNo, $notify = true);
                $isOrderSuccess = true;
            } else {
                $this->model_checkout_order->addOrderHistory($order_id, $orderStatusFailedId, '' /*$comment*/, $_TxnRefNo, $notify = false);
                $isOrderSuccess = false;
            }
        } else {
            $this->model_checkout_order->addOrderHistory($order_id, $orderStatusFailedId, '' /*$comment*/, $_TxnRefNo, $notify = false);
            $isOrderSuccess = false;
        }
        
        if ($isOrderSuccess) {
            $this->response->redirect($this->url->link('checkout/success', $_ResponseMessage, true));
        } else {
            $this->response->redirect($this->url->link('checkout/failure', $_ResponseMessage, true));
        }
    }
    
    protected function isNullOrEmptyString($question)
    {
        return (!isset($question) || trim($question) === '');
    }
    
    protected function getEmptyIfNullFromPOST($key)
    {
        if (!isset($this->request->post[$key]) || trim($this->request->post[$key]) == "") {
            return "";
        } else {
            return $this->request->post[$key];
        }
    }
	
	protected function getEmptyIfNull($key)
    {
        if (!isset($key) || trim($key) == "") {
            return "";
        } else {
            return $key;
        }
    }
    
}