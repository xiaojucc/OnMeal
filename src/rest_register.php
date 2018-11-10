<?php
header("content-type:text/html;charset=gb2312");

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
    width:400px;
}
.login h1 { font-size:3em;color:#eee; text-shadow: 0px 10px 8px #000; letter-spacing:2px;text-align:center;margin-bottom:20px; }
.login div{width:400px;height:48px;line-height:37px;padding:4px;}
.login p {color:white;letter-spacing:2px;}
#input1 {
    padding:10px;
    width:70%;
    color:BLACK;
    margin-bottom:10px;
    background-color:#eee;
    border: 1px solid #555555;
    border-radius:20px;
    letter-spacing:2px;
    float:right;
}

#input2 {
    width:49%;
    padding:10px;
    background-color:#CDC673;
    border:1px solid #555555;
    border-radius:20px;
    cursor:pointer; 
    margin:20px 78px;
}   
</style>
</head>
    <body>
    <?php
    header("content-type:text/html;charset=utf-8");
	?>
	<div class="login">
	<h1>SIGN UP</h1>
	<form action="conn_rest_db.php" method="post" enctype="multipart/form-data">
	<div><p>ACCOUNT<input type="text" id="input1" name="username"></p></div>
	<div><p>PASSWORD<input type="password" id="input1" name="password"></p></div>
	<div><p>NAME<input type="text" id="input1" name="name"></p></div>
	<div><p>ADDRESS<input type="text" id="input1" name="address"></p></div>
	<div><p>LOGO<input type="file" id="input1" name="myfile"></p></div>
	<div><p>DESCRIPTION<textarea rows="20" id="input1" cols="30" name="introduction"></textarea></p></div><br>
	<br><input type="submit" id="input2"  value="SUBMIT">
	</form>
	</div>
    </body>
</html>