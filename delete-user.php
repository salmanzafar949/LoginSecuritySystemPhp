<?php
include 'db.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `signup` WHERE id='$id'";
$res = mysqli_query($conn,$sql);
header('location:adashboard.php');
?>
