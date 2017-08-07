<?php
include 'db.php';


if(isset($_REQUEST['id']) && isset($_REQUEST['code']))
{
    $id=$_REQUEST['id'];
   $code=$_REQUEST['code'];
  $sql="SELECT * FROM `signup` WHERE id='$id' AND a_code='$code'";
  $res = mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);
  $a_code = $row['a_code'];
  $showDivFlag=false;
  $showpFlag=true;


  if($row['a_status']=1)
  {
     if($a_code == $code)
     {
       $showDivFlag=true;
         $showpFlag=false;
            if(isset($_POST['reset']))
            {
              $pass  = $_POST['pass'];
              $pass1 = $_POST['pass1'];
              if($pass == $pass1)
              {

              $q = "UPDATE signup SET pass='$pass' WHERE id='$id'";
              $rest = mysqli_query($conn,$q);
              $q1 = "UPDATE signup SET a_code='' WHERE id='$id'";
              $res1 = mysqli_query($conn,$q1);


                 header('location:login.php');
            }else{
               echo "Password do not Match";
            }
          }
        }else{

          $showDivFlag=false;
            echo "<p class='alert alert-danger' align='center'> This session has been expired </p>";
        }
  }

  else{
     header('location:verifymail.php');
  }
}else{
  header('location:login.php');
}
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<html>
<head>
  <title> password reset </title>
</head>
<body>
  <div class="container" id="form" <?php if ($showDivFlag===false){?>style="display:none"<?php } ?>
    <p class="alert alert-danger">  </p>
    <form class="form-horizental" method="post">
    <fieldset>
  <legend> Reset Password  </legend>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" type="password" name="pass" placeholder="Enter your new password" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputpass" class="col-lg-2 control-label">Confirm Password</label>
      <div class="col-lg-10">
      <input class="form-control" type="password" name="pass1" placeholder="Re-Enter Password" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="reset" class="btn btn-primary "> Reset Password </button>
      </div>
    </div>

      </form>
  </div>
</body>
</html>
