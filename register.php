
<?php

require_once "nav.php";
require_once "conn.php";


if (!empty($_POST["username"]))
{
$username=$_POST["username"]; 
$password=md5(trim($_POST["pwd"]));
$email=trim($_POST["email"]);
$real_name=$_POST["realname"]; 
$home="";$qq="";$phone="";
$sql="select count(*) from member where username='$username'";
$result=mysql_query($sql);
$num=mysql_result($result,0);
if($num){ //当用户名已经被注册时
echo "<script>alert('该用户名已经被注册！');return false;</script>";
}
else{
$sql="INSERT INTO `member`(  `username`, `real_name`, `password`, `email`,  `home`,`jointime`, `qq`, `phone`)
 VALUES ('$username','$real_name','$password','$email','$home',now(),'$qq','$phone')";
mysql_query($sql);

 
$_SESSION["username"]=$username;
echo "<script>alert('注册成功！');location.href='index.php';</script>";
}
}?>

<html>
<script language='javascript'>

function doCheckr()

{

    var username   = document.frmRegister.username.value;

    var pwd         = document.frmRegister.pwd.value;

    var repeat_pwd = document.frmRegister.repeat_pwd.value;

    var name        = document.frmRegister.realname.value;
	
    var email       = document.frmRegister.email.value;

   

    if (username == '') {

        alert('请输入用户名!'); return false;

    }

    if (pwd == '') {

        alert('请输入密码!'); return false;

    }

    if (name == '') {

        alert('请输入姓名!'); return false;

    }

    if (email == '') {

        alert('请输入Email!'); return false;

    }

    if (repeat_pwd != pwd) {

        alert('重复密码与密码不一致!'); return false;

    }

    if (pwd.length < 6 || pwd.length > 30) {

        alert('密码必须在6到30个字符之间!'); return false;

    }
	
	 // 使用正则表达式验证Email的格式

    var pattern = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    if (! pattern.test(email) ) {

        alert('Email填写不正确!'); return false;

    }
//用来匹配合法Email的正则表达式为：/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/。在表达式的开始使用“^”并在表达式的末尾使用“$”，使得被测试的字符串必须完全匹配该模式test()方法才返回true。“\w”匹配任何单词字符（包括下划线），“[-+.]\w+”匹配以字符“-”、“+”及“.”之一开始后跟一个以上的单词字符（包括下划线），“([-+.]\w+)*”表示匹配“[-+.]\w+”这个模式的串可以出现一次或多次。 

    return true;

}
</script>


</html>






<body>
<div class="container container-body">

      <div class="row">
	   <div class="span12 columns">
	   <h2> 注册资料填写</h2><p></p>
	   <form name="frmRegister" class="form-horizontal" method="post" action="" onsubmit= "return doCheckr();">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01"> <strong>用户名：</label>
            <div class="controls" name="username">
              <input name="username" type="text" class="input-xlarge" id="input01"> 
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input02"> <strong>注册邮箱：</label>
            <div class="controls" name="email">
              <input name="email" type="text" class="input-xlarge" id="input02">
              
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input03"> <strong>密码：</label>
            <div class="controls"name="password">
              <input name="pwd"type="password" class="input-xlarge" id="input03">
             
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input04"> <strong>确认密码：</label>
            <div class="controls"name="password2">
              <input name="repeat_pwd" type="password" class="input-xlarge" id="input04">
              
            </div>
          </div>
		  <div class="control-group" name="realname">
            <label class="control-label" for="input05"> <strong>真实姓名：</label>
            <div class="controls">
              <input name="realname" type="text" class="input-xlarge" id="input05">
            </div>
          </div>

          <div class="form-actions">
          <input class="btn" type="submit" value="提 交">&nbsp;
           <input class="btn" type="reset" name="reset" value="重置">
          </div>
        </fieldset>
      </form>
	   
	  </div>   
	   
</div><?php require_once "footer.php"?>
</div>
</body>











