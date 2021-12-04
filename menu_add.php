<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>
<?php include './includes/db.php'; ?>


<?php require_once 'menu_process.php'; ?>
    <div class="container">
        <form action="menu_process.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="firstname">Menu Photo<span class="important">*</span></label>
                    <input class="form-control" type="file" id="photo" value="" name="image">
                </div>
                
                <div class="form-group">
                    <label for="firstname">Menu Name<span class="important">*</span></label>
                    <input class="form-control" type="text" id="menuname" value="" name="menuname">
                </div>

                <div class="form-group">
                    <label for="firstname">Menu Price<span class="important">*</span></label>
                    <input class="form-control" type="text" id="menuprice" value="" name="menuprice">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
        </form>
    </div>




<?php

  include('adminscript.php');

?>
