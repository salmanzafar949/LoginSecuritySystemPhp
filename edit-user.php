<?php
include 'db.php';
$id    = $_REQUEST['id'];
$name  = $_REQUEST['name'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$pass  = $_REQUEST['pass'];
if(!empty($name) && !empty($lname) && !empty($email) && !empty($pass) && !empty($id))
{
$sql   = "UPDATE signup SET name ='$name', lname='$lname', email ='$email', pass='$pass' WHERE id = '$id' ";
            $result = mysqli_query($conn, $sql);
            header('location:adashboard.php');
}
else{
   echo "Fill all the fields";
}
?>
