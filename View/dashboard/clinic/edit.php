<?php $layout = 'dashboard' ?>

<div>
    <div class=" p-3 fs-3 border-bottom">
        Update Clinic
    </div>

    <div>

        <form action="/MVC/MVC/clinic/update" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control"  id="name" value="<?php echo $name ; ?>">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input type="text" name="address" class="form-control" id="address" value="<?php echo $address ; ?>">
            </div>
           
            <div class="mb-3 form-check">
                <input type="checkbox" name="isActive" class="form-check-input" <?php echo $isActive ? "checked" : '' ; ?> id="isActive">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="isFullTime" class="form-check-input" <?php echo $isFullTime ? "checked" : '' ; ?> id="isFullTime">
                <label class="form-check-label" for="active">Is Full Time</label>
            </div>

            <div class="mb-3">
                <label for="sections" class="form-label">select the sections</label>
                <select name="sections[]" id="sections" size="3" class="form-select" multiple aria-label="multiple select example">
                    <?php foreach ($sections as $section) { ?>
                        <option value="<?php echo $section->id; ?>" <?php echo in_array($section->id,$Selectedsectiona) ? "selected" : '' ; ?> > <?php echo $section->title; ?> </option>

                    <?php  } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

</div>