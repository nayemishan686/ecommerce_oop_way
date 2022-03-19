<?php 
    $obj_adminBack = new Admin();
    $adminData = $obj_adminBack-> displayUsers();
?>
<h2>Manage User</h2>

<table class="table table-stripped">
    <thead>
        <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($admin = mysqli_fetch_assoc($adminData)){
        ?>
            <tr>
                <td><?php echo $admin['id']; ?></td>
                <td><?php echo $admin['admin_username']; ?></td>
                <td><?php echo $admin['admin_email']; ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>