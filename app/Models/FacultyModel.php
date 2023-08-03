<?php
namespace App\Models;

use CodeIgniter\Model;

class FacultyModel extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';

    //protected $useAutoIncrement = true;

    protected $returnType = 'object';
    

    protected $allowedFields = ['tname','email','phone','gender','address'];

    //protected $useTimestamps = false;
    //protected $createdField = "created_at";
    //protected $updatedField = "updated_at";
    //protected $deletedField = "deleted_at";

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function insertValue($data)
    {
        $builder = $this->db->table("teachers");
        return $builder->insert($data);
    }

    


}

?>