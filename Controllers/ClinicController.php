<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Clinic;
use App\Models\Section;

class ClinicController
{


    public function create()
    {
        View::render('dashboard/clinic/create', [
            "sections" => Section::do()->all(),
        ]);
    }


    public function store()
    {
        $clinic_id = Clinic::do()->create([
            'name' => $_POST['name'],
            'address' => $_POST['Address'],
            'phone' => $_POST['phone'],
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'is_full_time' => $_POST['isFullTime'] == 'on' ? 1 : 0,
        ]);


        foreach ($_POST['sections'] as $id) {
            Clinic::do()->setSection($clinic_id, $id);
        }



        addToSession('messages', [
            'success' => 'clinic created successfuly .'
        ]);



        header("Location: /MVC/MVC/dashboard/clinic/create");
        exit();
    }


    public function show()
    {
        View::render('dashboard/clinic/show', [
            'clinics' => Clinic::do()->all(),
        ]);
    }


    public function edit()
    {
        $id = $_GET['id'];
        $result = Clinic::do()->find($id);
        if (is_null($result)) {
            echo 'not found';
            exit;
        }



        View::render('dashboard/clinic/edit', array(
            'id' => $result->id,
            'name' => $result->name,
            'address' => $result->address,
            'isFullTime' => $result->is_full_time,
            'isActive' => $result->is_active,
            'isFullTime' => $result->is_full_time,
            'sections' => Section::do()->all(),
            'Selectedsectiona' => Clinic::do()->getSectionId($_GET['id']),
        ));
    }


    public function update()
    {
        $clinic_id = $_POST['id'];

        var_dump($_POST);
        Clinic::do()->update([
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'is_active' => $_POST['isFullTime'] == 'on' ? 1 : 0,
        ], ['id' => $clinic_id]);


        Clinic::do()->syncsection($clinic_id, $_POST['sections']);
        // var_dump($_POST['sections']);

        addToSession('messages', [
            'success' => 'clinic created successfuly .'
        ]);


        header("Location: /MVC/MVC/dashboard/clinic/show");
    }


    public function delete()
    {
        Clinic::do()->delete([
            "id" => $_POST['id'],
        ]);

        header("Location: /MVC/MVC/dashboard/clinic/show");
    }
}
