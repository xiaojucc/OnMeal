<?php
require_once 'conn.php';

if(!empty($_POST))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $name=$_POST['name'];
    $time=time();
    $introduction=$_POST['introduction'];
    $sql="insert into restaurant
             (username,password,name,address,introduction,id)
             values
              ('$username','$password','$name','$address','$introduction','$time')";
    
    $tmp_path=$_FILES['myfile']['tmp_name'];
    $new_name=$time.".".pathinfo($_FILES['myfile']['name'])['extension'];
    
    //为每个用户动态创建文件夹
    $user_path="upload/merchant/".$username."/";
    if(!file_exists($user_path))
        mkdir($user_path);
        $new_path=$user_path.$new_name;
        if(move_uploaded_file($tmp_path, $new_path)&&mysql_query($sql,$conn))
            echo "<script>alert('succeeded!');location.href='rest_login.php'</script>";         
}
mysql_close($conn);
?>