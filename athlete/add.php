
<?php
include '../DB.php';
$db = new DB();
$schools = $db->getRows('schools');
// var_dump($schools);
?>
    <div class="pane
    l panel-default user-add-edit">
        <div class="panel-heading">Add Athlete <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="action.php" class="form" id="userForm">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="fname"/>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lname"/>
                </div>
                <div class="form-group">
                    <label>School</label>
                    <select name="school_id" id="school_id">
                    <?php foreach ($schools as $school) {?>
                        <option value ="<?= $school['id']?>"> <?= $school['name']?> </option>
                    <?php } ?>
                    </select>
                </div>
                <input type="hidden" name="action_type" value="add"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Add User"/>
            </form>
        </div>
    </div>
</div>