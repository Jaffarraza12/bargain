<?php
/* 
Version: 1.0
Author: Artur Sułkowski
Website: http://artursulkowski.pl
*/

class ModelNewsletterWhatsapp extends Model {
    public function isSubscribed($number) {
        $query = $this->db->query("SELECT number FROM " . DB_PREFIX . "number WHERE  number= '" . $number . "' AND status = '1'");
        if ($query->num_rows > 0) return true;
        

        return false;
    }
    
	public function subscribe($number) {
	    $query = $this->db->query("SELECT number FROM " . DB_PREFIX . "number WHERE number = '" . $number . "'");
	    if ($query->num_rows == 0) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "number (number,status,sts,mts) VALUES ('" . $number . "','1',NOW(),NOW())");
        }
	}
	
	public function unsubscribe($number) {
	    $this->db->query("UPDATE " . DB_PREFIX . "number SET status = 0,mts=NOW() WHERE email = '" . $number . "'");

	}
}