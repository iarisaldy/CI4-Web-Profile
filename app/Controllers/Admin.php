<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('Administrator.php');
	}

	public function login()
    {
        return view('Login.php');
    }
	//--------------------------------------------------------------------

}
