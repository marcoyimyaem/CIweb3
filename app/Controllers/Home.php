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
        $data['users'] = $model->getAll();
        // $data = [
        //     'users'=>$model->getAll(),
        //     'title' => 'All Users',
        // ];
        return view('showallusers',$data);
    }
}
