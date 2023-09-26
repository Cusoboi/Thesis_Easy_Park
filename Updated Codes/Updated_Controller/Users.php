<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        return view('users', $data);
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
         $data['user'] = $model->find($id);
        $data = [
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'phone' => $this->request->getPost('phone')
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('public/Users/'));
    }
}

