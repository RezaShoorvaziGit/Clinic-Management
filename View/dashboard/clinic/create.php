<?php $layout = 'dashboard' ?>

<div>
    <div class=" p-3 fs-3 border-bottom">
        Create Clinic
    </div>

    <div>

        <form action="/MVC/MVC/clinic/store" method="POST" >
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" name="Address" class="form-control" id="Address">
            </div>

            <div class="mb-3">
                <label for="sections" class="form-label">select the sections</label>
                <select name="sections[]" id="sections" size="3" class="form-select" multiple aria-label="multiple select example">
                    <?php foreach ($sections as $section) { ?>
                        <option value="<?php echo $section->id; ?>"><?php echo $section->title; ?> </option>

                    <?php  } ?>
                </select>
            </div>


            <div class="mb-3 form-check">
                <input type="checkbox" name="isActive" class="form-check-input" id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="isFullTime" class="form-check-input" id="isFullTime">
                <label class="form-check-label" for="isFullTime">Is Full Time?</label>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>

</div>