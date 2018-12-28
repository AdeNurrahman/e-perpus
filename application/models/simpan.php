<?php 


class simpan extends CI_model{

	public function simpan($data)
	{
		$query = $this->db->insert("member", $data);

		if($query){
			return true;
		}else{
			return false;
		}
	}
}