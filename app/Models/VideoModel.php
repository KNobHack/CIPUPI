<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'videos';

    protected $returnType    = 'App\Entities\Video';
    protected $useSoftDeletes = true;

    protected $useTimestamps = true;

    // protected $allowedFields = [
    //     'username', 'password', 'email', 'role'
    // ];
}
