<?php

namespace App\Controllers;

use App\Models\Operation_model;
use CodeIgniter\Controller;

class Operation extends Controller
{
    protected $operationModel;
    protected $validation;
    protected $session;

    public function __construct()
    {
        helper(['form', 'url', 'filesystem']);
        $this->operationModel = new Operation_model();
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        echo "hi";exit;
        return view('blogandtestimonials');
    }

    public function blog_list()
    {
        $data['blogs'] = $this->operationModel->get_all_blogs();
        return view('blog/blog_list', $data);
    }

    public function add_blog()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'title' => 'required',
                'description' => 'required',
                'image' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/png,image/gif]',
                    'max_size[image,2048]',
                ],
            ];

            if (!$this->validate($rules)) {
                return view('blog/blog', [
                    'validation' => $this->validator
                ]);
            } else {
                $img = $this->request->getFile('image');
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/images/', $newName);

                $data = [
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'image' => $newName,
                ];

                $this->operationModel->insert_blog($data);

                return redirect()->to(base_url('home/index'));
            }
        }
        return view('blog/blog');
    }

    public function edit_blog($id)
    {
        $data['blog'] = $this->operationModel->get_blog_by_id($id);
        if (!$data['blog']) {
            return redirect()->to(base_url('operation/blog_list'));
        }
        return view('blog/edit_blog', $data);
    }

    public function update_blog($id)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => [
                'mime_in[image,image/jpg,image/jpeg,image/png,image/gif]',
                'max_size[image,2048]',
            ],
        ];

        if (!$this->validate($rules)) {
            return $this->edit_blog($id);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/images/', $newName);
            $data['image'] = $newName;
        }

        $this->operationModel->update_blog($id, $data);

        return redirect()->to(base_url('operation/blog_list'));
    }

    public function delete_blog($id)
    {
        $this->operationModel->delete_blog($id);
        return redirect()->to(base_url('operation/blog_list'));
    }

    public function testimonials_list()
    {
        $data['testimonials'] = $this->operationModel->get_all_testimonials();
        return view('testimonials/testimonials_list', $data);
    }

    public function add_testimonial()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'description' => 'required',
                'profile_image' => [
                    'uploaded[profile_image]',
                    'mime_in[profile_image,image/jpg,image/jpeg,image/png]',
                    'max_size[profile_image,2048]',
                ],
            ];

            if (!$this->validate($rules)) {
                return view('testimonials/add_testimonial', [
                    'validation' => $this->validator
                ]);
            }

            $img = $this->request->getFile('profile_image');
            $imageName = '';
            if ($img && $img->isValid() && !$img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/images/', $imageName);
            }

            $data = [
                'name' => $this->request->getPost('name'),
                'profile_image' => $imageName,
                'description' => $this->request->getPost('description'),
            ];

            $this->operationModel->insert_testimonial($data);

            return redirect()->to(base_url('home/index'));
        }

        return view('testimonials/add_testimonial');
    }

    public function edit_testimonial($id)
    {
        $data['testimonial'] = $this->operationModel->get_testimonial_by_id($id);

        if (!$data['testimonial']) {
            return redirect()->to(base_url('operation/testimonials_list'));
        }

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => 'required',
                'description' => 'required',
                'profile_image' => [
                    'mime_in[profile_image,image/jpg,image/jpeg,image/png]',
                    'max_size[profile_image,2048]',
                ],
            ];

            if (!$this->validate($rules)) {
                return view('testimonials/edit_testimonial', [
                    'validation' => $this->validator,
                    'testimonial' => $data['testimonial']
                ]);
            }

            $img = $this->request->getFile('profile_image');
            $imageName = $data['testimonial']['profile_image'];
            if ($img && $img->isValid() && !$img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/images/', $imageName);
            }

            $update_data = [
                'name' => $this->request->getPost('name'),
                'profile_image' => $imageName,
                'description' => $this->request->getPost('description'),
            ];

            $this->operationModel->update_testimonial($id, $update_data);

            return redirect()->to(base_url('operation/testimonials_list'));
        }

        return view('testimonials/edit_testimonial', $data);
    }

    public function delete_testimonial($id)
    {
        $this->operationModel->delete_testimonial($id);
        return redirect()->to(base_url('operation/testimonials_list'));
    }
}
