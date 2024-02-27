<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'employees_info';
    // protected $allowedFields = [ 'first_name', 'last_name', 'mobile_num','address','dob', 'job_title'];
    // protected $primaryKey = 'id_num'; // Specify the primary key field
    // protected $useAutoIncrement = true; // Enable auto-increment for the primary key
    // protected $useSoftDeletes = true; // Enable soft deletes (if needed)
    // protected $returnType     = 'array';

    public function getAll(){
        return $this->findAll();
    }
    public function getId($id){
        return $this->find($id);
    }

    public function updateUser($id,$data){
        return $this->update($id, $data);
    }

    public function newUser($data){
        return $this->insert($data);
    }
}