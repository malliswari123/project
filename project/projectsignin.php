<?php
	include("connection.php");
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		//Something was posted
		$id=$_POST['id'];
		$name=$_POST['nam'];
		$email=$_POST['email'];
		$password_1 =  $_POST['password_1'];
  		$password_2 =  $_POST['password_2'];

  		//create by the php
  		
		 if($password_1 != $password_2) {
			echo "The two passwords do not match";
			die;
 		 }

 		//echo $email;
 		//echo $password;
			else{
				if(!empty($email) && !empty($password_1))
				{
					//save to database
					$sql="insert into users (id,name,email,password) values('$id','$name','$email','$password_1')";
					mysqli_query($con,$sql);
					header("Location:projectloginpage.php");
					die;
				}else
				{
					echo "please enter some valid information.";
				}
			


 		
 	}	}
?>
<html lang="en">
<head>
  <title>signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body{background-image:url("/home/teja/Downloads/images.wt/33587a82f8223051918dad6cdcde9650.jpg");
background-size:cover;
height:100vh;
background-position:center;
}
h1{color:black}
input{border-radius:6px}
img{width:400;
height:400;
float:right}
.navbar{width:100%;
background-color:cornsilk;
overflow:auto;}
.navbar a.nav-link{padding:15px;
float :right;
color:crimson;
text-decoration:none;
font-size:30px}
.navbar a.b{padding:15px;
color:blue;
font-size:30px;
float:left;
text-decoration:none}
.navbar a:hover{color:teal}
.navbar a.navbar-brand{padding:15px;
color:blue;
font-size:30px}
.two{padding-left: 600px;}
</style>
<body>
  <div class="navbar">
    <nav class="navbar navbar-expand-sm navbar-light bg-success fs-5 ">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="projectnav.php"><i class="fa fa-fw fa-home"></i>Home</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a class="b" href="medical.html"><i class="fa fa-medkit"></i>Medical Portal</a></li>
    <li><a class="b" href="docavail.html"><i class="fa fa-stethoscope"></i>Availability of Doctors</a></li>
    </ul>
    <ul>
    <a class="nav-link" href="projectsignin.php" aria-current="page"><span class="glyphicon glyphicon-pencil"></span>SignUp</a>
    <a class="nav-link" href="projectloginpage.php"><i class="fa fa-fw fa-user"></i>Login</a>
    </ul>
    </div>
    </nav>
    </div>
  
<div class="container">

  <div class="two">
    <h1>
<b>SIGN UP</b></h1>
<br>
<form method="post">
<b>Id &emsp;&emsp;&nbsp;&emsp;&ensp;&emsp;&nbsp;&nbsp;:&emsp;&nbsp;</b><input type="text" name="id" placeholder="Enter id" size="45"><br><br>
<b> Name &emsp;&emsp;&emsp;&ensp;:&emsp;&nbsp;</b><input type="text" placeholder="Enter Firstname" name="nam" size="45"><br><br>
<b>Email&emsp;&emsp;&ensp;&emsp;&nbsp;:&emsp;&nbsp;</b><input type="email" placeholder="Enter Mail" name="email" size="45"><br><br>
<b>Password&emsp;&ensp;:&emsp;&nbsp;&nbsp;</b><input type="password" name="password_1" placeholder="Enter Password" size="45"><br><br>
               &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;<input type="password" placeholder="Confirm-password"  name="password_2"size="45"><br><br>
              &emsp;&emsp;&emsp;&emsp;<button type="submit" class="btn btn-success" >&emsp;&emsp;&emsp;SignUp&emsp;&emsp;&emsp;</button><a href="#"></a>
</form>
</div>
</div>
</body>
</html>
