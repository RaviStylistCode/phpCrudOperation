<?php
include "connection.php";
$id=$_GET['id'];
$query="delete from regform where ID='$id'";
$data=mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Record deleted')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url =http://localhost:88/tdform/display.php" />
    <?php
}
?>