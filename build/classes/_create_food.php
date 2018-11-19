<?php
require_once '_conn.php';
session_start();
$huser=$_SESSION['username'];
$sql="select * from restaurant where username=$huser";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_array($result);
$name=$_POST['name'];
$price=$_POST['price'];
$time=time();
$sql="insert into food (name,price,restaurant,id) values ('$name','$price','$huser','$time')";
$tmp_path=$_FILES['myfile']['tmp_name'];
$new_name=$time.".".pathinfo($_FILES['myfile']['name'])['extension'];
$user_path="upload/food/".$huser."/";
if(!file_exists($user_path))
    mkdir($user_path);
    $new_path=$user_path.$new_name;
    if(move_uploaded_file($tmp_path, $new_path)&&mysql_query($sql,$conn))
        echo "<script>alert('successful!');location.href='menu.php'</script>";
        mysql_close($conn);
?>