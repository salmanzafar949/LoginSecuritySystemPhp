<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
        <li class="pull-right"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container">
  <p class="alert alert-success"> Welcome  </P>
  <?php
  // include 'db.php';
  // session_start();
  // $email = $_REQUEST['email'];
  // $_SESSION['email'];
  // $sql = "SELECT * FROM `signup` WHERE email='$email'";
  // $res = mysqli_query($conn,$sql);
  //      	   echo "
  // 		<table align=\"center\" border=\"0\" width=\"70%\">
  // 		<tr>
  // 		<td><b>ID</b></td><td><b>Name</b></td><td><b>Last Name</b></td><td><b>modify</b></td></td><td><b>Delete</b></td></tr> ";
  // while($row = mysqli_fetch_assoc($res))
  // {
  //   echo '<tr><td>'.$row['id'].'</td><td>';
	// 	echo $row['name'].'</td><td>';
	// 	echo $row['lname'].'</td><td>';
  //   echo "<a  class='btn btn-defaulrt' style='color:red;' href=\"user.php?id=".$row['id']."\"><input type=\"button\" value=\"modify\"></a>
	// 	</td><td>
	//     <a href=\"delete-user.php?id=".$row['id']."\">
	//      <input type=\"button\" value=\"Delete\"></a></td></tr>";
  // }
  // echo "</table>";
  ?>
</div>
