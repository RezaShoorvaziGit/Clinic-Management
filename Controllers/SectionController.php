<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Section;

class SectionController
{

    public function create()
    {
        View::render('dashboard/section/create');
    }


    public function store()
    {
        Section::do()->create([
            'is_active' => $_POST['isActive'] == 'on' ? 1 : 0,
            'title' => $_POST['title'],
            'phone' => $_POST['phone'],

        ]);

               

        addToSession('messages', [
            'success' => 'clinic created successfuly .'
        ]);



        header("Location: /MVC/MVC/dashboard/section/show");
        exit();
    }

    public function show()
    {
        $sections = section::do()->all() ;
        // $section_clinic = Section::do()-> ;
        View::render('dashboard/section/show', [
            'sections' =>$sections ,
        ]);
 
 
        
    }


    public function edit()
    {
    }


    public function update()
    {
    }

    public function delete()
    {
    }
}
