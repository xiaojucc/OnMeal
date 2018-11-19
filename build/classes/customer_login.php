 <?php
 require_once '_conn.php';
if(!empty($_POST))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$username'";
    $result=mysql_query($sql,$conn);
    $row=mysql_fetch_array($result);
    if($row['password']==$password && $password!='')
    {
        session_start();
        $_SESSION['username']=$username;
        echo "<script>location.href='customer.php'</script>";
        
    }
    else {
        echo "<script>alert('error!');</script>";
    }
    mysql_close($conn);
}
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
    top: 50%;
    left: 50%;
    margin: -150px 0 0 -150px;
    width:300px;
    height:300px;
}

.login h1 { font-size:3em;color:#eee; text-shadow: 0px 10px 8px #000; letter-spacing:2px;text-align:center;margin-bottom:20px; }

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
}   
</style>
</head>
    <body>
    <div class="login">
    <h1>SIGN IN</h1>
	<form action="customer_login.php" method="post">
	<input id="input1" type="text" placeholder="USERNAME" name="username"><br>
	<input id="input1" type="password" placeholder="PASSWORD" name="password"><br>
	<input id="input2" type="submit" value="SIGN IN">
	<input id="input2" type="button" value="SIGN UP" onclick="window.location.href='customer_register.php'">
	</form>
	</div>
    </body>
</html>