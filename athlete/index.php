<?php
session_start();
if(!empty($_SESSION['statusMsg'])){
    echo '<p>'.$_SESSION['statusMsg'].'</p>';
    unset($_SESSION['statusMsg']);
}
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<div class="row">
    <div class="panel panel-default users-content">
        <div class="panel-heading">Athletes <a href="/athlete/add.php" class="glyphicon glyphicon-plus"></a></div>
        <table class="table">
            <tr>
                <th width="25%"></th>
                <th width="25%">#</th>
                <th width="20%">Last Name</th>
                <th width="13%">First Name</th>
                <th width="13%">School</th>
            </tr>
            <?php
            include '../DB.php';
            $db = new DB();
            $users = $db->getRows('athletes');
            if(!empty($users)){ $count = 0; foreach($users as $user){ $count++;?>
            <tr>
                <td></td>
                <td><?php echo $count; ?></td>
                <td><?php echo $user['lname']; ?></td>
                <td><?php echo $user['fname']; ?></td>
                <td><?php echo $user['school_id']; ?></td>
                <td>
                    <a href="athlete/edit.php?id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-edit"></a>
                    <a href="action.php?action_type=delete&id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure?');"></a>
                </td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4">No user(s) found......</td>
            <?php } ?>
        </table>
    </div>
</div>