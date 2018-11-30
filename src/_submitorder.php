<?php
require_once '_conn.php';
session_start();
if(!empty($_POST)){
}
print_r($_SESSION);
$dn=$_SESSION['list'];
$user=$_SESSION['username'];
$restaurant=$_SESSION['merchantname'];
$name=$_SESSION['name'];
$sql1="select * from user where username = '$user' ";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_array($result1);
$address=$row1['address'];
$table_name=$restaurant."_".$user;
$sql_ini="insert ignore into order_index (restaurant, customer,order_table) value ('$restaurant','$user','$table_name')";
mysql_query($sql_ini,$conn);
$time=time();
$sql_table="create table if not exists ".$table_name."(
    user char(45),address char(50),dish char(45),number char(5),restaurant char(50),id char(10)
);";
mysql_query($sql_table,$conn);
for($i=0;$i<count($dn);$i++)
{
    if($dn[$i]!=0){
    $dish1=$name[$i];
    $number1=$dn[$i];
    $sql="insert into ".$table_name." (user,address,dish,number,restaurant,id) values ('$user','$address','$dish1','$number1','$restaurant','$time');";
    $verify=mysql_query($sql,$conn);
    }
}

// echo "<script>alert('successful');location.href='customer.php?username=$user'</script>";

unset($_SESSION['list']);
unset($_SESSION['restaurant']);
unset($_SESSION['name']);
unset($_SESSION['price']);
unset($_SESSION['merchantname']);
unset($_SESSION['customername']);
mysql_close($conn);
?>