<?php 
    $adminObj = new Admin();
    if(isset($_POST['adminBtn'])){
        $oputMsg = $adminObj -> add_admin($_POST);
    }
?>

<form action="" method="post">
    <?php 
        if(isset($oputMsg)){
    ?>
        <div class="alert alert-dark" role="alert">
                <?php echo $oputMsg; ?>
        </div>

    <?php
        }
    
    ?>
  <h2>Add User :</h2>
  <div class="form-group">
      <label for="adminName">User Name :</label>
      <input type="text" name="adminName" id="adminName" class="form-control" placeholder="Enter User Name" required>
  </div>
  <div class="form-group">
      <label for="adminEmail">User email :</label>
      <input type="email" name="adminEmail" id="adminEmail" class="form-control" placeholder="Enter User Email" required>
  </div>
  <div class="form-group">
      <label for="adminPass">User Password :</label>
      <input type="password" name="adminPass" id="adminPass" class="form-control" placeholder="Enter User Email" required>
  </div>
  <div class="form-group">
      <input type="submit" value="Add User" name="adminBtn" class="btn btn-success">
  </div>
</form>