<?php

namespace App\Controllers;

Use App\Models\UserModel;

class change_password extends BaseController
{
    public function index()
    {
        echo view('common/header');
        return view('change_password');
    }
}
