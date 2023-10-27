<?php
     SESSION_START();
     echo "Welcome ".$_SESSION['id'] ;
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
       <!-- <form  method="POST">
            <input type="text" name="id" placeholder="ENTER ID" />
            <input type="submit" name="search" value="Search By ID">   

        </form> -->
        <table>
            <tr>
                <th>STUDENT ID</th>
                <th>DATE</th>
                <th>STUDENT NAME</th>
                <th>DISEASE</th>
                <th>PRESCRIBED MEDICINE</th>
            </tr><br>
            <?php
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,'medco_cosultancy');

            //if(isset($_POST['search']))
            //{
                $id = $_SESSION['id'];

                $query = "SELECT * FROM details WHERE id = '$id'";
                $query_run = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                       <td> <?php echo $row['id']; ?> </td>
                       <td> <?php echo $row['Student Name']; ?> </td>
                       <td> <?php echo $row['date']; ?> </td>
                       <td> <?php echo $row['disease']; ?> </td>
                       <td> <?php echo $row['PRESCRIBED MEDICINE']; ?> </td>
 
                    </tr>
                    <?php
                }
            //}
            ?>
        </table>    
        </div>    
    </center>
</body>
</html>