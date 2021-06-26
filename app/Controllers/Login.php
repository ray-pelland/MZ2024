<?php

namespace App\Controllers; helper('form');

class Login extends BaseController
{   public function new() { return view('Login/new'); }

    public function create()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $auth = service('auth');

        if ($auth->login($email, $password)) {  // returns true if auth() succeeds
            return redirect()->to("/")->with('info', 'Login successful');
        }
        else {
            return redirect()->back()->withInput()->with('warning', 'Invalid login');
        }
    }

    public function delete()
    {
        $auth = service('auth');

        $auth->logout();

        return redirect()->to('/Login/showLogoutMessage');
    }

    public function showLogoutMessage()
    {
        return redirect()->to('/')->with('info', 'Logout successful');
    }
}
