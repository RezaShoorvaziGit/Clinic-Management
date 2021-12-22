<?php $layout = 'dashboard' ?>

<div>
    <div class=" p-3 fs-3 border-bottom">
        Create Admin
    </div>

    <div>

        <form action="/MVC/MVC/admin/store" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label class="form-lable" for="profile">Select profile photo(optional)</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="isActive" class="form-check-input" id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>