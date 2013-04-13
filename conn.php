<?php 
mysql_connect("localhost","root","");//以用户名密码连接到mysql 
mysql_select_db("liuyan");//选择liuyan数据库 
$SetCharacterSetSql = "SET NAMES 'utf8'";//将数据库编码设置为utf-8，以匹配网页文件编码
$Recordset1 = mysql_query($SetCharacterSetSql) or die(mysql_error());
?> 
