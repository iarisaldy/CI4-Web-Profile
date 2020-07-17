<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'user';
    
    public function getUser($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['product_id' => $id]);
        }   
    }

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('product_id' => $id));
        return $query;
    }

    public function deleteUser($id)
    {
        $query = $this->db->table($this->table)->delete(array('product_id' => $id));
        return $query;
    } 


}