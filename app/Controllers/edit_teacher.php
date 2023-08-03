<?php

namespace App\Controllers;

Use App\Models\FacultyModel;

class edit_teacher extends BaseController
{
    public function edit_details($id)
    {

        $facultyModel = new facultyModel();
        $data['teachers']=$facultyModel->find($id);
        echo view('common/header');
        return view('edit_teacher',$data);
    }

    public function update_details($id)
    {
        $facultyModel = new facultyModel();
        $data = [

            'tname' => $this->request->getPost("name"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'gender' =>$this->request->getPost("gender"),
            'address' =>$this->request->getPost("address"),
        ];

        $r=$facultyModel->update($id,$data);
        if($r)
        {
            return redirect()->to(base_url('admin_dashboard'));
        }
        else{
            echo "error";
        }
    }
}
