<?php
session_start();
$id=$_GET['id'];
$_SESSION['list'][$id]=0;
?>
<?php header("content-type:text/html;charset=gb2312");?>
<script type="text/javascript">
alert("successful!");	
window.location.href="order.php";
</script>