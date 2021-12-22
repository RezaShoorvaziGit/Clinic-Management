<?php $layout = 'dashboard'; ?>

<div>
    <div class="d-flex ">
        <div class=" p-3 fs-3 border-bottom ">
            Update User
            <div class="d-inline">
                <img class="rounded" src="<?php echo !is_null($path) ? App\Core\File::pathToUrl($path) : 'https://retailx.com/wp-content/uploads/2019/12/iStock-476085198-300x300.jpg'; ?>" alt="" width="50" height="50">
                <div>

                </div>
            </div>

        </div>
    </div>


    <div>

        <form action="/MVC/MVC/user/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="path" value="<?php echo $path; ?>">
            <div class="mb-3">
                <label for="firstName" class="form-label">Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName; ?>">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Username</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName; ?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" name="phone" class="form-control" id="phone" value="<?php echo $phone; ?>">
            </div>
            <div>
                <select name="type" id="type" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="doctoer" <?php echo $type == 'doctoer' ? 'selected' : ''; ?>>Doctoer</option>
                    <option value="nurse" <?php echo $type == 'nurse' ? 'selected' : ''; ?>>Nurse</option>
                    <option value="service" <?php echo $type == 'service' ? 'selected' : ''; ?>>Service</option>
                    <option value="recipt" <?php echo $type == 'recipt' ? 'selected' : ''; ?>>Reciept</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-lable" for="profile">Select profile photo(optional)</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>
            <div class="d-flex m-3">
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="gender" id="gender1" <?php echo $gender == 0 ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="gender1">
                        Men
                    </label>
                </div>
                <div class="form-check d-inline mx-2">
                    <input class="form-check-input" value="0" type="radio" name="gender" id="gende2" <?php echo $gender == 0 ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="gender2">
                        Women
                    </label>
                </div>
            </div>
            <div class="d-flex m-3">
                <div class="mb-3 form-check">
                    <input type="checkbox" name="isActive" class="form-check-input" <?php echo $isActive ? "checked" : '';
                                                                                    ?> id="isActive">
                    <label class="form-check-label" for="active">Active</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="removePhoto" class="form-check-input" <?php echo $isActive ? "checked" : '';
                                                                                        ?> id="removePhoto">
                    <label class="form-check-label" for="removePhoto">RemovePhoto</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>