<?php

class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('UsersModel');
        $this->call->database();
    }

    public function index()
    {
        $data['users'] = $this->UsersModel->all();

        $this->call->view('users', $data);
    }
}