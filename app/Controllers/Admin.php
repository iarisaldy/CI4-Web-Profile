<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ProdukModel;

class Admin extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->user = new UserModel();
		$this->produk = new ProdukModel();
	}

	public function index()
	{
		$data = ['user' => ''];
		return view('BE/Login.php', $data);
	}

	public function login()
	{
		$email   = $this->request->getPost('email');
		$password  = $this->request->getPost('password');


		if ($email == 'admin' && $password == 'admin') {
			$data = ['user' => $email];
			return view('BE/Pages/Dashboard.php', $data);
		} else {
			$data = ['user' => 'username dan password salah'];
			return view('BE/Login', $data);
		}
	}

	public function User()
	{
		$data['user'] = $this->user->getUser();
		$data['user_id'] = $this->product->getUser($id);
		echo view('BE/Pages/DataUser.php',$data);
	}

	public function TambahUser()
	{
		return view('BE/Pages/TambahUser.php');
	}

	public function Konten()
	{
		return view('BE/Pages/Konten');
	}

	public function Dashboard()
	{
		return view('BE/Pages/Dashboard');
	}

	//CRUD DATA USER

	public function addUser()
    {
        // Mengambil value dari form dengan method POST
        $nama = $this->request->getPost('nama');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nama' => $nama,
			'email' => $email,
			'password' => $password
        ];

        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->user->insert_user($data);

        // Jika simpan berhasil, maka ...
        if($simpan)
        {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created product successfully');
            // Redirect halaman ke product
            return redirect()->to(base_url('User')); 
        }
    }

    public function updateUser($id)
    {
        // Mengambil value dari form dengan method POST
        $nama = $this->request->getPost('nama_edit');
		$email = $this->request->getPost('email_edit');
		$password = $this->request->getPost('password_edit');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'nama' => $nama,
			'email' => $email,
			'password' => $password
        ];

        /* 
        Membuat variabel ubah yang isinya merupakan memanggil function 
        update_product dan membawa parameter data beserta id
        */
        $ubah = $this->user->update_user($data, $id);
        
        // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('User')); 
        }
    }

    public function deleteUser($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $hapus = $this->user->delete_user($id);

        // Jika berhasil melakukan hapus
        if($hapus)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('User'));
        }
    }
}
