<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function getAdminData()
    {
        $adminData = [
            [
                'id' => 1,
                'username' => 'Admin',
                'password' => password_hash('admin123', PASSWORD_BCRYPT)
            ],
            [
                'id' => 2,
                'username' => 'Admin2',
                'password' => password_hash('admin123', PASSWORD_BCRYPT)
            ],
            [
                'id' => 3,
                'username' => 'Guru',
                'password' => password_hash('admin123', PASSWORD_BCRYPT)
            ],
        ];

        return $adminData;
    }

    public function getUserData()
    {
        $userData = [
            [
                'id' => 1,
                'username' => 'User',
                'password' => password_hash('user123', PASSWORD_BCRYPT)
            ],
            [
                'id' => 2,
                'username' => 'User 2',
                'password' => password_hash('user123', PASSWORD_BCRYPT)
            ],
        ];

        return $userData;
    }

    public function login()
    {
        // Jika user sudah login sebagai admin, maka akan di redirect ke halaman khusus admin
        if(session()->get('sudah_masuk') || session()->get('role') === 'admin') {
            return redirect()->to('/admin');
        }

        // Jika user sudah login, maka akan di redirect ke halaman khusus user
        if(session()->get('sudah_masuk') || session()->get('role') === 'user') {
            return redirect()->to('/user');
        }

        return view('auth/login');
    }

    public function loginPost()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $adminData = $this->getAdminData();
        $userData = $this->getUserData();

        // Mengecek apakah input user sesuai dengan data admin
        foreach ($adminData as $admin) {
            if ($admin['username'] === $username && password_verify($password, $admin['password'])) {
                session()->set('id', $admin['id']);
                session()->set('username', $admin['username']);
                session()->set('role', 'Admin');
                session()->set('sudah_masuk', true);
                
                return redirect()->to('/admin');
            }
        }
        
        // Mengecek apakah input user sesuai dengan data user
        foreach ($userData as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                session()->set('id', $user['id']);
                session()->set('username', $user['username']);
                session()->set('role', 'User');
                session()->set('sudah_masuk', true);

                return redirect()->to('/user');
            }
        }

        session()->setFlashdata('error', 'Username atau password salah');
        return redirect()->to('/')->withInput();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
