<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image', 'url', 'meta_description', 'meta_key'];
    protected $returnType = 'object'; // or 'array' if you prefer

    public function get_all()
    {
        return $this->findAll();
    }

    public function get($id)
    {
        return $this->find($id);
    }

    public function insert_project(array $data)
    {
        return $this->insert($data);
    }

    public function update_project(int $id, array $data)
    {
        return $this->update($id, $data);
    }

    public function delete_project(int $id)
    {
        return $this->delete($id);
    }
}
