<?php

include 'db.php';
$email = $_REQUEST['email'];
$ans  = $_REQUEST['ans'];
session_start();
//$id    = $_REQUEST['id'];
// $ans   = $_REQUEST['ans'];
// $ans1  = $_REQUEST['ans1'];

if(!empty($email) && !empty($ans))
{
  $q ="SELECT * FROM `signup` WHERE email='$email'";
  $rest = mysqli_query($conn,$q);
  $row = mysqli_fetch_assoc($rest);
  @$id = $row['id'];
  @$_SESSION['id'];
  $code=sha1(rand(0,1000));
  if( $row['s_ans'] == $ans )
  {
   $pass = sha1(rand(0,100));
   $sql="UPDATE `signup` SET a_code='$code' WHERE id = $id";
   $res = mysqli_query($conn,$sql);
   $subject="Password Reset";
   $message="your new Password is
   <a href='http://localhost/final/passreset.php?id=$id&code=$code'>Click HERE to Activate :)</a>
    ";
   @mail($email, $subject, $message);
   header('location:everifymail.php');
  }else{
           echo "Wrong answer";
}
}else{
  echo "Enter email and answer";
}

?>
<form method="get">
<input type="hidden" nam="id" value="<?php echo $id ?>">
</form>
