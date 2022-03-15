<?php 
    $ctg_object = new Admin();
    if(isset($_POST['ctgBtn'])){
        $outputMsg =$ctg_object -> add_category($_POST);
    }
?>
<form method="post" action="">
        <?php 
            if(isset($outputMsg)){
        ?>
            <div class="alert alert-dark" role="alert">
                <?php echo $outputMsg; ?>
            </div>
        <?php
            }
        ?>
  <h2>Add Category :</h2>
  <div class="form-group">
      <label for="ctgName">Category Name :</label>
      <input type="text" name="ctgName" id="ctgName" class="form-control" placeholder="Enter Category Name" required>
  </div>
  <div class="form-group">
      <label for="ctgDescription">Category Description :</label>
      <textarea name="ctgDescription" id="ctgDescription" cols="30" rows="5" class="form-control" placeholder="Enter Category Description" required></textarea>
  </div>
  <div class="form-group">
      <label for="ctgStatus">Category Status :</label>
      <select required="true" name="ctgStatus" class="form-control" required>
          <option disabled selected value="">Select One</option>
          <option value="1">Published</option>
          <option value="0">Unpublished</option>
      </select>
  </div>
  <div class="form-group">
      <input type="submit" value="Add Category" name="ctgBtn" class="btn btn-success">
  </div>
</form>