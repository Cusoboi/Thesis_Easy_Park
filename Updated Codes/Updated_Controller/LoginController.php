<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('LoginView');
    }

    public function login()
    {
        $session = session();
        $model = new LoginModel();
    
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            if($password==$pass){
                $ses_data = [
                    'user_id' => $data['id'],
                    'user_name' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                if($data['role'] == 'admin'){
                    return redirect()->to(base_url('public/Dashboard'));
                }else{
                    return redirect()->to(base_url('public/'));
                }
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');

                return redirect()->to(base_url('public/LoginController'));
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('public/LoginController'));
        }
    }
    public function register()
    {
        helper(['form']);
        $data = [];
    
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
                    'errors' => [
                        'required' => 'The username field is required.',
                        'min_length' => 'The username field must be at least 3 characters in length.',
                        'max_length' => 'The username field cannot exceed 20 characters in length.',
                        'is_unique' => 'The username you entered is already taken. Please choose a different username.'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'The email field is required.',
                        'valid_email' => 'Please enter a valid email address.',
                        'is_unique' => 'The email you entered is already registered. Please use a different email.'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'The password field is required.',
                        'min_length' => 'The password field must be at least 8 characters in length.'
                    ]
                ],
                'confirm_password' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'The confirm password field is required.',
                        'matches' => 'The confirm password field does not match the password field.'
                    ]
                ],
                'rfid_no' => [
                    'rules' => 'required|min_length[10]|is_unique[users.rfid_no]',
                    'errors' => [
                        'required' => 'The RFID number field is required.',
                        'min_length' => 'The RFID number must be at least 10 characters in length.',
                        'is_unique' => 'The RFID number you entered is already registered. Please use a different RFID number.'
                    ]
                ],
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'The name field is required.'
                    ]
                ],
                'phone' => [
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                        'required' => 'The phone field is required.',
                        'min_length' => 'The phone number must be at least 10 characters in length.'
                    ]
                ]
            ];

            if ($this->validate($rules)) {
                $model = new LoginModel();
                $data = [
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'rfid_no' => $this->request->getVar('rfid_no'),
                    'name' => $this->request->getVar('name'),
                    'phone' => $this->request->getVar('phone'),
                ];
                $model->save($data);
    
                // set success message
                $session = session();
                $session->setFlashdata('success', 'Registration successful.');
    
                // clear input fields
                $data['username'] = '';
                $data['email'] = '';
                $data['password'] = '';
                $data['confirm_password'] = '';
                $data['rfid_no'] = '';
                $data['name'] = '';
                $data['phone'] = '';
            } else {
                $data['validation'] = $this->validator;
            }
        }
    
        echo view('RegisterView', $data);
    }
}