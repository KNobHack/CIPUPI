<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    public function setPassword(string $pass)
    {
        $this->attributes['password'] = password_hash($pass, PASSWORD_BCRYPT);
        return $this;
    }

    public function setEmail(string $email)
    {
        $this->attributes['email'] = $email;
        $this->setRole($email);
        return $this;
    }

    public function setRole(string $email)
    {
        if (strpos($email, '@upi.edu') !== false) {
            $this->attributes['role'] = 'UPI Fam';
        } else {
            $this->attributes['role'] = 'Outsider';
        }

        return $this;
    }

    public function checkPassword(string $pass)
    {
        return (password_verify($pass, $this->attributes['password']));
    }
}
