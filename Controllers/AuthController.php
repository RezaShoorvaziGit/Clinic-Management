<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Admin;
use App\Models\User;

class AuthController
{

    public function showRegister()
    {
        View::render('register');
    }

    public function showLogin()
    {
        View::render('login');
    }

    public function register()
    {
        Admin::do()->create([
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
        ]);

        echo 'user registered successfully';
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $result = Admin::do()->find($username, 'username');


        // var_dump($result);
        if ($result == null) {
            header("location: login");
            exit();
        }

        if ($result->password == $password) {
            createCookie('user_id', $result->id);
            createCookie('user_name', $result->name);
            header("location: home");
        } else {
            header("location: /MVC/MVC");
        }
    }



    public function logout()
    {

        destroyCookie('user_id');
        destroyCookie('user_name');

        header('Location: login');
    }
}
