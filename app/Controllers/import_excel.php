<?php

namespace App\Controllers;

Use PhpOffice\PhpSpreadsheet\Spreadsheet;
Use PhpOffice\PhpSpreadsheet\Reader\Csv;
Use PhpOffice\PhpSpreadsheet\Reader\Xlsx as excel;
Use App\Models\FacultyModel;
Use App\Models\UserModel;

class Import_excel extends BaseController
{
    public function import_file()
    {

      $users= new UserModel();
      $model = new facultyModel();
      if($this->request->getMethod() == "post")
      {
        $filename = $this->request->getFile('excel_file');
        

        $name = $filename->getName();
        $tempName = $filename->getTempName();
        $arr_file = explode(".",$name);
        $extension = end($arr_file);
        

        if('csv' == $extension)
        {
          $reader = new Csv();
        }
        else
        {
          $reader = new excel();
        }
        $spreadsheet = $reader->load($tempName);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

       

        if(!empty($sheetData))
        {
          for($i=1;$i<count($sheetData);$i++)
          {
            $name = $sheetData[$i][0];
            $email = $sheetData[$i][1];
            $phone = $sheetData[$i][2];
            $gender = $sheetData[$i][3];
            $address = $sheetData[$i][4];

            $data =
            [
              'tname' => $name,
              'email' => $email,
              'phone' => $phone,
              'gender' => $gender,
              'address' => $address,

            ];

            $model->insertValue($data);
          }
          return view("adminlogin");
        }
        else{
          return view("adminlogin");
        }
      }
      else
      {
        return view("adminlogin");
      }
    }
}
