
<?php
error_reporting(0);
require_once "nav.php";
?>
<script type="text/javascript">
$(document).ready(function(){
  $("#user").css("color","#ffffff");
});
</script>
<?php
require_once "conn.php";
//这里是更新数据库的数据
$name=$_GET[n];//更新信息时会应用到的，确定改哪一行
$result=mysql_query("select * from member where username='$name'") ;
$rs=mysql_fetch_array($result);
if (!empty($_POST["username"]))
{
$username=$_POST["username"]; 
$sex=$_POST["radio"];
$email=trim($_POST["email"]);
$real_name=$_POST["real_name"]; //默认真实姓名，登陆后自己修改吧
$qq=$_POST["qq"];
$phone=$_POST["phone"];
$home=$_POST["home"];


	 
$sql="update member set username='$username',sex='$sex',real_name='$real_name',email='$email' ,qq='$qq',phone='$phone',home='$home' where username='$name'";//用户名，真实姓名，email，球球号，手机号
mysql_query($sql);
echo "<script>alert('基本资料修改成功！！');  location.replace(location.href) ;return true;</script>"; 
 
$_SESSION["username"]=$username;
}

if(!empty($_POST["password"]))//密码不空则进入的是密码页
   {
       $password1=md5(trim($_POST["password1"]));
       if(md5(trim($_POST["password"]))==$rs["password"])
	   {
	   $sql="update member set password='$password1' where username='$name'";//用户密码改变
       mysql_query($sql);
	   echo "<script>alert('密码修改成功！！');return true;</script>"; 
	   }
	   else 
	   {
	  echo "<script>alert('原密码输入错误，请重新输入');return false;</script>"; 
	   }
	 }
?>

<?php

?>

<div class="container container-body">
<div class="row">
<div class="span12 columns">
<header>

    <h2>个 人 基 本 信 息</a></h2><hr>
  </header>
<html>
  <head>

	<script language='javascript'>

<!--

// 验证表单数据有效性的函数

// 当函数返回true时，说明验证成功，表单数据正常提交

// 当函数返回false时，说明验证失败，表单数据被终止提交

function doCheck()//这里只检查新密码两次是否相同，原密码数据提交时检测

{
    var pwd= document.pwinfo.password.value;
	var pwd1= document.pwinfo.password1.value;

    var pwd2= document.pwinfo.repeat_password.value; 

    if(pwd == ""){
		alert("原密码不得为空！");
		return false;
		}
    if (pwd1 != pwd2) {

        alert('两次密码不一致，请重新输入！'); return false;
		}
	if (pwd1.length < 6 || pwd1.length > 30) {

        alert('新密码必须在6到30个字符之间!'); return false;

    }
	
return true;
}

-->


</script>
	
  </head>
  </html>
  
   <ul id="myTab" class="nav nav-tabs">
     <li class="active"><a href="#base" data-toggle="tab">基本资料修改</a></li>
          <li><a href="#pw" data-toggle="tab">修 改 密 码</a></li>
            </li>
     </ul>
  
    <div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="base">
 <form   enctype="multipart/form-data" class="form-horizontal" name="baseinfo" method="post" action=""  >
        <fieldset>
          <div class="control-group">
            <label class="control-label"><strong>用 户 名:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="username" id="username" class="span2" type="text"  value="<?php echo $rs['username']?>" onclick="value=document.getElementById('username').value" >
            </div>
          </div>
	
		  
		   <div class="control-group">
            <label class="control-label"><strong>性 别:</strong></label>
            <div class="controls">
              <label class="radio">
			
                <input type="radio" name="radio" id="optionsRadios1" value="男"   <?php if($rs['sex']=="男") echo "checked"?>>男
              </label>
              <label class="radio">
                <input type="radio" name="radio" id="optionsRadios2" value="女" <?php if($rs['sex']=="女") echo "checked"?>>女
              </label>
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label"><strong>真实姓名:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="real_name"class="span2" type="text" id="real_name" value="<?php echo $rs['real_name']?>" onclick="value=document.getElementById('real_name').value">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label"><strong>QQ 号:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="qq" id="qq"class="span2" type="text"  value="<?php echo $rs['qq']?>" onclick="value=document.getElementById('qq').value">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label"><strong>email</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="email" id="email"class="span2" type="text"  value="<?php echo $rs['email']?>" onclick="value=document.getElementById('email').value">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label"><strong>手机号:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="phone"id="phone"class="span2" type="text"  value="<?php echo $rs['phone']?>" onclick="value=document.getElementById('phone').value">
            </div>
          </div>
		  
		  <div class="control-group">
            <label class="control-label"><strong>家 乡:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="home"id="home"class="span2" type="text"  value="<?php echo $rs['home']?>" onclick="value=document.getElementById('home').value">
            </div>
          </div>
		 
		  
		 <div class="form-actions">
           <input class="btn" type="submit" value="提 交">&nbsp;
           <input class="btn" type="reset" name="reset" value="重置">
          </div>
		  </fieldset>
   </form>
   </div>

   
  <div class="tab-pane fade " id="pw">
   <form class="form-horizontal" name="pwinfo" method="post" action="" onsubmit="return doCheck();" >
        <fieldset><br><br>
		  <div class="control-group">
            <label class="control-label"><strong>原 密 码:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="password" class="span2" type="password"  >
            </div>
          </div><br><br>
		  
		  <div class="control-group">
            <label class="control-label"><strong>新 密 码:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="password1" class="span2" type="password"  >
            </div>
          </div><br><br>
		  <div class="control-group">
            <label class="control-label"><strong>确 认 密 码:</strong> </label>
            <div class="controls docs-input-sizes">
              <input name="repeat_password" class="span2" type="password"  >
            </div>
          </div>
		 <br><br><br><br>
		 
		 <div class="form-actions">
           <input class="btn" type="submit" value="提 交">&nbsp;
           <input class="btn" type="reset" name="reset" value="重置">
          </div>
	
		  
		 </fieldset> 
	</form>
 
   </div>
   
   </div>
</div>
</div><?php require_once "footer.php"?>
</div>



