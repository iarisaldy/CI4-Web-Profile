<?php

namespace App\Controllers;

class User extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->getUser();
        echo view('',$data);
    }

    public function add_new()
    {
        echo view('');
    }

    public function save()
    {
        $model = new UserModel();
        $data = array(
            'nama_user'  => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        );
        $model->saveUser($data);
        return redirect()->to('');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->getUser($id)->getRow();
        echo view('', $data);
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id_user');
        $data = array(
            'nama_user'  => $this->request->getPost('nama_edit'),
            'email' => $this->request->getPost('email_edit'),
            'password' => $this->request->getPost('password_edit'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->deleteUser($id);
        return redirect()->to('');
    }
}
