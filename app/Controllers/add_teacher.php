<?php

namespace App\Controllers;

Use App\Models\FacultyModel;

class add_teacher extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('add_teacher');
    }

    public function add_details()
    {
        $facultyModel = new facultyModel();

        $tname = $this->request->getPost('tname');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $gender = $this->request->getPost('gender');
        $address = $this->request->getPost('address');

        $data = [

            'tname' => $this->request->getPost("tname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'gender' =>$this->request->getPost("gender"),
            'address' =>$this->request->getPost("address"),
        ];

        $r = $facultyModel->insert($data);

        if($r)
        {
            echo view('common/header');
            return redirect()->to(base_url('admin_dashboard'));
        }
        else{
            echo "Error";
        }

        
    }

    
}
