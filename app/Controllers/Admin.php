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
		return view('Login.php');
	}

	public function get_user()
	{
		$email   = $this->request->getPost('email');
		$password  = $this->request->getPost('password');

		if ($email == 'admin' && $password == 'admin') {
			return view('Administrator.php');
		} else {
			echo "error gk bisa login";
		}
	}
}
