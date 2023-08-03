<?php

namespace App\Controllers;

Use App\Models\FacultyModel;
Use App\Models\UserModel;

class delete_teacher extends BaseController
{
    public function delete_details($id)
    {

        $facultyModel = new facultyModel();
        $facultyModel->delete($id);
        
        return redirect()->to(base_url('admin_dashboard'));
    }

    public function delete_stud($id)
    {

        $userModel = new userModel();
        $userModel->delete($id);
        
        return redirect()->to(base_url('admin_dashboard'));
    }

}
