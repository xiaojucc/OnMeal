<?php
require_once '_conn.php';

if(!empty($_POST))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $sql="insert into user
             (username,password,address,phone)
             values
              ('$username','$password','$address','$phone')";
    if (mysql_query($sql,$conn)) echo "<script>alert('注册成功');location.href='customer_login.php'</script>";
    else echo "注册失败，错误：".mysql_error();
}
mysql_close($conn);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>Insert title here</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}

body{background:#555555;font-family: "微软雅黑", sans-serif;}
 
.login { 
    position: absolute;
    top: 40%;
    left: 50%;
    margin: -230px 0 0 -150px;
    width:300px;
}

.login h1 { font-size:3em;color:#eee; text-shadow: 0px 10px 8px #000; letter-spacing:2px;text-align:center;margin-bottom:20px; }
.login h3 {color:#eee;letter-spacing:2px; text-align:center;}

#input1 {
    padding:10px;
    width:100%;
    color:black;
    margin-bottom:10px;
    background-color:#eee;
    border: 1px solid #555555;
    border-radius:20px;
    letter-spacing:2px;
}

#input2 {
    width:49%;
    padding:10px;
    background-color:#CDC673;
    border:1px solid #555555;
    border-radius:20px;
    cursor:pointer; 
    margin:0px 78px;
}   
</style>
</head>
    <body>
    <?php
    header("content-type:text/html;charset=gb2312");
	?>
	<div class=login>
	<h1>注册</h1>
	<form action="customer_register.php" method="post">
	<input id="input1" placeholder="username" type="text" name="username"><br>
	<input id="input1" placeholder="password" type="password" name="password"><br>
	<input id="input1" placeholder="telephone" type="text" name="phone"><br>
	<input id="input1" placeholder="address" type="text" name="address"><br>
	<input id="input2" type="submit" value="submit">
	</form>
	</div>
    </body>
</html>