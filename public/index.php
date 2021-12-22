<?php


error_reporting(E_ERROR | E_PARSE);

require '../vendor/autoload.php';

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\ClinicController;
use App\Controllers\HomeController;
use App\Controllers\PatientController;
use App\Controllers\SectionController;
use App\Controllers\UserController;
use App\Core\Cookie;
use App\Models\Admin;
use App\Models\Clinic;

$app = new App\Core\App();

// $app->get('/MVC/MVC/home', [HomeController::class, 'index']);

// $app->get('/MVC/MVC/test', [HomeController::class, 'test']);

$app->get('/MVC/MVC/register', [AuthController::class, 'showRegister']);

$app->post('/MVC/MVC/register', [AuthController::class, 'register']);

$app->get('/MVC/MVC/', [AuthController::class, 'showLogin']);

$app->post('/MVC/MVC/login', [AuthController::class, 'login']);

// if (getCookie('user_id')) {

    $app->get('/MVC/MVC/home', [HomeController::class, 'index']);


    $app->get('/MVC/MVC/dashboard', [AdminController::class, 'showDashboard']);

    $app->post('/MVC/MVC/logout', [AuthController::class, 'logout']);


    //ADMIN CRUD
    $app->get('/MVC/MVC/dashboard/admin/create', [AdminController::class, 'create']);

    $app->post('/MVC/MVC/admin/store', [AdminController::class, 'store']);

    $app->get('/MVC/MVC/dashboard/admin/show', [AdminController::class, 'show']);

    $app->get("/MVC/MVC/dashboard/admin/edit", [AdminController::class, 'edit']);

    $app->post("/MVC/MVC/admin/update", [AdminController::class, 'update']);

    $app->post('/MVC/MVC/admin/delete', [AdminController::class, 'delete']);


    //User CRUD
    $app->get('/MVC/MVC/dashboard/user/create', [UserController::class,'create']);

    $app->post('/MVC/MVC/user/store', [UserController::class, 'store']);

    $app->get('/MVC/MVC/dashboard/user/show', [UserController::class, 'show']);

    $app->get("/MVC/MVC/dashboard/user/edit", [UserController::class, 'edit']);

    $app->post("/MVC/MVC/user/update", [UserController::class, 'update']);

    $app->post('/MVC/MVC/user/delete', [UserController::class, 'delete']);


    //CLINIC CRUD 
    $app->get('/MVC/MVC/dashboard/clinic/create', [ClinicController::class, 'create']);

    $app->post('/MVC/MVC/clinic/store', [ClinicController::class, 'store']);

    $app->get('/MVC/MVC/dashboard/clinic/show', [ClinicController::class, 'show']);

    $app->get("/MVC/MVC/dashboard/clinic/edit", [ClinicController::class, 'edit']);

    $app->post("/MVC/MVC/clinic/update", [ClinicController::class, 'update']);

    $app->post('/MVC/MVC/clinic/delete', [ClinicController::class, 'delete']);


    //SECTION CRUD
    $app->get('/MVC/MVC/dashboard/section/create', [SectionController::class, 'create']);

    $app->post('/MVC/MVC/section/store', [SectionController::class, 'store']);

    $app->get('/MVC/MVC/dashboard/section/show', [SectionController::class, 'show']);

    $app->get("/MVC/MVC/dashboard/section/edit", [SectionController::class, 'edit']);

    $app->post("/MVC/MVC/section/update", [SectionController::class, 'update']);

    $app->post('/MVC/MVC/section/delete', [SectionController::class, 'delete']);




    //Patient 
    $app->get('/MVC/MVC/patient/register', [PatientController::class, 'register']);

    $app->post('/MVC/MVC/patient/register', [PatientController::class, 'store']);


// }



// $app->post('path', 'callback');
session_start();
$app->run();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <img src="storage/upload/img/619059a09d8ee.png" alt="">  
</body>
</html>