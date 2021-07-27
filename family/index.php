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
        <div class="panel-heading">Families <a href="family/add.php" class="glyphicon glyphicon-plus"></a></div>
        <table class="table">
            <tr>
                <th width="25%"></th>
                <th width="25%">#</th>
                <th width="20%">Name</th>
            </tr>
            <?php
            include '../DB.php';
            $db = new DB();
            $users = $db->getRows('family');
            if(!empty($users)){ $count = 0; foreach($users as $user){ $count++;?>
            <tr>
                <td></td>
                <td><?php echo $count; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-edit"></a>
                    <a href="action.php?action_type=delete&id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure?');"></a>
                </td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4">No user(s) found......</td>
            <?php } ?>
        </table>
    </div>
</div>