<?php
require_once '_conn.php';
session_start();
$huser=$_SESSION['username'];
$name=$_GET['name'];
$sql="delete from food where name='$name'";
if(mysql_query($sql,$conn))
{
    echo "<script>alert('successful!');location.href='menu.php'</script>";
}
else
    echo "error!".mysql_error();
    mysql_close($conn);
?>