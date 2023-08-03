<?php

namespace App\Controllers;

Use App\Models\AdminModel;

class adminlogin extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('adminlogin');
    }

    public function ad_login()
    {
        $adminModel = new AdminModel();

        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        $result = $adminModel->where('name',$name)->first();
        if($password === $result->password)
            {
               

                return redirect()->to('/admin_dashboard');
            }
            else
            {

                echo "Invalid Password";
            }
    }
    
}
