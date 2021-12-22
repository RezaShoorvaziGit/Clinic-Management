<?php $layout = 'dashboard' ?>


<div>
    <div class="border-bottem fs-1">
        Sections
    </div>
    <div>
        <table class="ml-3 table table-striped table-hover">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>useername</th>
                <th>action</th>
            </tr>
            <?php foreach ($sections as $section) { ?>
                <tr>
                    <th><?php echo $section->id; ?> </th>
                    <td><?php echo $section->title; ?> </td>
                    <td><?php echo $section->username; ?> </td>
                    <td class="d-flex ">
                    <div class="">
                            <form action="/MVC/MVC/dashboard/clinic/edit" method="GET">
                                <input type="hidden" name="id" value="<?php echo $clinic->id; ?>">
                                <button type="submit" class="border-0 bg-transparent">
                                    <?php if ($section->is_active == 1) { ?>
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    <?php } ?>
                                    <?php if ($section->is_active == 0) { ?>
                                        <i class="bi bi-x-circle-fill text-danger"></i>
                                    <?php } ?>
                                </button>
                            </form>
                        </div>
                    <div class="mx-2">
                            <form action="/MVC/MVC/admin/delete" method="POST">
                                <input type="hidden" name="id" value="<?php echo $section->id; ?>">
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="bi bi-trash2 text-danger"></i>
                                </button>
                            </form>
                        </div>
                        <div class="">
                            <form action="/MVC/MVC/dashboard/admin/edit" method="GET">
                                <input type="hidden" name="id" value="<?php echo $section->id; ?>">
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