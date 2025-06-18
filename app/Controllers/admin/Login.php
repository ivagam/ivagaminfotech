<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $loginModel;
    protected $session;

    public function __construct()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        helper(['url', 'form']);
        $this->loginModel = new LoginModel();
        $this->session = session();
    }

    public function index()
    {
        $request = \Config\Services::request();

        if (strtolower($request->getMethod()) === 'post') {
            $username = $request->getPost('username');
            $password = $request->getPost('password');

            $user = $this->loginModel->validateUser($username, $password);

            if ($user) {
                $this->session->set('admin_logged_in', true);
                $this->session->set('admin_username', $user->username);
                return redirect()->to(base_url('admin/dashboard'));
            } else {
                $this->session->setFlashdata('error', 'Invalid username or password.');
                return redirect()->to(base_url('admin/login'));
            }
        }

        return view('admin/login');
    }
}
