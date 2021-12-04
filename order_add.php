<?php include '../includes/header1.php'; ?>
<?php include '../includes/navbar1.php'; ?>
<?php include '../includes/conn.php'; ?>


<?php require_once 'organ_process.php'; ?>
    <div class="container">
        <form action="organ_process.php" method="POST">
                <div class="form-group">
                    <label for="firstname">Organisation Name<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $organ_name; ?>" name="organ_name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
        </form>
    </div>

<?php include '../includes/scripts1.php'; ?>