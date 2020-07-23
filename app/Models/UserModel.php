<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
  protected $table = 'user';

    protected function hashPassword(array $data)
    {
      $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    }
    
    public function getUser($id = false)
    {
        if($id === false){
            return $this->table('user')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('user')
                        ->where('id_user', $id)
                        ->get()
                        ->getRowArray();
        }
                               
    }    
}