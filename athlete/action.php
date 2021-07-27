<?php
session_start();
// var_dump($_POST);
include '../DB.php';
$db = new DB();
$tblName = 'athletes';
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'school_id' => $_POST['school_id']
        );
        // var_dump($userData);
        $insert = $db->insert($tblName,$userData);
        $statusMsg = $insert?'User data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:index.php");
    }elseif($_REQUEST['action_type'] == 'edit'){
        if(!empty($_POST['id'])){
            $userData = array(
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'school_id' => $_POST['school_id']
            );
            
            $condition = array('id' => $_POST['id']);
            // var_dump($condition);
            $update = $db->update($tblName,$userData,$condition);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:index.php");
        }
    }elseif($_REQUEST['action_type'] == 'delete'){
        if(!empty($_GET['id'])){
            $condition = array('id' => $_GET['id']);
            $delete = $db->delete($tblName,$condition);
            $statusMsg = $delete?'User data has been deleted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location");
        }
    }
}