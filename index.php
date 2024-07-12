<?php
include "connection.php";
session_start();
echo "  welcome  ".$_SESSION['user'];

$user=$_SESSION['user'];
if($user){

}else{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profesional form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="wrap">
        <form action="#" method="POST">
            <table>
                <tr>
                    <th colspan="2"><h1>Registration</h1></th>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="pass"></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <select name="gen" >
                        <option value="not applicable">....</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Dob</th>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="submit" name="register">
                    </td>
                </tr>
            </table>
        </form>

    </div>
    
</body>
</html>
<?php
if(isset($_POST['register'])){
    $name=      $_POST['user'];
    $email=     $_POST['email'];
    $password=  $_POST['pass'];
    $phone=     $_POST['phone'];
    $gender=    $_POST['gen'];
    $date  =    $_POST['dob'];

    $query ="INSERT INTO regform (Name,Email,Password,Phone,Gender,dob) VALUES('$name','$email','$password','$phone','$gender','$date')";
    $data =mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Data is inserted')</script>";
        ?>
        <meta http-equiv = "refresh" content = "2; url =http://localhost:88/tdform/display.php" />
        <?php
    }else{
        //echo "failed";
    }
}

?>