<?php
require_once '_conn.php';
session_start();
$huser=$_SESSION['username'];
$fname=$_POST['fname'];
$name=$_POST['name'];
$price=$_POST['price'];
$sql="update food set name='$name',price='$price' where name='$fname'";
if(mysql_query($sql,$conn))
{
    echo "<script>alert('successful!');location.href='menu.php'</script>";
}
else
    echo "error!".mysql_error();
    mysql_close($conn);
?>