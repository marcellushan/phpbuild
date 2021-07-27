<?php
include '../DB.php';
$db = new DB();
$userData = $db->getRows('athletes',array('where'=>array('id'=>$_GET['id']),'return_type'=>'single'));
// var_dump($userData);
if(!empty($userData)){
?>
<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Edit User <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $userData['fname']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname" value="<?php echo $userData['lname']; ?>"/>
                </div>
                <div class="form-group">
                    <label>School</label>
                    <input type="text" class="form-control" name="school_id" value="<?php echo $userData['school_id']; ?>"/>
                </div>
                <input type="hidden" name="id" value="<?php echo $userData['id']; ?>"/>
                <input type="hidden" name="action_type" value="edit"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Update User"/>
            </form>
        </div>
    </div>
</div>
<?php } ?>