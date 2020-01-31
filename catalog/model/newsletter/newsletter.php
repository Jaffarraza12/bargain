<?php
/* 
Version: 1.0
Author: Artur Sułkowski
Website: http://artursulkowski.pl
*/

class ModelNewsletterNewsletter extends Model {		
    public function isSubscribed($email) {
        $query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE email = '" . $email . "' AND newsletter = '1'");
        if ($query->num_rows > 0) return true;
        
        $query = $this->db->query("SELECT email FROM " . DB_PREFIX . "newsletter WHERE email = '" . $email . "' AND active=1");
        if ($query->num_rows > 0) return true;

        return false;
    }


    
	public function subscribe($email) {
	    $query = $this->db->query("SELECT customer_id FROM " . DB_PREFIX . "customer WHERE email = '" . $email . "'");
	    if ($query->num_rows > 0) {
	        $this->db->query("UPDATE " . DB_PREFIX . "customer SET newsletter = '1' WHERE customer_id = '" . (int)$query->row['customer_id'] . "'");
	    } else {
            $this->db->query("DELETE FROM " . DB_PREFIX . "newsletter WHERE email = '" . $email . "'");
	        $this->db->query("INSERT INTO " . DB_PREFIX . "newsletter (email,code,sts) VALUES ('" . $email . "','".$this->randCode(14)."', NOW())");

            $query = $this->db->query("SELECT `code`,`id` FROM " . DB_PREFIX . "newsletter WHERE email = '" . $email . "' ");
            $row =  $query->row;
            return $row['code'].'_'.$row['id'];
        }
	}
	
	public function unsubscribe($email) {
	    $this->db->query("UPDATE " . DB_PREFIX . "customer SET newsletter = 0 WHERE email = '" . $email . "'");
	    $this->db->query("DELETE FROM " . DB_PREFIX . "newsletter WHERE email = '" . $email . "'");
	}

    public function validateCode($code,$id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "newsletter WHERE code = '" . $code . "' AND id='".$id."'");
        if ($query->num_rows > 0) {
            $this->db->query("UPDATE " . DB_PREFIX . "newsletter SET active =1 WHERE id= '" . $id . "'");
            return true;
        }

        return false;
    }

	private function randCode($charac){
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;

        while ($i <= $charac) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }

        return $pass;
    }
}