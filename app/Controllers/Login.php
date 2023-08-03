<?php

namespace App\Controllers;
use CodeIgniter\Session\Session;

Use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('Login');
    }

    public function do_login()
    {
        $this->session = service('session');


        $userModel = new userModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $result = $userModel->where('email',$email)->first();

        if($result->id>0)
        {
            if($password === $result->password)
            {
               
                $this->session->set('user',$result);
                return redirect()->to('/dashboard');
            }
            else{
                echo "Invalid Password";
            }
        }
        else{
            echo "Invalid credentials";
        }
    }

    public function logout()
    {
        echo view('common/header');
        return view('Login');
    }
}
