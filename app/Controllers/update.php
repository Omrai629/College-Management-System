<?php

namespace App\Controllers;

Use App\Models\UserModel;

class update extends BaseController
{
    public function edit_details($id)
    {
        $userModel = new userModel();
        $data['users']=$userModel->find($id);
        echo view('common/header');
        return view('update',$data);
    }

    public function update_details($id)
    {
        $userModel = new userModel();

        $item = $userModel->find($id);
        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved())
        {
            $old_img_name=$item->image;
            if(file_exists("public/Uploads/".$old_img_name))
            {
                unlink("public/Uploads/".$old_img_name);
            }
            $imagename = $file->getRandomName();
            $file->move("public/Uploads/",$imagename);
        }
        $data = [

            'name' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'gender' =>$this->request->getPost('gender'),
            'address' =>$this->request->getPost('address'),
            'password' =>$this->request->getPost('password'),
            'image' =>$imagename,
        ];

        $userModel->update($id,$data);
        return redirect()->to(base_url('admin_dashboard'));
    
    }
}
