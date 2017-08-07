<?php


include 'db.php';
session_start();
@$email=$_REQUEST['email'];
//$_SESSION['email']=$ses;
//session_start();
if(!empty(@$email))
{
$sql = "SELECT * FROM `signup` WHERE email='$email'";
$res = mysqli_query($conn,$sql);
global $row;
$row = mysqli_fetch_assoc($res);
@$_SESSION['email'];
@$_SESSION['ans'];
}
else{
  header('location:login.php');
}
// if(isset($_POST['ans']))
// {
//   $ans = $_POST['ans'];
//    if($row['a_status'] == 1)
//    {
//    if(!empty($ans))
//    {
//        if($row['s_ans'] == $ans )
//        {
//          $pass = sha1(rand(0,100));
//                  $q1 = "UPDATE signup SET pass='$pass' WHERE email='$email'";
//                  $reslt = mysqli_query($conn,$q1);
//                       $subject="Password Change";
//                       $message="your new password is".$pass;
//                      @mail($email, $subject, $message);
//                      echo "Mail sent";
//                      header('location:login.php');
//        }else{
//          echo "Wrong answer";
//        }
//    }
//    else{
//       echo "Enter your answer";
//    }
//  }else{
//    header('location:verifymail.php');
//  }
// }
?>
<html>
<head>
  <title> Secret Question </title>
  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</head>
<body>
  <div class="container">
    <form class="form-Horizental" method="post" action="fps.php">
 <!--used to pen form !-->
  <fieldset>
    <legend> <h1> Forget password </h1> </legend>
    <p class="txt txt-info">
    <h4> we will send you a Confirmation Link  on your email </h4>
  </p>
    <div class="form-group">
      <p class="alert alert-success"> <?php echo $row['s_q']; ?> </p>
     <label for="inputforcode" class="col-lg-2 control-label">Enter email</label>
     <div class="col-lg-10">
       <input type="hidden" name="email" id="id" value="<?php echo $row['email']?>">
       <input class="form-control" type="text" id="ans" name="ans" placeholder="Enter your ans" required>
     </div>
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary "> Submit </button>

      <!-- <a class="btn btn-primary" href="fps.php"> Submit </a> -->
      </div>
    </fieldset>
