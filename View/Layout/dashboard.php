<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <title>Hello, world!</title>
</head>

<body>
    <?php if(isset($success)) { ?>
    <div class="position-fixed  bg-success rounded p-2  text-light end-0 top-0 m-2"
        style="width: 200px; height: 100px; z-index: 5 !important">
        <?php echo $success ; ?>
    </div>
    <?php } ; ?>
    <div class="row p-0 m-0 ">
        <div class="col-2 bg-primary opacity-75 text-light position-fixed" style="height: 100vh">
            <div class="d-flex justify-content-between align-items-center border-danger border-bottom">
                <div class="fw-bold fs-1 text-center ">Clinic</div>
                <div class="fs-2 ">
                    <form action="logout" method="POST">
                        <button class="border-0 bg-primary opacity-75 text-danger" type="submit">
                            <i class="bi bi-box-arrow-left "></i>

                        </button>
                    </form>
                </div>
            </div>
            <div>
                <div class="m-2">
                    <div class="fs-3">Admin</div>
                    <div class="border-start border-danger px-2">
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/admin/create">Create</a>
                        </div>
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/admin/show">Show</a>
                        </div>

                    </div>
                </div>
                <div class="m-2">
                    <div class="fs-3">User</div>
                    <div class="border-start border-danger px-2">
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/user/create">Create</a>
                        </div>
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/user/show">Show</a>
                        </div>

                    </div>
                </div>
                <div class="m-2">
                    <div class="fs-3">Clinic</div>
                    <div class="border-start border-danger px-2">
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/clinic/create">Create</a>
                        </div>
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/clinic/show">Show</a>
                        </div>

                    </div>
                </div>
                <div class="m-2">
                    <div class="fs-3">Section</div>
                    <div class="border-start border-danger px-2">
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/section/create">Create</a>
                        </div>
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/section/show">Show</a>
                        </div>

                    </div>
                </div>
                <div class="m-2">
                    <div class="fs-3">Patinent</div>
                    <div class="border-start border-danger px-2">
                        <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/patient/register">Reserve</a>
                        </div>
                        <!-- <div>
                            <a class="text-decoration-none text-light"
                                href="http://localhost/MVC/MVC/dashboard/section/show">Show</a>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 position-absolute   end-0 overflow-auto">
            {{content}}
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>