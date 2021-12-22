<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Patient;

class PatientController
{






    public function register()
    {

        View::render('patient/register');
    }


    public function store()
    {
        Patient::do()->create([
            'first_name'=>$_POST['firstName'],
            'last_name'=>$_POST['lastName'],
            'age'=>$_POST['age'],
            'first_name'=>$_POST['firstName'],
            'gender'=>$_POST['gender'],
            'phone'=>$_POST['phone'],

        ]) ;

        header("Location: /MVC/MVC/patient/register");


    }
}
