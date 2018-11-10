<?php
error_reporting(0);
require_once 'conn.php';
session_start();
$username=$_SESSION['username'];
?>

<html>
<style>
body {background:#555555;}
#banner {width:100%;height:50px;border-radius: 27px;padding:0px 25px 3px 25px;background:#CC3333;line-height:50px;}
#banner p{color:white;font-weight:bold;font-family: Î¢ÈíÑÅºÚ,ËÎÌå,Arial,sans-serif;}
#div1{width:758px;height:450px;background:#EEE;margin:30px auto;padding:0px 20px;border-radius: 20px;}
#div1 h2,p{color:white;}
#div2 div{width:138px;height:138px;border:1px solid #555555;float:left;margin:20px;border-radius: 20px;cursor:pointer;overflow: hidden;}
#div3 div{width:676px;height:138px;border:1px solid #555555;background:white;display:none;margin:20px;float:left;text-algin:left;border-radius: 20px;text-align:left;padding:20px;}
a:link { text-decoration: none;color: white} 
a:active { text-decoration:blink} 
a:hover { text-decoration:underline;color: grey;} 
a:visited { text-decoration: none;color: black;}
</style>
<script>
window.onload=function(){
  var oDiv1=document.getElementById('div1');
  var oDiv2=document.getElementById('div2');
  var aDiv2=oDiv2.getElementsByTagName('div');
  var oDiv3=document.getElementById('div3');
  var aDiv3=oDiv3.getElementsByTagName('div');
   for(var i=0;i<aDiv2.length;i++){
     aDiv2[i].aa=i;
     aDiv2[i].onmouseover=function(){
        for(i=0;i<aDiv2.length;i++) {aDiv3[i].style.display='none';}
        aDiv3[this.aa].style.display='block';

     }
  } 
}
</script>
<body>
<div id="banner"><p>welcome <?php echo $username?> | <a href="home.php">log out</a></p> </div>
<div id="div1">
<div id="div2">
<?php 
$sql="select * from restaurant ";
$result=mysql_query($sql,$conn);
while ($row=mysql_fetch_array($result))
{?>
<div>
<?php echo "<a href=restaurant.php?merchantname=".$row['username']."&&customername=".$username.
           "><img src=upload/merchant/".$row['username']."/".$row['id'].".png></a>";?>
</div>
<?php
}
?>
</div>



<div id="div3">
<?php
$sql="select * from restaurant";
$result=mysql_query($sql,$conn);
while($row=mysql_fetch_array($result)){?>
<div>
<?php
echo "Name:".$row['name']."<br>";
echo "Address:".$row['address']."<br>";
echo "Introduction:".$row['introduction']."<br>";
?>
</div>
<?php }?>
</div>
</div>
</body>
</html>