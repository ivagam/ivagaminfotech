<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Project extends BaseController
{
    protected $projectModel;
    protected $session;
    protected $request;

    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->session = session();
        $this->request = service('request');

        if (!$this->session->get('admin_logged_in')) {
            redirect()->to(base_url('admin'))->send();
            exit;
        }
    }

    public function index()
    {
        $data['project'] = $this->projectModel->findAll();
        return view('admin/project/index', $data);
    }

    public function create()
    {
        return view('admin/project/create');
    }

    public function store()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'url' => $this->request->getPost('url'),
            'meta_description' => $this->request->getPost('meta_description'),
            'meta_key' => $this->request->getPost('meta_keywords'),
        ];
        
        $image = $this->request->getFile('image');
        if ($image && !$image->hasMoved() && $image->isValid()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/', $newName);
            $data['image'] = $newName;
        }

        $this->projectModel->insert($data);
        return redirect()->to(base_url('admin/project'));
    }

    public function edit($id)
    {
        $data['project'] = $this->projectModel->find($id);
        return view('admin/project/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'url' => $this->request->getPost('url'),
            'meta_description' => $this->request->getPost('meta_description'),
            'meta_key' => $this->request->getPost('meta_keywords'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/', $newName);
            $data['image'] = $newName;
        }

        $this->projectModel->update($id, $data);
        return redirect()->to(base_url('admin/project'));
    }

    public function delete($id)
    {
        $this->projectModel->delete($id);
        return redirect()->to(base_url('admin/project'));
    }
}
