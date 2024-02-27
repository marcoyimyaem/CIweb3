<?php

namespace App\Controllers;
use App\Models\UsersModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function showall(): string 
    {
        // $this->load->model('Users', 'user');
        // $users = $this->user->findAll();
        // $users = $usersModel->findAll();
        $model = model(UsersModel::class);
        // $data['users'] = $model->getAll();
        $data = [
            'users'=>$model->getAll(),
            'title' => 'All Users',
        ];
        return view('showallusers',$data);
    }

    public function show(int $id): string
    {
        $data = ['id'=>$id,];
        return view('welcome_message',$data);
    }
    // redirect('https://example.com');
    public function updateUser(): string
    {
        $model = model(UsersModel::class);
        $id = $this->input->post('id');
        $data = [
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),

        ];
        $model->updateUser($id,$data);
        // return view('welcome_message',$data);
        redirect('/showall');
    }
}
