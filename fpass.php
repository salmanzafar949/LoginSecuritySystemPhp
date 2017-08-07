<?php
session_start();
$email= @$_POST['email'];
@$_SESSION['email'];
// include 'db.php';
// if(isset($_POST['submit']))
// {
//      $email = $_POST['email'];
//      //$s_ans = $_POST['s_ans'];
//    $q = "SELECT * FROM `signup` WHERE email='$email'";
//    $res = mysqli_query($conn,$q);
//    $row = mysqli_fetch_assoc($res);
//    $id = $row['s_q'];
//    if($row['a_status']==1)
//    {
//      header('s_ans.php');
//
  //   if($row['s_ans'] == $s_ans)
  //  {
   //
  //          $pass = sha1(rand(0,100));
  //          $q1 = "UPDATE signup SET pass='$pass' WHERE email='$email'";
  //          $reslt = mysqli_query($conn,$q1);
  //               $subject="Password Change";
  //               $message="your new password is".$pass;
  //              @mail($email, $subject, $message);
  //              echo "Mail sent";
  //   }else{
  //      echo "Wrong anwer";
  //   }
 // }else{
 //      header('location:verifymail.php');
// }
//}
?>
<html>
<head>
  <title> Forget Passsword </title>
  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</head>
<body>
  <div class="container">
    <form class="form-Horizental" method="post" action="fp.php">
 <!--used to pen form !-->
  <fieldset>
    <legend> <h1> Forget password </h1> </legend>
    <p class="txt txt-info">
    <h4 class="alert alert-info"> we will send you a Link to reset your password on your email </h4>
  </p>
    <div class="form-group">
     <label for="inputforcode" class="col-lg-2 control-label">Enter email</label>
     <div class="col-lg-10">
       <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
           </div>
      <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" name="submit" class="btn btn-primary ">submit</button>
      </div>
    </fieldset>
    <!-- <section>
       <h1> Please verify your email  </h1>
       <h3> Enter the code below  </h3>
       <form method="post" action="./vfma" align="center">
         <input type="text" name="code" placeholder="Enter the code" required autofocus> <br>
         <button type="submit" class="btn btn-lg btn-success " name="verify" > Enter </button> -->

       </form>
    </section>
  </div>
</body>
</html>
