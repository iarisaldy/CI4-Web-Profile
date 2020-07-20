<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
  protected $table = 'user';
    
    public function getUser($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_user' => $id]);
        }   
    }
}