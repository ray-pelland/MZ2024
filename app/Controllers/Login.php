<?php

namespace App\Controllers; helper('form');

class Login extends BaseController
{   public function new() { return view('Login/new'); }

    public function create()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new \App\Models\UserModel;
        $user = $model->where('email', $email)->first();

        if  ($user === null)
        {  // email not found
            return redirect()->back()->withInput()->with('warning', 'Email not found');
        }
        else
        {
            if (password_verify($password, $user->password_hash))
            {
                $session = session();
                $session->regenerate();
                $session->set('user_id');

                return redirect()->to("/")->with('info', 'Login successful');
            }
            else { return redirect()->back()->withInput()->with('warning', 'Incorrect password'); }
        }
    }
}
