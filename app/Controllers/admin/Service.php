<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class Service extends BaseController
{
    protected $serviceModel;
    protected $session;
    protected $request;

    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
        $this->session = session();
        $this->request = service('request');

        if (!$this->session->get('admin_logged_in')) {
            return redirect()->to(base_url('admin'))->send();
            exit;
        }
    }

    public function index()
    {
        $data['service'] = $this->serviceModel->findAll();
        return view('admin/service/index', $data);
    }

    public function create()
    {
        return view('admin/service/create');
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
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/', $newName);
            $data['image'] = $newName;
        }

        $this->serviceModel->insert($data);
        return redirect()->to(base_url('admin/service'));
    }

    public function edit($id)
    {
        $data['service'] = $this->serviceModel->find($id);
        return view('admin/service/edit', $data);
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

        $this->serviceModel->update($id, $data);
        return redirect()->to(base_url('admin/service'));
    }

    public function delete($id)
    {
        $this->serviceModel->delete($id);
        return redirect()->to(base_url('admin/service'));
    }
}
