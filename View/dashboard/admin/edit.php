<?php $layout = 'dashboard' ;?>

<div>
    <div class="d-flex ">
        <div class=" p-3 fs-3 border-bottom ">
            Update Admin
            <div class="d-inline">
                <img class="rounded"
                    src="<?php echo $path != 0 ? App\Core\File::pathToUrl($path) : 'https://retailx.com/wp-content/uploads/2019/12/iStock-476085198-300x300.jpg'; ?>"
                    alt="" width="50" height="50">
                <div>

                </div>
            </div>

        </div>
    </div>


    <div>

        <form action="/MVC/MVC/admin/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="path" value="<?php echo $path; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="<?php echo $username; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                    value="<?php echo $password; ?>">
            </div>

            <div class="mb-3">
                <label class="form-lable" for="profile">Select profile photo(optional)</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="isActive" class="form-check-input" <?php echo $isActive ? "checked" : '' ;
                    ?> id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="removePhoto" class="form-check-input" <?php echo $isActive ? "checked" : '' ;
                    ?> id="removePhoto">
                <label class="form-check-label" for="removePhoto">RemovePhoto</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>