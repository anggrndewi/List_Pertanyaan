<?php

namespace App\Models;

use CodeIgniter\Model;

class sakuModel extends Model
{
    protected $table      = 'saku';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['pertanyaan', 'jawaban'];

    public function search($keyword)
	{
		if(!$keyword){
			return null;
		}
		$this->db->like('pertanyaan', $keyword);
		$this->db->or_like('jawaban', $keyword);
		$query = $this->db->get($this->table);
		return $query->result();
	}
}