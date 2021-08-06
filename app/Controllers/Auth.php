<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }
    public function login()
    {
        if (session('id_user')) {
            return redirect()->to(site_url('home'));
        }
        return view('auth/login');
    }
    public function loginProcess()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['username_user' => $post['username_user']]);
        $user = $query->getRow();
        if ($user) {
            if (password_verify($post['password_user'], $user->password_user)) {
                $params = [
                    'id_user' => $user->id_user,
                    'info_user' => $user->info_user,
                    'username_user' => $user->username_user,
                ];
                // dd($params);
                session()->set($params);
                return redirect()->to(site_url('home'));
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai ');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak dapat ditemukan ');
        }
    }
    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to(site_url('login'));
    }
}