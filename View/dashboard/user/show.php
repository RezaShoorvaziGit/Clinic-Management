<?php $layout = 'dashboard' ?>

<?php
// echo "<pre>" ;
// print_r($users) ;
// echo "</pre>" ;

// die ;
?>

<div>
    <div class="border-bottem fs-1">
        Admins
    </div>
    <div>
        <table class="ml-3 table table-striped table-hover">
            <tr>
                <th>id</th>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Type</th>
                <th>action</th>

            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <th><?php echo $user->id; ?> </th>
                    <td>
                        <img src="<?php echo $user->profile_path != 0 ? App\Core\File::pathToUrl($user->profile_path) : 'https://retailx.com/wp-content/uploads/2019/12/iStock-476085198-300x300.jpg'; ?>" alt="" width="30" height="30">
                    </td>
                    <td><?php echo $user->first_name; ?> </td>
                    <td><?php echo $user->last_name; ?> </td>
                    <td><?php echo $user->phone; ?> </td>
                    <td><?php echo $user->type; ?> </td>
                    <td class="d-flex ">
                        <div class="">
                            <form action="/MVC/MVC/dashboard/user/edit" method="GET">
                                <input type="hidden" name="id" value="<?php echo $clinic->id; ?>">
                                <button type="submit" class="border-0 bg-transparent">
                                    <?php if ($clinic->is_active == 1) { ?>
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    <?php } ?>
                                    <?php if ($clinic->is_active == 0) { ?>
                                        <i class="bi bi-x-circle-fill text-danger"></i>
                                    <?php } ?>
                                </button>
                            </form>
                        </div>
                        <div class="mx-2">
                            <form action="/MVC/MVC/user/delete" method="POST">
                                <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="bi bi-trash2 text-danger"></i>
                                </button>
                            </form>
                        </div>
                        <div class="">
                            <form action="/MVC/MVC/dashboard/user/edit" method="GET">
                                <input type="hidden" name="id" value="<?php echo $user->id; ?>">
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


