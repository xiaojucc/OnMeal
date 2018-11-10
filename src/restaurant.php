<?php
require_once 'conn.php';
session_start();
$username=$_SESSION['username'];
?>

<?php mysql_close($conn);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>Insert title here</title>
<style>
body {background:#555555;}
#banner {width:200px;height:50px;border-radius: 27px;background:#CC3333;line-height:50px;margin:20px 50px;}
#div1{width:400px;height:400px;background:#EEE;margin:auto;padding:20px 0px;border-radius: 20px;text-align:center;}
#div1 h2{color:black;font-size:2em;}
p {color:white;font-size:18px;}
button {
    width:60%;
    padding:10px;
    height:50px;
    background-color:#cc3333;
    border:1px solid #eee;
    border-radius:25px;
    cursor:pointer; 
    margin:10px 80px;
    line-height:0px;
}   
a:link { text-decoration: none;color: white} 
a:active { text-decoration:blink} 
a:hover { text-decoration:underline;color: grey;} 
a:visited { text-decoration: none;color: black;}
</style>
</head>
    <body>
    <div id="div1">
    <h2>welcome <?php echo $username?></h2>
      <button onclick="window.location.href='merchant_info.php" ><p>edit info</p></button>
      <button onclick="window.location.href='upload.php>'"><p>review menu</p></button>
      <button onclick="window.location.href='show_food.php'"><p>review order</p></button>
      <button onclick="window.location.href='home.php'"><p>log out</p></button>
    </div>
    </body>
</html>