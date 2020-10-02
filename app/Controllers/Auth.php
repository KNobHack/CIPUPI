<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Entities\User;

class Auth extends BaseController
{
    // Model untuk tabel Users
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // Halaman Login
    public function index()
    {
        $data = ['title' => 'CIPUPI | Login'];
        return view('auth/login', $data);
    }

    // Kirim data login
    public function login()
    {
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();

        if (!empty($user)) {
            if ($user->checkPassword($pass)) {
                if ($user->status == 'Active') {
                    echo 'Anda berhasil login';
                } elseif ($user->status == 'Inactive') {
                    echo 'Akun anda belum di aktifasi';
                } elseif ($user->status == 'Blocked') {
                    echo 'Akun anda di blokir';
                } else {
                    echo 'Terjadi kesalahan';
                }
            } else {
                echo 'Username atau Password salah';
            }
        } else {
            echo 'Akun tidak ditemukan!';
        }
    }

    // Halaman Registrasi
    public function register()
    {
        $data = ['title' => 'CIPUPI | Registrasi'];
        return view('auth/register', $data);
    }

    // Kirim data registrasi
    public function registUser()
    {
        // Buat entity User
        $user = new User();

        // Masukkan input user ke entity
        $user->email = $this->request->getPost('email');
        $user->username = $this->request->getPost('username');
        $user->password = $this->request->getPost('password');

        // Masukkan data ke database
        $this->userModel->save($user);

        // Kembalikan ke halaman login
        return redirect('login_page');
    }

    //--------------------------------------------------------------------

}
