<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data dispaly of database</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .wrap{
            width:90%;
            height:auto;
            padding:10px;
            margin:50px auto;
        }
        h1{
            width:100%;
            height:50px;
            background:black;
            color:#fff;
            text-align:center;
            padding:10px;
            border-radius:20px 20px 0px 0px;
        }
        .wrap table{
            width:100%;
            margin:10px 10px;
            
        }
        table th{
            background:blue;
            color:#fff;
            height:50px;
            font-size:30px;
            font-weight:900;
        }
        table td{
            text-align:center;
            border:1px solid black;
            font-size:20px;
        }
        table td button{
            background:green;
            width:100px;
            border-radius:10px;
        }
        table td a{
            /* background:green; */
            font-size:25px;
            color:#fff;
            width:300px;
            padding:1px;
            height:50px;

            border-radius:10px;
            text-decoration:none;
        }
    </style>
</head>
<body>
<div style="width:100%;height:100px;padding:10px;margin:50px auto; background:blue; justify-content:center; line-height:100px;">
<a  style="width:200px;padding:20px; border-radius:20px; background:red;color:white;" href="logout.php">Logout</a>
<a  style="width:200px;padding:20px; border-radius:20px; background:green;color:white;" href="index.php">Add Users</a>
</div>
    <div class="wrap">
        <h1>Crud operation</h1>
        <table  cellspacing="10">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Dob</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        <?php
        include "connection.php";
        session_start();
        $user=$_SESSION['user'];
        if($user==true){

        }else{
            header('location:login.php');
        }
        $query="SELECT * FROM regform";
        $data=mysqli_query($conn,$query);
        while($res=mysqli_fetch_array($data)){

        

  ?>

           
            <?php
            echo "<tr>
             <td>$res[ID]</td>
             <td>$res[Name]</td>
             <td>$res[Email]</td>
             <td>$res[Password]</td>
             <td>$res[Phone]</td>
             <td>$res[Gender]</td>
             <td>$res[dob]</td>
             <td><button type='button'><a href='update.php?id=$res[ID]'>Update</a></button></td>
            <td><button  style='background:red;color:black;'><a href='delete.php?id=$res[ID]' >Delete</a></button></td>

            </tr>";

            ?>
            
            
        <?php
        }
        ?>
        </table>
    </div>
    
</body>
</html>