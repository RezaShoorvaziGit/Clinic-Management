<?php $layout = 'dashboard' ?>

<div>
    <div class=" p-3 fs-3 border-bottom">
        Update Admin
    </div>

    <div>

        <form action="/MVC/MVC/admin/update" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $name ; ?>">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="<?php echo $username ; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" value="<?php echo $password ; ?>">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="isActive" class="form-check-input" <?php echo $isActive ? "checked" : '' ; ?> id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>