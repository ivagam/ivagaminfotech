<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image', 'url', 'meta_description', 'meta_key'];
    protected $returnType = 'object';

    public function get_all()
    {
        return $this->findAll();
    }

    public function get($id)
    {
        return $this->find($id);
    }

    public function insert_service(array $data)
    {
        return $this->insert($data);
    }

    public function update_service(int $id, array $data)
    {
        return $this->update($id, $data);
    }

    public function delete_service(int $id)
    {
        return $this->delete($id);
    }
}
