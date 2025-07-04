<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('admin/login'));
    }
}
