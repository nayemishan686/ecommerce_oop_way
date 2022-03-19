<?php 
    $obj_adminBack = new Admin();
    $ctgData = $obj_adminBack -> displayCategory();
?>
<h2>Edit Category</h2>
<table class="table table-stripped">
    <thead>
        <tr>
            <th>Ctg Id</th>
            <th>Ctg Name</th>
            <th>Ctg Description</th>
            <th>Ctg Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while($ctg = mysqli_fetch_assoc($ctgData)){
        ?>

            <tr>
                <td><?php echo $ctg['id']; ?></td>
                <td><?php echo $ctg['ctg_name']; ?></td>
                <td><?php echo $ctg['ctg_descrip']; ?></td>
                <td><?php echo $ctg['ctg_status']; ?></td>
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