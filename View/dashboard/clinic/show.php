<?php $layout = 'dashboard' ?>


<div>
    <div class="border-bottem fs-1">
        Admins
    </div>
    <div>
        <table class="ml-3 table table-striped table-hover">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>Active</th>
                <th>fulltime</th>
                <th>action</th>
            </tr>
            <?php foreach ($clinics as $clinic) { ?>
            <tr>
                <th>
                    <?php echo $clinic->id; ?>
                </th>
                <td>
                    <?php echo $clinic->name; ?>
                </td>

                <td>
                    <?php echo $clinic->address; ?>
                </td>
                <td>
                    <div>
                        <div class="">
                            <form action="/MVC/MVC/dashboard/clinic/edit" method="GET">
                                <input type="hidden" name="id" value="<?php echo $clinic->id; ?>">
                                <button type="submit" class="border-0 bg-transparent">
                                    <?php if($clinic->is_active == 1 ){ ?>
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                    <?php } ?>
                                    <?php if($clinic->is_active == 0 ){ ?>
                                        <i class="bi bi-x-circle-fill text-danger"></i>
                                    <?php } ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    <div>
                        <div class="">
                            <form action="/MVC/MVC/dashboard/clinic/edit" method="GET">
                                <input type="hidden" name="isFullTime" value="<?php echo $clinic->id; ?>">
                                <button type="submit" class="border-0 bg-transparent">
                                    <?php if($clinic->is_full_time== 1 ){ ?>
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                    <?php } ?>
                                    <?php if($clinic->is_full_time == 0 ){ ?>
                                        <i class="bi bi-x-circle-fill text-danger"></i>
                                    <?php } ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
                <td class="d-flex ">
                    <div class="mx-2">
                        <form action="/MVC/MVC/clinic/delete" method="POST">
                            <input type="hidden" name="id" value="<?php echo $clinic->id; ?>">
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="bi bi-trash2 text-danger"></i>
                            </button>
                        </form>
                    </div>
                    <div class="">
                        <form action="/MVC/MVC/dashboard/clinic/edit" method="GET">
                            <input type="hidden" name="id" value="<?php echo $clinic->id; ?>">
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="bi bi-pencil-square text-success "></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>