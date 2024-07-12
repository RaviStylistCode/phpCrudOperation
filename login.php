<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <style>
        body{
            background: #000;
            background: #083058;
            min-height: 100vh;
        }
    .wrap{
        width:400px;
        height: 410px;
        /* border: 5px solid red; */
        /* background: whitesmoke; */
        margin: 100px auto;
        border-radius: 20px;
    }
    .child
    {
        width: 100%;
        height: 100%;
        background:#03182c;
        border-radius: 20px;
    }
    .child:hover{
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
                  
    }
   
    input{
        width: 350px;
        height: 50px;
        margin-top: 10px;
        margin-left: 25px;
       color:  #00ffff;
        background: transparent;
       border: none;
       outline: none;
        /* border: solid blue; */
        outline: none;
        font-size: 20px;
        border-bottom: 3px solid green;
       
        
    }
    input:focus{
        border-bottom: 3px solid #1affff;
        
    }
    input:focus~placeholder{
        margin-top: -5px;
    }
   
    .button{
        width: 190px;
        height: 50px;
        border-radius: 20px;
        background: #1ad1ff;
        color: #000;
        margin: 50px 100px;
        border: none;
        font-size: 15px;
        cursor: pointer;
        padding: 5px 10px;
    }
    .button:hover{
        box-shadow: 0px 0px 15px  #1ad1ff,
                    0px 0px 20px  #1ad1ff,
                    0px 0px 25px  #1ad1ff,
                    0px 0px 40px  #1ad1ff;

    }
    h3{
        text-align: center;
        font-size: 50px;
        padding-top: 30px;
        color: #1affff;
        font-weight: 900;
        font-family: Arial, Helvetica, sans-serif;
    }
   
</style>
</head>
<body>
    <div class="wrap">
        <div class="child">
            <form  method="POST" autocomplete="false">
                <h3>Login </h3>
                <input type="text" placeholder="username" name="user" id="nam">
                <input type="text" placeholder="password" name="pass" id="pwd">
               <input type="submit" class="button" name="login">
            </form>
        </div>
    </div>
   
    
</body>
</html>

<?php

if(isset($_POST['login'])){
    $email=$_POST['user'];
    $password=$_POST['pass'];

    $query="select * from regform where Email='$email' && Password='$password'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    echo $total;

    if($total == 1){
        $_SESSION['user']=$email;
        header('location:display.php');
    }else{
        echo "login failed";
    }
}

?>