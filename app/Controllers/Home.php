<?php

namespace App\Controllers;

Use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('common/header');
        return view('Home');
    }
}
