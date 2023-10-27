<?php
	include("connection.php");

	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		//Something was posted
		$id=$_POST['id'];   
		$password=$_POST['password'];
 	
		if(!empty($id) && !empty($password))
		{
			//save to database.

			$query="select *from users where id= '$id' limit 1";
			$result=mysqli_query($con,$query);
			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
				{
					$user_data=mysqli_fetch_assoc($result);
					if($user_data['password']=== $password)
					{
                        echo"<script>
                            alert('welcome to medco - Consultancy');</script>";
						die;
					}
				}
			}
			else
			{
				echo "Wrong email or password.";
			}

		}
		else
		{
			echo "Wrong email or password.";
		}
	}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
body{background-image:url("/home/teja/Downloads/images.wt/33587a82f8223051918dad6cdcde9650.jpg");
background-size:cover;
height:100vh;
background-position:center;
}
h1{color:black}
img{width:400;
height:400;
float:right}
input{border-radius:6px}
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
.one{
padding-left:600px;}
</style>
<body>
  <div class="navbar">
    <nav class="navbar navbar-expand-sm navbar-light bg-success fs-5 ">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="projectnav.html"><i class="fa fa-fw fa-home"></i>Home</a>
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

<br><br>
<div class="one">
<h1><b>LOGIN</b></h1>
<br>
<form method="post">
<b>Id </b>&nbsp; &emsp;&emsp;&emsp;&emsp;&nbsp;:&emsp;<input name="id"type="text" placeholder="Enter your id" size="35"><br><br>
<b>Password</b>&emsp; :&ensp;&ensp;<input type="password" name="password" placeholder="Enter password" size="35"><br>
<br>
<br>
<a href="cp.html"><b>Change Password</b></a>&emsp;&emsp;&emsp;&emsp;<a href="forgot.php"><b>Forget Password?</b></a><br><br>
&emsp;&emsp13;&emsp13;<button type="submit" class="btn btn-success">&emsp;&emsp;&emsp;&emsp;Login&emsp;&emsp;&emsp;&emsp;</button><a href="#"></a>
</form>
<div class="signup">
<span class="signup">&emsp;Don't have an account?
<label for="check">Signup</label></span>
</div>
</div>
</div>
</div>
</body>
</html>

