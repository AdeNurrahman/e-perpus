<?php
 
class register extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register');
	}

	public function register($data)
		{           
	        $query = $this->db->insert("member", $data);

	        if($query){
	            return true;
	        }else{
	            return false;
	        }
	    }

			// public function SaveForm($form_data)
			// {
			// 	$this->db->insert('admin', $form_data);
				
			// 	if ($this->db->affected_rows() == '1')
			// 	{
			// 	return TRUE;
			// 	}
			// 	return FALSE;
			// }
			
			// public function cek_login($email, $password)
			// {
			// 	$this->db->select('*');
			// 	$this->db->from('admin');
			// 	$this->db->where('email', $email);
			// 	$this->db->where('password',$password);
				
			// 	return $this->db->get()->num_rows(); 
			// }
}