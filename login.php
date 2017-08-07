<?php

 include 'db.php';
 session_start();
 if(isset($_POST['submit']))
 {

   $email = $_POST['email'];
   $pass  = $_POST['pass'];
   if(!empty($email) && !empty($pass))
   {
   $sql   = "SELECT * FROM `signup` WHERE email='$email' AND pass='$pass' ";
   $res   =  mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($res);
   if($row['a_status']='1')
   {
     if($res && mysqli_num_rows($res) > 0)
   {

     header('location:dashboard.php');
   }
   else{
       echo "Invalid email or password";
   }
 }
 else{
      header('location:verifymail.php');
 }
 }
 else{
      echo "Fill all the fields";
 }

 }
?>

<html>
    <head>
        <title>User Login</title>
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="conatiner">
          <form method="post">
          <fieldset>
    <legend> User Login </legend>
          <div class="form-group">
     <label for="inputusername" class="col-lg-2 control-label">Email</label>
     <div class="col-lg-10">
       <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
     </div>
   </div>
   <div class="form-group">
     <label for="inputPassword" class="col-lg-2 control-label">Password</label>
     <div class="col-lg-10">
       <input class="form-control" type="password" name="pass" placeholder="Enter your password" required>
            <div class="form-group">
     <div class="col-lg-10 col-lg-offset-2">
     <button type="submit" name="submit" class="btn btn-primary "> Login</button> <br> <br>
     <a href="fpass.php"> forget password </a>
      <!-- <a href="fpass"> Forget password </a> -->
     </div>
   </div>
 </fieldset>
</form>
</div>
            <!-- <section>
                <form class="form form-horizental" action="userlogin" align="center" method="post">
                <legend>Login form</legend>
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <input type="password" name="pass" placeholder="Enter your password" required> <br>
                <button type="submit" class="btn btn-primary" name="login">Login</button> <br>
                <a href="fpass"> Forget password </a>
                    </form>
            </section> -->
        </div>
    </body>
</html>
