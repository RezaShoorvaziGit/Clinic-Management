<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Cookie;
use App\Core\File;
use App\Core\View;
use App\Models\Admin;
use FFI;
use Kavenegar\KavenegarApi;

class AdminController
{
    ///////////in model goft moshabeh laravel ,,,,, chand karbare?
    // public function  __construct()
    // {

    //     if(Cookie::get('user_id') == null){
    //         header("location: login") ;
    //         exit() ;
    //     }
    // }

    public function showDashboard()
    {

        View::render('home', array(
            'name' => getCookie('user_name'),
        ));
    }



    public function create()
    {
        View::render('dashboard/admin/create');
    }


    public function store()
    {
        // TODO1 : validation
        // TODO2 : amaliat hash kardan be password ezafe shavad

        $file_uploaded = false;

        if ($_FILES['profile']['error'] == 0) {
            $file = File::uploadedFile('profile');

            $path = $file->validate([
                'checkSize' => [10000],
                'checkType' => ['image'],
            ], [
                'callback' => [$file, 'save'],
                'params' => [App::$ROOTDIR . 'public/storage/upload/img/']
            ]);

            $file_uploaded = true;
        }

        Admin::do()->create([
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'profile_path' => $file_uploaded ? $path : 0,
        ]);

        addToSession('messages', [
            'success' => 'user created successfully.'
        ]);
        // (new KavenegarApi('4A514462557A50454A446B715A7A4D6F343546444E7672542F56552B364D52536A766D684F675932456B553D'))
        // ->Send('2000500666', $_POST['phone'], 'your account created successfully.');

        header("Location: /MVC/MVC/dashboard/admin/show");
    }


    public function show()
    {
        View::render('dashboard/admin/show', array(
            'users' => Admin::do()->all(),
        ));
    }



    public function edit()
    {
        $id = $_GET['id'];
        $result = Admin::do()->find($id);

        View::render('dashboard/admin/edit', array(
            'id' => $result->id,
            'name' => $result->name,
            'username' => $result->username,
            'username' => $result->username,
            'isActive' => $result->is_active,
            'path' => $result->profile_path,
        ));
    }


    public function update()
    {


        if ($_POST['removePhoto'] == 'on') {
            File::removeProfile($_POST['path']);
            $newPath = '';
        };

        $file_uploaded = false;

        if ($_FILES['profile']['error'] == 0) {
            File::removeProfile($_POST['path']);

            $file = File::uploadedFile('profile');

            $newPath = $file->validate([
                'checkSize' => [10000],
                'checkType' => ['image'],
            ], [
                'callback' => [$file, 'save'],
                'params' => [App::$ROOTDIR . 'public/storage/upload/img/']
            ]);

            $file_uploaded = true;
        }

        Admin::do()->update([
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'profile_path' => $file_uploaded == true ? $newPath : 0,
        ], ['id' => $_POST['id'],]);


        header("Location: /MVC/MVC/dashboard/admin/show");
    }


    public function delete()
    {
        Admin::do()->delete([
            "id" => $_POST['id'],
        ]);

        header("Location: /MVC/MVC/dashboard/admin/show");
    }
}
