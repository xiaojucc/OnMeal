<?php
require_once '_conn.php';
session_start();
$username=$_SESSION['username'];
$sql="select * from food where restaurant = '$username' ";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_array($result);
$name=$_GET['name'];
$price=$row['price'];
mysql_close($conn);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>Insert title here</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}

body{background:#555555;font-family: sans-serif;}
 
.login { 
    position: absolute;
    top: 40%;
    left: 50%;
    margin: -230px 0 0 -150px;
    width:400px;
}

.login div{width:400px;height:48px;line-height:37px;padding:4px;}
.login p {color:white;letter-spacing:2px;}
.login h3 {color:#eee;letter-spacing:2px; text-align:center;}
#input1 {
    padding:10px;
    width:70%;
    color:black;
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
    margin:0px 78px;
}   
</style>
</head>
    <body>
    <div class="login">
	<form action="_modify_food.php" method="post">
	<input type="text" id="input1" name="fname" style="display:none;" value="<?php echo $name?>">
	<div><p>Name:<input type="text" id="input1" name="name"  value="<?php echo $name?>"></p></div>
	<div><p>Price:$<input type="text" id="input1" name="price"  value="<?php echo $price?>"></p></div>
	<input type="submit" id="input2" value="SUBMIT">
	
	</form>
	</div>
    </body>
</html>