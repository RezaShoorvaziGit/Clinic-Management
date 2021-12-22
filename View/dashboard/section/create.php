<?php $layout = 'dashboard' ?>

<div>
    <div class=" p-3 fs-3 border-bottom">
        Create Admin
    </div>

    <div>

        <form action="/MVC/MVC/section/store" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="name" >
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" >
            </div>
 
            <div class="mb-3 form-check">
                <input type="checkbox" name="isActive" class="form-check-input" id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>