<?php $layout = 'main' ?>

<section class="h-100 bg-dark position-absolute ">
    <div class="container  h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="http://localhost/MVC/MVC/public/storage/main/img/clinic_reserve.jpg"
                                alt="Sample photo" class="img-fluid" style="width: 23rem;" />
                        </div>
                        <div class="col-xl-6 ">
                            <form action="" method="POST">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Patient Register Form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input name="firstName" type="text" id="firstName"
                                                    class="form-control form-control-sm" />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input name="lastName" type="text" id="lastName"
                                                    class="form-control form-control-sm" />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="phone" id="phone"
                                                    class="form-control form-control-sm" />
                                                <label class="form-label" for="form3Example1m">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="number" name="nationalCode" id="nationalCode"
                                                    class="form-control form-control-sm" />
                                                <label class="form-label" for="form3Example1n">National Code</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                        <h6 class="mb-0 me-4">Gender: </h6>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                                value="0" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                                value="1" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-outline">
                                            <input name="age" type="number" id="age"
                                                class="form-control form-control-sm" placeholder="age" min="1" max="150" />
                                        </div>

                                    </div>




                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>