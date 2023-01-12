<?php

namespace App\Models;
use CodeIgniter\Model;
class Data_model extends Model{
	protected $table = 'karyawan';
	public function getKaryawan($id = false){
		if($id == false){
			return $this->findAll();
		}else{
			return $this->getWhere(['id' => $id]);
		}
	}

	public function saveKaryawan($data){
		$simpan = $this->db->table($this->table);
		return $simpan->insert($data);
	}

	public function editKaryawan($data, $id){
		$simpan = $this->db->table($this->table);
		$simpan->where('id', $id);
		return $simpan->update($data);
	}
}

?>