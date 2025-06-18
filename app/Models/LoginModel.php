<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
    protected $returnType = 'object';

    public function validateUser(string $username, string $password)
    {
        return $this->where('username', $username)
                    ->where('password', $password)
                    ->first();
    }
}
