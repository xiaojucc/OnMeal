<?php
session_start();
if(!empty($_POST)){
    $_SESSION['list']=$_POST['d'];
    $_SESSION['name']=$_POST['n'];
    $_SESSION['price']=$_POST['p'];
}
$dn=$_SESSION['list'];
$name=$_SESSION['name'];
$price=$_SESSION['price'];
$customername=$_SESSION['username'];
$merchantname=$_SESSION['merchantname'];
require_once '_conn.php';
$sql1="select * from restaurant where username = '$merchantname' ";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_array($result1);
print_r($_SESSION);
?>

<html>
<style>
body {background:#555555;}
#banner {width:100%;height:50px;border-radius: 27px;padding:0px 25px 3px 25px;background:#CC3333;line-height:50px;}
#banner p{color:white;font-weight:bold;font-family: Î¢ÈíÑÅºÚ,ËÎÌå,Arial,sans-serif;}
#div1{width:718px;height:560px;background:#EEE;margin:30px auto;padding:0px 40px;border-radius: 20px;}
#div2p {width:718px;height:178px;text-algin:center;float:left;margin:0px;}
#div2c1 {width:138px;height:138px;border:1px solid #EEE;float:left;margin:20px 0px ;border-radius: 20px;overflow:hidden;}
#div2c2 {width:400px;height:138px;border:1px solid #eee;float:left;margin:20px;line-height:90Px;text-align:center;}
#div3p {width:705px;border:1px solid #000;background:white; border-radius: 20px;float:left;}
#div3c {width:685px;height:40px;float:left;line-height:40px;padding:0px 10px;}
#div3c input{text-decoration:none;
	background:#2f435e;
	color:#f2f2f2;
	padding: 5px 17px 5px 17px;
	font-size:16px;
	font-family:Arial,Helvetica,Verdana,sans-serif;
	font-weight:bold;
	border-radius:3px;
	border:1px solid #fff;
	-webkit-transition:all linear 0.30s;
	-moz-transition:all linear 0.30s;
	transition:all linear 0.30s;cursor:pointer;
	float:right;
	margin:3px 0px 0px 0px;
	}
#div3c1 {width:705px;height:150px;float:left;line-height:80px;text-align:center;}
table {width:680px;height:40px; }
tr {align:left;valign:middle;}
td {width:100px;}
#div3c1 input{text-decoration:none;
	background:#2f435e;
	color:#f2f2f2;
	padding: 10px 30px 10px 30px;
	font-size:16px;
	font-family: sans-serif;
	font-weight:bold;
	border-radius:3px;
	border:1px solid #fff;
	-webkit-transition:all linear 0.30s;
	-moz-transition:all linear 0.30s;
	transition:all linear 0.30s;cursor:pointer;}
	a:link { text-decoration: none;color: white} 
¡¡¡¡ a:active { text-decoration:blink} 
¡¡¡¡ a:hover { text-decoration:underline;color: white;} 
¡¡¡¡ a:visited { text-decoration: none;color: green} 
table {width:680px;height:40px; }
tr {align:left;valign:middle;}
td {width:100px; }
</style>
<?php 
$flag=0;
for($i=0;$i<count($dn);$i++){
    if($dn[$i]!=0){
        $flag=1;
    }
}
if($flag==0){
    echo "<script type=\"text/javascript\"> alert(\"successful!\");
window.location.href=\"making_order.php?merchantname=".$merchantname."\"
</script>";
}
?>

<body>
<div id="banner"><p>welcome <?php echo $customername;?>  | <a href="home.php">log out</a></p> </div>
<div id="div1">
	<div id="div2p">
		<div id="div2c1"><?php echo "<img src=upload/merchant/".$merchantname."/".$row1['id'].".png>";?>
		</div>
		<div id="div2c2"><h3>MY ORDER</h3>
		</div>
	</div>
	<div id="div3p">
		<div id="div3c"><table><tr><td>FOOD</td><td>QUANTITY</td><td>PRICE</td><td>TOTAL PRICE</td><td></td></tr></table></div>
		<?php
		for($i=0;$i<count($dn);$i++){
        if($dn[$i]!=0){ ?>
    <div id="div3c"><table><tr><td><?php $tp[$i]=$dn[$i]*$price[$i];echo $name[$i]?></td><td><?php echo $dn[$i]?></td><td><?php echo $price[$i]?></td><td><?php echo $tp[$i]?></td>
    <td><input type="button" value="DELETE" onclick="window.location.href='_deleteorder.php?id=<?php echo$i ?>'"></td></tr></table></div>
    <?php }}?>
	<div id="div3c1"> TOTAL $:<?php $totalprice=0;foreach ($tp as $value){$totalprice=$totalprice+$value;};echo "$totalprice";?><br> 
	<input type="button" value="CONFIREM ORDER" onclick="window.location.href='_submitorder.php'"> </div>
</div>
</div>
</body>