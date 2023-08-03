<?php

namespace App\Controllers;

Use App\Models\UserModel;

class logout extends BaseController
{
    public function index()
    {
        
        echo view('common/header');
        return view('Login');
    }
    public function lo_admin()
    {
        echo view('common/header');
        return view('adminlogin');
    }
}
