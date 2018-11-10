<?php
header("content-type:text/html;charset=utf-8");
$conn=@mysql_connect("localhost","root","123456")or die("error");
@mysql_select_db("onmeal")or die("select error");
@mysql_set_charset("utf-8");
?>