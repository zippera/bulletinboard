<?php
$username = trim($_POST['username']);
$password = ($_POST['password']);
$errmsg = '';
 if (!empty($username)) {   // 用户填写了数据才执行数据库操作
 require_once "conn.php";
            $sql="select * from member where username='$username'";
            $result=mysql_query($sql);
            $num=mysql_num_rows($result); //得到记录的数量 
            if($num){ //如果用户存在，则检查密码是否正确
$rs=mysql_fetch_array($result);
if($rs["password"]!=md5($password)){
$errmsg = "密码不正确!";}
else{//用户名、密码都正确，注册SESSION变量，然后跳转到首页
$_SESSION["username"]=$username;
$_SESSION["groupID"]=$rs["groupID"];
$_SESSION["islocked"]=$rs["locked"];
$_SESSION["islogined"]="OK";
}} 
              else {
                $errmsg = "没有这个用户！";
            }
			}
?>
