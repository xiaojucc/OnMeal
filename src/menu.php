<?php
require_once '_conn.php';
session_start();
$username=$_SESSION['username'];
$sql1="select * from restaurant where username = '$username' ";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_array($result1);
$restaurant=$row1['name'];
$sql="select * from food where restaurant = '$restaurant' ";
$result=mysql_query($sql,$conn);?>

<html>
<style>
body {background:#555555;}
#div1 {border-radius:20px;width:720px;margin:auto;text-align:center;background:white;padding:0px 10px;}
#div1 div{360px;margin:0px 80px;text-align:left;padding:40px 0px;}
#but_meal {
    width:18%;
    height:30px;
    background-color:#cc3333;
    border:1px solid #eee;
    border-radius:15px;
    cursor:pointer; 
    margin:5px 0px;
    line-height:0px;
}
button {
    width:50%;
    height:35px;
    background-color:#cc3333;
    border:1px solid #eee;
    border-radius:17.5px;
    cursor:pointer; 
    margin:10px 130px;
    line-height:0px;
}  
#div2 {text-align:center;} 
</style>

<body>
<div id="div1">
<div>
<?php 
    $flag=0;
    while ($row=mysql_fetch_array($result))
{
    $flag=1;
    echo "Name: ".$row['name']."<br>";
    echo "Price: ".$row['price']."<br>";
    echo "<img src=upload/food/".$username."/".$row['id'].".png heigh='100px' width='100px'>";
    echo "<br><button id='but_meal' onclick=\"window.location.href='modify_meal.php?name=".$row['name']."'\">MODIFY</button>";
    echo "<br><button id='but_meal' onclick=\"window.location.href='_delete_food.php?name=".$row['name']."'\">DELETE</button>";
    echo "<hr>";
}?>
<?php 
    if($flag==0)
        echo '<div id="div2"><h2> EMPTY MENU </h2><h4>PLEASE ADD SOMETHING</h4></div> ';
?>
<?php 
mysql_close($conn);
?>
<button onclick="window.location.href='add_meal.php'">ADD</button>
<button onclick="window.location.href='restaurant.php'">RETURN</button>
</div>
</div>
</body>