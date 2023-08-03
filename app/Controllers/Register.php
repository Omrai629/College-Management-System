<?php

namespace App\Controllers;

Use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('Register');
    }

    public function do_register()
    {
        $userModel = new UserModel();

        $name = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $gender = $this->request->getPost('gender');
        $phone = $this->request->getPost('phone');
        $address = $this->request->getPost('address');
        $password = $this->request->getPost('password');

        $file = $this->request->getFile('image');
        if($file->isValid() && ! $file->hasMoved())
        {
            $imagename = $file->getRandomName();
            $file->move('public/Uploads',$imagename);
        }
        $data = ['username'=>$name,'email'=>$email,'gender'=>$gender,'phone'=>$phone,
                    'address'=>$address,'password'=>$password,'image' => $imagename,
                
                ];

        $r = $userModel->insert($data);

        if($r)
        {
            echo view('common/header');
            echo view('Login');
        }
        else{
            echo "Error";
        }

        
    }

    
}
