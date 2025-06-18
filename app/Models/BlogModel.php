<?php

namespace App\Models;

use CodeIgniter\Database\Database;

class BlogModel
{
    protected $db;
    protected $table = 'blog';

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function get_all()
    {
        return $this->db->table($this->table)->get()->getResult();
    }

    public function get($id)
    {
        return $this->db->table($this->table)->where('id', $id)->get()->getRow();
    }

    public function insert($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update($id, $data)
    {
        return $this->db->table($this->table)->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->db->table($this->table)->where('id', $id)->delete();
    }
}
