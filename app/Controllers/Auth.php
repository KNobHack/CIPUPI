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
        if ($this->session->loged_in) return redirect('home_page');

        $data = [
            'title' => 'CIPUPI | Login',
            'pesan' => $this->session->getFlashdata('pesan'),
        ];
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
                    $user_info = [
                        'username' => $user->username,
                        'email' => $user->email,
                        'created_at' => $user->created_at->format('H:i d/m/y'),
                        'role' => $user->role,
                    ];

                    $this->session->set('loged_in', true);
                    $this->session->set('user_info', $user_info);

                    $this->session->setFlashdata('pesan', ['pesan' => 'Anda berhasil login', 'mode' => 'success']);
                    return redirect('home_page');
                } elseif ($user->status == 'Inactive') {
                    $this->session->setFlashdata('pesan', ['pesan' => 'Akun anda belum di aktifasi', 'mode' => 'warning']);
                    return redirect('login_page');
                } elseif ($user->status == 'Blocked') {
                    $this->session->setFlashdata('pesan', ['pesan' => 'Akun anda di blokir', 'mode' => 'danger']);
                    return redirect('login_page');
                } else {
                    $this->session->setFlashdata('pesan', ['pesan' => 'Terjadi kesalahan', 'mode' => 'warning']);
                    return redirect('login_page');
                }
            } else {
                $this->session->setFlashdata('pesan', ['pesan' => 'Username atau Password salah', 'mode' => 'danger']);
                return redirect('login_page');
            }
        } else {
            $this->session->setFlashdata('pesan', ['pesan' => 'Akun tidak ditemukan!', 'mode' => 'warning']);
            return redirect('login_page');
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

    public function logout()
    {
        $this->session->destroy();
        return redirect('login_page');
    }

    //--------------------------------------------------------------------

}
