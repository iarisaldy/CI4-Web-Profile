<?php namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model{
    
  protected $table = 'produk';
    
    public function getProduk($id = false)
    {
        if($id === false){
            return $this->table('produk')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('produk')
                        ->where('id_produk', $id)
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