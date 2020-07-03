<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function login()
	{
		$data = ['user' => ''];
		return view('Login.php', $data);
	}

	public function get_user()
	{
		$email   = $this->request->getPost('email');
		$password  = $this->request->getPost('password');


		if ($email == 'admin' && $password == 'admin') {
			$data = ['user' => $email];
			return view('Administrator.php', $data);
		} else {
			$data = ['user' => 'username dan password salah'];
			return view('Login.php', $data);
		}
	}
}
