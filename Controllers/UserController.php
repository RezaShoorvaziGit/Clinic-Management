<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\File;
use App\Core\View;
use App\Models\Admin;
use App\Models\User;

class UserController
{




    public function create()
    {
        View::render('dashboard/user/create');
    }



    public function store()
    {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

        // die;

        $file_uploaded = false;

        if ($_FILES['profile']['error'] == 0) {
            $file = File::uploadedFile('profile');

            $path = $file->validate([
                'checkSize' => [10000],
                'checkType' => ['image'],
            ], [
                'callback' => [$file, 'save'],
                'params' => [App::$ROOTDIR . 'public/storage/upload/img/' . $_POST['type']]
            ]);

            $file_uploaded = true;
        }
        $today = date("Y-m-d H:i:s");

        User::do()->create([
            'first_name' => $_POST['firstName'],
            'last_name' => $_POST['lastName'],
            'phone' => $_POST['phone'],
            'created_at' => $today,
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'profile_path' => $file_uploaded ? $path : 0,
        ]);

        addToSession('messages', [
            'success' => 'user created successfully.'
        ]);


        header("Location: /MVC/MVC/dashboard/user/show");
    }


    public function show()
    {
        View::render('dashboard/user/show', [
            'users' => User::do()->all(),
        ]);
    }



    public function edit()
    {


        $id = $_GET['id'];
        $result = User::do()->find($id);
        // echo "<pre>" ;
        // print_r($result) ;
        // echo "</pre>" ;
        View::render('dashboard/user/edit', array(
            'id' => $result->id,
            'firstName' => $result->first_name,
            'lastName' => $result->last_name,
            'phone' => $result->phone,
            'isActive' => $result->is_active,
            'path' => $result->profile_path,
            'gender' => $result->gendr,
            'type' => $result->type,
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
        $today = date("Y-m-d H:i:s");

        User::do()->update([
            'first_name' => $_POST['firstName'],
            'last_name' => $_POST['lastName'],
            'phone' => $_POST['phone'],
            'type' => $_POST['type'],
            'updated_at' => $today,
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'profile_path' => $file_uploaded == true ? $newPath : 0,
        ], ['id' => $_POST['id'],]);


        header("Location: /MVC/MVC/dashboard/user/show");
    }


    public function delete()
    {
        Admin::do()->delete([
            "id" => $_POST['id'],
        ]);

        header("Location: /MVC/MVC/dashboard/admin/show");
    }
}
