<?php

namespace App\Controllers;

Use App\Models\UserModel;
Use App\Models\FacultyModel;

class admin_dashboard extends BaseController
{
    public function index()
    {
        $userModel = new userModel();
        $data['users'] = $userModel->findAll();

        $facultyModel = new facultyModel();
        $data['teachers'] = $facultyModel->findAll();

        echo view('common/header');
        return view('admin_dashboard1',$data);
    }
}
