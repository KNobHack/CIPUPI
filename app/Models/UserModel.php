<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $returnType    = 'App\Entities\User';
    protected $useSoftDeletes = false;

    protected $useTimestamps = true;

    protected $allowedFields = [
        'username', 'password', 'email', 'role'
    ];

    // protected $validationRules    = [
    //     'username'     => 'required|alpha_numeric_space',
    //     'email'        => 'required|valid_email|is_unique[users.email]',
    //     'password'     => 'required|min_length[8]'
    // ];
}
