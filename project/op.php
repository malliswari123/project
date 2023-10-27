<?php
     SESSION_START();
     echo "Welcome ".$_SESSION['id'] ;
//include("connection.php");
$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="medco_cosultancy";
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(!$con)
	{
		die("falied to connect!");
	}
                    if($_SERVER['REQUEST_METHOD']== "POST")
                    {
                       $id=$_POST['id']; 
                       $date=$_POST['date']; 
                        $sn=$_POST['sn']; 
                       $dis=$_POST['dis']; 
                     $med=$_POST['med'];
                     
                    if(isset($_POST['set']))
                    {
                     /* for ($i = 0; $i < count($names); $i++) {
                        $id = $conn->real_escape_string($id[$i]);
                        $date = $conn->real_escape_string($date[$i]);
                        $sn = $conn->real_escape_string($sn[$i]);
                        $dis = $conn->real_escape_string($dis[$i]);
                        $med = $conn->real_escape_string($med[$i]);*/
                    $query = "INSERT INTO details(id, Student_Name, date, disease, PRESCRIBED_MEDICINE) VALUES ('$id','$sn','$date','$dis','$med')";
                  
                 mysqli_query($con,$query);
                echo "<script>
                alert('successfully inserted');</script>";
               // header("Location:op.php");
              }
                     } 
?>
<hmtl>
<head>
    <title>online medical consultancy</title>
    <style>
    body{
        background-color: grey;
    }
    table,th,td{
        border: 3px solid black;
        width: 1100px;
        cell spa
        background-color: white;
    }
    .btn{
        width: 10px;
        height: 5%;
        font-size: 22px;
        padding: 6px;
    }
    </style>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
h1{color: teal;}
padding:20px 60px 0px 60px}
img{display:block;}
body{background-image:url("/home/teja/Downloads/images.wt/hdmain.avif");
background-size:cover;
height:110vh;
background-position:center;
}
.navbar{width:100%;
background-color:cornsilk
overflow:auto}
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
h1#font1{font-size: 40px;}
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
    <center>
        <h1>RGUKT ONLINE MEDICAL CONSULTANCY</h1>
        <h2>RGUKT STUDENT DETAILS</h2>
        <div class="container">
       <form method="POST">
    <table  >
        <tr>
            <th><center>STUDENT ID</center></th>
            <th><center>DATE</center></th>
            <th><center>STUDENT NAME</center></th>
            <th><center>DISEASE</center></th>
            <th><center>PRESCRIBED MEDICINE</center></th>
        </tr><br>
       
                <tr>
                    
                   <td><input type="text" name="id"style="border:none;" > </td>
                   <td><input type="date" name="date" style="border:none;"> </td>
                   <td><input type="text" name="sn" style="border:none;"> </td>
                   <td><input type="text" name="dis" style="border:none;"> </td>
                   <td><input type="text" name="med" style="border:none;" > </td>
            
                </tr>
                 
                </table>
     <input  type="submit"   name="set" value="submit"></input>
                    </form>
                    
           
        </div>    
    </center>
</body>
</html>
