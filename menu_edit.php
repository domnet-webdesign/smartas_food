<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>
<?php include './includes/db.php'; ?>


<?php require_once 'menu_editprocess.php'; ?>
    <div class="container">
        <form action="menu_editprocess.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="menuid" value="<?php echo $idid; ?>" >

                <div class="form-group">
                    <label for="firstname">Menu Photo<span class="important">*</span></label>
                    <input class="form-control" type="file" id="photo" value="<?php echo $menuPhoto; ?>" name="image">
                </div>

                <div class="form-group">
                    <label for="firstname">Menu Name<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $menu_name; ?>" name="menuname">
                </div>
                
                <div class="form-group">
                    <label for="firstname">Menu Price<span class="important">*</span></label>
                    <input class="form-control" type="text" id="lastname" value="<?php echo $menu_price; ?>" name="menuprice">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="update">Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
        </form>
    </div>





<?php

include('adminscript.php');

?>