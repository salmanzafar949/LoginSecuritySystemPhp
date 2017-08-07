<?php
   include 'db.php';
  if(isset($_POST['submit']))
  {
     $name = $_POST['name'];
     $lname  = $_POST['lname'];
     $email  = $_POST['email'];
     $pass  = $_POST['pass'];
     $pass1  = $_POST['pass1'];
     $dob  = $_POST['dob'];
     $gender  = $_POST['gender'];
     $intrest = $_POST['intrest'];
     $s_q  = $_POST['s_q'];
     $s_ans  = $_POST['s_ans'];

     if(!empty($name && $lname && $email && $pass && $pass1 && $dob && $gender && $s_q && $s_ans))
     {
           $sql1  ='SELECT * FROM `signup`';
           $result = mysqli_query($conn,$sql1);
           while($row = mysqli_fetch_assoc($result))
             {
               global $umail;
               $umail = $row['email'];
             }
           if ($umail !== $email )
           {
          if($pass == $pass1)
          {
             $_SESSION['email'];
           $code = sha1(rand(0,1000));
                         $sql ="INSERT INTO `signup`(name,lname,email,pass,dob,gender,intrest,s_q,s_ans,a_code) VALUES ('$name','$lname','$email','$pass','$dob','$gender','$intrest','$s_q','$s_ans','$code')";
                          $res = mysqli_query($conn,$sql);
                             header('location:verifymail.php');
                             $subject = "email verfication";
                             $message = "Your account verfication code is".$code;
                             mail($email, $subject, $message);
          }else{
             echo "Password donot match";
          }
        }else{
           echo "Email already exist";
        }
     }else{
       echo "Fill all the fields";
     }
  }
?>
<html>
   <head>

   <title> Registration  </title>
   <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
    </head>
 <body>
    <div class="container">
      <form method="post" class="form-horizental">
      <fieldset>
    <legend> Signup </legend>


     <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
          <input class="form-control" type="text" name="name" placeholder="Enter your name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputlname" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input class="form-control" type="text" name="lname" placeholder="Enter your last name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputpass" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
      <input class="form-control" type="password" name="pass" placeholder="Enter your password" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputpass1" class="col-lg-2 control-label">Confirm password</label>
      <div class="col-lg-10">
        <input class="form-control" type="password" name="pass1" placeholder="Re-Enter your passowrd" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputdob" class="col-lg-2 control-label">Date of birth</label>
      <div class="col-lg-10">
        <input class="form-control" type="Date" name="dob" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputgender" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <input class="" type ="radio" name="gender" value="male" required>Male<br>
        <input type ="radio" name="gender" value="female" required>Female<br>
      </div>
    </div>
    <div class="form-group">
      <label for="inputintrst" class="col-lg-2 control-label">Your favourite sports</label>
      <div class="col-lg-10">
        <input type="checkbox" name="intrest" value="1"> Cricket  <br>
        <input type="checkbox" name="intrest" value="2"> Football  <br>
        <input type="checkbox" name="intrest" value="3"> Other  <br>

      </div>
    </div>
    <div class="form-group">
      <label for="inputdob" class="col-lg-2 control-label">Secret Question</label>
      <div class="col-lg-10">
        <?php
           global $q1,$q2,$q3;
          $q = "SELECT * FROM `questions`";
            $res =  mysqli_query($conn,$q);
            while($row = mysqli_fetch_assoc($res))
            {
              $q1 = $row['q1'];
              $q2 = $row['q2'];
              $q3 = $row['q3'];
            }
        ?>
        <select name="s_q" class="form-control" required>

              <option value="1"> <?php echo $q1; ?> </option>
              <option value="2"> <?php echo $q2; ?> </option>
              <option value="3"> <?php echo $q3; ?> </option>
        </select><br>

      </div>
    </div>
    <div class="form-group">
      <label for="inputanswer" class="col-lg-2 control-label">Answer</label>
      <div class="col-lg-10">
        <input class="form-control" type="text" name="s_ans" placeholder ="Enter your anwser">
      </div>
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" class="btn btn-primary "> Register </button>
      </div>
    </div>

      </form>
    </div>


 </body>
 </html>
