<?php
include "connection.php";
$id=$_GET['id'];
$sql="select * from regform where ID='$id'";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($rs);

// print_r($row)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="wrap">
        <form action="#" method="POST">
            <table>
                <tr>
                    <th colspan="2"><h1>Update_Form</h1></th>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="user" value="<?php echo $row['Name'] ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="email" value="<?php echo $row['Email']?>"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="text" name="pass" value="<?php echo $row['Password']?>"></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><input type="text" name="phone" value="<?php echo $row['Phone']?>"></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <select name="gen" >
                        <option value="not applicable">....</option>
                        <option value="male"
                        <?php 
                            if($row['Gender']=='male'){
                                echo "selected";
                            }
                        ?>
                        >male</option>
                        <option value="female"
                        <?php 
                            if($row['Gender']=='female'){
                                echo "selected";
                            }
                        ?>
                        >female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Dob</th>
                    <td><input type="date" name="dob" value="<?php echo $row['dob']?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="update" name="update">
                    </td>
                </tr>
            </table>
        </form>

    </div>
    
</body>
</html>

<?php
if(isset($_POST['update'])){
    $name=      $_POST['user'];
    $email=     $_POST['email'];
    $password=  $_POST['pass'];
    $phone=     $_POST['phone'];
    $gender=    $_POST['gen'];
    $date  =    $_POST['dob'];

    // $query ="INSERT INTO regform (Name,Email,Password,Phone,Gender,dob) VALUES('$name','$email','$password','$phone','$gender','$date')";
    $query="update regform set Name='$name',Email='$email',Password='$password',Phone='$phone',Gender='$gender',dob='$date' where ID='$id'";
    $data =mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Record updated Successfully')</script>";
        ?>
        <meta http-equiv = "refresh" content = "2; url =http://localhost:88/tdform/display.php" />
        <?php
    }else{
        //echo "failed";
    }
}

?>
