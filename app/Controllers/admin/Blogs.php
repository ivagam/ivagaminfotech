<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blogs extends BaseController
{
    protected $blogModel;
    protected $session;

    public function __construct()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        helper(['form', 'url']);
        $this->blogModel = new BlogModel();
        $this->session = session();

        if (!$this->session->get('admin_logged_in')) {
            return redirect()->to(base_url('admin'))->send();
        }
    }

    public function index()
    {
        $data['blogs'] = $this->blogModel->get_all();
        return view('admin/blogs/index', $data);
    }

    public function create()
    {
        return view('admin/blogs/create');
    }

    public function store()
    {
        $validationRules = [
            'title' => 'required',
            'description' => 'required',
            // add other validation rules if needed
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/png]',
                'max_size[image,2048]',
            ],
        ];

        if (!$this->validate($validationRules)) {
            return view('admin/blogs/create', [
                'validation' => $this->validator,
            ]);
        }

        $image = $this->request->getFile('image');
        $imageName = null;
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/', $imageName);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'url' => $this->request->getPost('url'),
            'meta_description' => $this->request->getPost('meta_description'),
            'meta_key' => $this->request->getPost('meta_keywords'),
            'image' => $imageName,
        ];

        $this->blogModel->insert($data);

        return redirect()->to(base_url('admin/blogs'));
    }

    public function edit($id)
    {
        $data['blog'] = $this->blogModel->get($id);
        if (!$data['blog']) {
            return redirect()->to(base_url('admin/blogs'));
        }
        return view('admin/blogs/edit', $data);
    }

    public function update($id)
    {
        $validationRules = [
            'title' => 'required',
            'description' => 'required',
            'image' => [
                'mime_in[image,image/jpg,image/jpeg,image/png]',
                'max_size[image,2048]',
            ],
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'url' => $this->request->getPost('url'),
            'meta_description' => $this->request->getPost('meta_description'),
            'meta_key' => $this->request->getPost('meta_keywords'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/', $imageName);
            $data['image'] = $imageName;
        }

        $this->blogModel->update($id, $data);

        return redirect()->to(base_url('admin/blogs'));
    }

    public function delete($id)
    {
        $this->blogModel->delete($id);
        return redirect()->to(base_url('admin/blogs'));
    }
}
