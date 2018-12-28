<?php 
 
class M_admin extends CI_Model{	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function v_register($data)
		{           
	        $query = $this->db->insert("member", $data);

	        if($query){
	            return true;
	        }else{
	            return false;
	        }
	    }

	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		return $this->db->get()->num_rows();
	}

	public function v_buku()
	{
		$query = $this->db->select("*")
				->from('buku')
				->order_by('jd_buku')
				->get();
		return $query->result();

	}

	public function v_anggota()
	{
		$query = $this->db->select("*")
				->from('v_anggota')
				->order_by('nama')
				->get();
		return $query->result();

	}

	public function v_pinjam()
	{
		$query = $this->db->select("*")
				->from('v_pinjam')
				->order_by('kd_pinjam')
				->get();
		return $query->result();

	}

	public function hapusDataBuku($hasil)
	{
		$this->db->where('kd_buku', $hasil);
		$this->db->delete('buku');
	}




}