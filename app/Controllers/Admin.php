<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function __construct()
	{
		helper('form');
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
			return view('BE/Pages/Dastboard.php', $data);
		} else {
			$data = ['user' => 'username dan password salah'];
			return view('BE/Login', $data);
		}
	}

	public function User()
	{
		return view('BE/Pages/DataUser.php');
	}
}
