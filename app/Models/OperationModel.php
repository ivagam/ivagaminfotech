<?php

namespace App\Models;

use CodeIgniter\Model;

class OperationModel extends Model
{
    // Blog table properties
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image', 'url', 'meta_description', 'meta_key'];
    protected $returnType = 'array';

    // Insert a new blog
    public function insert_blog(array $data)
    {
        return $this->insert($data);
    }

    // Retrieve all blogs
    public function get_all_blogs()
    {
        return $this->findAll();
    }

    // Retrieve a single blog by ID
    public function get_blog_by_id(int $id)
    {
        return $this->find($id);
    }

    // Update a blog by ID
    public function update_blog(int $id, array $data)
    {
        return $this->update($id, $data);
    }

    // Delete a blog by ID
    public function delete_blog(int $id)
    {
        return $this->delete($id);
    }

    // Testimonial table name
    protected $testimonialTable = 'teastimonials'; // Check table name spelling

    // Insert a new testimonial
    public function insert_teastimonial(array $data)
    {
        return $this->db->table($this->testimonialTable)->insert($data);
    }

    // Retrieve all testimonials
    public function get_all_testimonials()
    {
        return $this->db->table($this->testimonialTable)->get()->getResultArray();
    }

    // Retrieve a single testimonial by ID
    public function get_teastimonial_by_id(int $id)
    {
        return $this->db->table($this->testimonialTable)->where('id', $id)->get()->getRowArray();
    }

    // Update a testimonial by ID
    public function update_teastimonial(int $id, array $data)
    {
        return $this->db->table($this->testimonialTable)->where('id', $id)->update($data);
    }

    // Delete a testimonial by ID
    public function delete_teastimonial(int $id)
    {
        return $this->db->table($this->testimonialTable)->delete(['id' => $id]);
    }
}
