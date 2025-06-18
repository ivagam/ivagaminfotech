<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $session;

    public function __construct()
    {
       
        helper('url');
        $this->session = session();

        if (!$this->session->get('admin_logged_in')) {
            return redirect()->to(base_url('admin'))->send();
        }
    }

    public function index()
    {
        $data['admin_username'] = $this->session->get('admin_username');
        return view('admin/dashboard', $data);
    }
}
