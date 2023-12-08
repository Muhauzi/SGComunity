<?php
namespace App\Controllers;

class User extends BaseController{
    public function index(){
        $data =[
            'title' => 'SGC - Welcome'
        ];
        echo view('users/index', $data);
    }
    public function dashboard(){
        $data =[
            'title' => 'SGC - User Dashboard'
        ];
        echo view('users/dashboard', $data);
    }

    public function profile(){
        $data =[
            'title' => 'SGC - User Profile'
        ];
        echo view('users/profile', $data);
    }


}