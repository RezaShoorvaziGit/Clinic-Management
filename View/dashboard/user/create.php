<?php $layout = 'dashboard'; ?>

<div>
    <div class=" p-3 fs-3 border-bottom">
        Create User
    </div>

    <div>

        <form action="/MVC/MVC/user/store" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div>
                <select name="type" id="type"  class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="doctoer">Doctoer</option>
                    <option value="nurse">Nurse</option>
                    <option value="service">Service</option>
                    <option value="recipt">Reciept</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mrdical Code</label>
                <input type="password" name="medicalCode" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label class="form-lable" for="profile">Select profile photo(optional)</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>
            <div class="d-flex m-3">
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="gender" id="gender1">
                    <label class="form-check-label" for="gender1">
                        Men
                    </label>
                </div>
                <div class="form-check d-inline mx-2">
                    <input class="form-check-input" value="0" type="radio" name="gender" id="gende2">
                    <label class="form-check-label" for="gender2">
                        Women
                    </label>
                </div>
            </div>

            <div class="m-3 form-check d-flex">
                <input type="checkbox" name="isActive" class="form-check-input" id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>