<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
  protected $table = 'user';

    protected function hashPassword(array $data)
    {
      //$data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
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

    public function insert_user($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_user($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_user' => $id]);
    }

    public function delete_user($id)
    {
        return $this->db->table($this->table)->delete(['id_user' => $id]);
    }
}