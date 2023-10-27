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
</head>
<body>
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
