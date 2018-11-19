<?php
require_once '_conn.php';
session_start();
$username=$_SESSION['username'];
$merchantname=$_GET['merchantname'];
$sql1="select * from restaurant where username = '$merchantname' ";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_array($result1);
$restaurant=$row1['name'];
?>
<html>
<style>
body {background:#555555;}
#banner {width:100%;height:50px;border-radius: 27px;padding:0px 25px 3px 25px;background:#CC3333;line-height:50px;}
#banner p{color:white;font-weight:bold;font-family: Arial,sans-serif;}
#div1{width:718px;height:560px;background:#EEE;margin:auto;padding:0px 40px;border-radius: 20px;}
p,h1 {color:black;}
#div2p {width:718px;height:178px;text-algin:center;float:left;margin:0px;}
#div2c1 {width:138px;height:138px;border:1px solid #555555;overflow: hidden;float:left;margin:20px 0px ;border-radius: 20px;}
#div2c2 {width:400px;height:138px;border:1px solid #555555;float:left;margin:20px;line-height:90Px;text-align:center;}
#div3p {width:705px;height:360px;background:white; border-radius: 20px;float:left;}
#div3c {width:141px;height:280px;float:left;text-align:center;}
#div3c1 {width:120px;height:140px;border:1px solid #eee;overflow: hidden;float:left;border-radius: 16px;margin:9px;}
#div3c p{color:red;}
#div4 { width:200px;height:40px;margin:300px auto;}
#div4 input{text-decoration:none;background:#2f435e;color:#f2f2f2;padding: 10px 30px 10px 30px;font-size:16px;font-family: Î¢ÈíÑÅºÚ,sans-serif;font-weight:bold;border-radius:3px;border:1px solid #fff;-webkit-transition:all linear 0.30s;-moz-transition:all linear 0.30s;transition:all linear 0.30s;cursor:pointer;}
a:link { text-decoration: none;color: white} 
a:active { text-decoration:blink} 
a:hover { text-decoration:underline;color: grey;} 
a:visited { text-decoration: none;color: black;}
</style>

<body>
<div id="banner"><p>welcome <?php echo $username;?> | <a href="home.php">log out</a></p> </div>
<div id="div1">
<div id="div2p">
<div id="div2c1"><?php echo "<img src=upload/merchant/".$merchantname."/".$row1['id'].".png>";?></div>
        <div id="div2c2"><h1><?php echo $restaurant;?></h1></div>
</div>
<form action="order.php" method="post">
<div id="div3p">
<?php 
$sql="select * from food where restaurant = '$merchantname' ";
$result=mysql_query($sql,$conn);
while ($row=mysql_fetch_array($result)){?>
<div id="div3c"><div id="div3c1"><?php echo "<img src=upload/food/".$merchantname."/".$row['id'].".png>";?></div>
    <h3><?php echo $row['name'];?></h3><p>$ <?php echo $row['price'];?><input type="hidden" name= "n[]" value="<?php echo $row['name'];?>">
    <input type="hidden" name= "p[]" value="<?php echo $row['price'];?>">
    </p>Amount: <select size = "1" name = "d[]"><?PHP for($i=0; $i<6; $i++) { ?>
	<option value = "<?PHP echo($i) ?>"> <?PHP echo($i) ?></option>
	<?PHP } ?>

</select>
</div><?php }?>
<div id="div4">
<input type="hidden" name="r" value="1">
<input type="submit" value="SUBMIT">
</div>
</div>
</form>
</div>
</body>