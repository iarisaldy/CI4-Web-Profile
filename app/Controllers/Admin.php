<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
	public function __construct()
	{
        helper('form');
        $this->validation = \Config\Services::validation();
	}

	public function index()
	{
        if(session()->get('email')== ''){
            $data = ['user' => ''];
            return view('BE/Login.php', $data);
        }
    }
    
    public function Dashboard()
	{
        if(session()->get('')){
        return view('BE/Pages/Dashboard');
        }
	}

	public function login()
	{
		$email   = $this->request->getPost('email');
        $password  = $this->request->getPost('password');
        
		if ($email == 'admin' && $password == 'admin') {
            $data = ['user' => $email];
            session()->set('email', $email);
			return view('BE/Pages/Dashboard.php', $data);
		} else {
			$data = ['user' => 'username dan password salah'];
			return view('BE/Login', $data);
		}
    }

    public function loguot()
	{
        session()->destroy();
		return view('BE/Login.php');
	}

    
	public function TambahUser()
	{
		return view('BE/Pages/TambahUser.php');
	}

	public function Konten()
	{
		return view('BE/Pages/Konten');
    }

    public function KontenV2()
	{
		return view('BE/Pages/KontenV2');
    }
    
    public function Chart()
	{
		return view('BE/Pages/Chard');
	}
}
