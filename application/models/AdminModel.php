<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model 
{

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->cdr = $this->load->database('cdr', TRUE);
    }

    public function CheckAdmin($username, $password_sha1) {
        $sql = "SELECT * FROM ampusers WHERE username = ".$this->db->escape($username)." AND password_sha1 = ".$this->db->escape($password_sha1)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function addAddress($user_token, $mobile_number, $prefer_name, $province, $city, $district, $subdistrict, $postal_code, $address, $is_default) {

        $created_at = date('Y-m-d H:i:s');
        $token = $user_token.rand(11111,99999);

        $sql = "INSERT INTO addresses(user_token, mobile_number, prefer_name, province, city, district, subdistrict, postal_code, address, is_default, token, created_at) VALUES 
        (
        ".$this->db->escape($user_token).",
        ".$this->db->escape($mobile_number).",
        ".$this->db->escape($prefer_name).",
        ".$this->db->escape($province).",
        ".$this->db->escape($city).",
        ".$this->db->escape($district).",
        ".$this->db->escape($subdistrict).", 
        ".$this->db->escape($postal_code).", 
        ".$this->db->escape($address).", 
        ".$this->db->escape($is_default).", 
        ".$this->db->escape($token).", 
        ".$this->db->escape($created_at)."
        )";

        $this->db->query($sql);
        return $this->db->affected_rows();
    }
}