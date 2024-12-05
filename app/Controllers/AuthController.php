<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel; // Pastikan ini diimpor dengan benar

class AuthController extends BaseController
{
    public function login()
    {
        // Tampilan halaman login
        return view('C_Login');
    }

    public function loginProcess()
    {
        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi form
        if (!$username || !$password) {
            return redirect()->back()->with('error', 'Username dan password wajib diisi');
        }

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        // Cek apakah user ada dan password benar
        if ($user && password_verify($password, $user->password)) {
            // Simpan data user ke session
            session()->set([
                'username' => $user->username,
                'logged_in' => true
            ]);

            // Redirect ke halaman dashboard (misal)
            return redirect()->to('/produk');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        // Hapus session
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to('/loginadmin');
    }
}
