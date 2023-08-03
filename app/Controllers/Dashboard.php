<?php

namespace App\Controllers;

Use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('common/header');
        return view('Dashboard');
    }
    public function user_dash($id)
    {
        $userModel = new usermodel();

        $data['users'] = $userModel->find($id);
        echo view('common/header');
        return view('view_users',$data);
    }
}
