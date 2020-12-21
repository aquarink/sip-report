<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ClientsModel extends CI_Model 
{

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->cdr = $this->load->database('cdr', TRUE);
    }

    public function ClientAll() {
        $sql = "SELECT * FROM clients";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function CheckClient($uname, $passw) {
        echo $sql = "SELECT * FROM clients WHERE uname = ".$this->db->escape($uname)." AND passw = ".$this->db->escape($passw)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function AddClient($context, $uname, $passw) {

        $created_at = date('Y-m-d H:i:s');
        $token = md5($created_at.rand(11111,99999));

        $sql = "INSERT INTO clients(context, uname, passw, token, created_at) VALUES 
        (
        ".$this->db->escape($context).",
        ".$this->db->escape($uname).",
        ".$this->db->escape($passw).",
        ".$this->db->escape($token).",
        ".$this->db->escape($created_at)."
        )";

        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function resetDefaultAddress($token) {
        $sql = "UPDATE addresses SET is_default = 'no' WHERE user_token = ".$this->db->escape($token)." AND stat = 'exsist'";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function ContxtAll() {
        $sql = "SELECT * FROM sip WHERE keyword = 'context'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function CheckClientUsername($uname) {
        $sql = "SELECT * FROM clients WHERE uname = ".$this->db->escape($username)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }




    public function GetCallHistory() {

        if($this->session->userdata('context') == 'all') {
            // ADMIN
            $sql = "SELECT * FROM cdr";
        } else {
            // CLIENT
            $sql = "SELECT * FROM cdr WHERE dcontext = ".$this->cdr->escape($this->session->userdata('context'))."";
        }
        
        $query = $this->cdr->query($sql);
        return $query->result();
    }

    public function LastCallHistory() {

        if($this->session->userdata('context') == 'all') {
            // ADMIN
            $sql = "SELECT dst FROM cdr ORDER BY calldate DESC LIMIT 1";
        } else {
            // CLIENT
            $sql = "SELECT dst FROM cdr WHERE dcontext = ".$this->cdr->escape($this->session->userdata('context'))." ORDER BY calldate DESC LIMIT 1";
        }
        
        $query = $this->cdr->query($sql);
        return $query->result();
    }

    public function TotalDurationCallHistory() {

        if($this->session->userdata('context') == 'all') {
            // ADMIN
            $sql = "SELECT SUM(duration) total_duration FROM cdr";
        } else {
            // CLIENT
            $sql = "SELECT SUM(duration) total_duration FROM cdr WHERE dcontext = ".$this->cdr->escape($this->session->userdata('context'))."";
        }
        
        $query = $this->cdr->query($sql);
        return $query->result();
    }

    public function TotalBillSecCallHistory() {

        if($this->session->userdata('context') == 'all') {
            // ADMIN
            $sql = "SELECT SUM(billsec) total_billsec FROM cdr";
        } else {
            // CLIENT
            $sql = "SELECT SUM(billsec) total_billsec FROM cdr WHERE dcontext = ".$this->cdr->escape($this->session->userdata('context'))."";
        }
        
        $query = $this->cdr->query($sql);
        return $query->result();
    }
}