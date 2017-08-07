<?php
 include 'db.php';
 if(isset($_POST['submit']))
 {
  $code = $_POST['code'];
  if(!empty($code))
  {
  $q = "SELECT * FROM `signup` WHERE a_code='$code'";
  $res = mysqli_query($conn,$q);
  $row=mysqli_fetch_assoc($res);
  if($row['a_code'] == $code )
  {
     $q1 = "UPDATE signup SET a_status='1' AND a_code='' WHERE a_code='$code'";
     $rslt = mysqli_query($conn,$rslt);
     if($rslt && mysqli_affected_rows()>0)
     {
        header('location:login.php');
     }
     else{
       echo "Failed";
     }
  }
  else{
     echo "Invalid code";
  }
 }
 else{
    echo "Please Enter your code";
 }
 }
 else{
   header('login.php');
 }
?>
<html>
<head>
  <title> Email verification </title>
  <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</head>
<body>
  <div class="container">
    <form class="form-Horizental" method="post">
 <!--used to pen form !-->
  <fieldset>
    <legend> <h1> Please verify your email  </h1> </legend>
    <div class="form-group">
     <label for="inputforcode" class="col-lg-2 control-label">Enter Code</label>
     <div class="col-lg-10">
       <input class="form-control" type="text" name="code" placeholder="Enter your code" required>
     </div>
     <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" name="submit" class="btn btn-primary ">Verify</button>

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
