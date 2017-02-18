<?php
class bank_model extends CI_Model
{	
	public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

    public function verify_email($data)
    {
    	$where1 = array('email' => $data['email']);
    	$table = 'users';
    	$this->db->select('password');
    	$query = $this->db->get_where($table, $where1);

        foreach ( $query->result() as $pass1) {
        
            if ($pass1->password == $data['password']) {
                return 1;
            }
        }   
    }

    public function insert_into_db($data)
    {
        $this->db->insert('users', $data);
        return 1;
    }
}    