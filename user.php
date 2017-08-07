<?php
include 'db.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `signup` WHERE id='$id'";
$res= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
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
      <form class="form-horizental" method="get" action="edit-user.php">
      <fieldset>
    <legend> Edit-user </legend>


     <div class="form-group">
      <label for="inputname" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
          <input class="form-control" type="text" name="name" value="<?php echo $row['name'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputlname" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input class="form-control" type="text" name="lname" value="<?php echo $row['lname'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" type="email" name="email" value="<?php echo $row['email'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputpass" class="col-lg-2 control-label"></label>
      <div class="col-lg-10">
      <input class="form-control" type="password" name="pass" value="<?php echo $row['pass'] ?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary "> save </button>
      </div>
    </div>

      </form>
    </div>


 </body>
 </html>
