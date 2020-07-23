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
}
