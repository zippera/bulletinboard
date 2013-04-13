  <head>
    <meta charset="utf-8">
    <title>欢迎来到留言板！</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet">	
   	<link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <script src="assets/js/docheck.js"></script>
	<script src="assets/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("li#errmsg").click(function(){
  $(this).hide();
  });
});
</script>
	
  </head>
  <body>
  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
	  
        <div class="container">
		 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
         
          <div class="nav-collapse collapse"><span class="nav-collapse"><span class="caption"><span class="caption"></span></span></span>
            <strong><ul class="nav font-medium">
			<li class="" >
                <a id="index" href="index.php">首页</a>
              </li>
			  <li class="divider-vertical"></li> 
              <li class="" >
                <a >欢迎来到我们的留言板，请先登录后留言，文明发言，留言板有你更精彩！</a>
              </li>
	<li class="divider-vertical"></li>   
	
                	<?php
error_reporting(0); session_start(); include_once "login.php";
require_once "conn.php";
           $name=$_SESSION["username"];
 if(!isset($_SESSION["username"])||!isset($_SESSION["islogined"])){
 ?>
  <li class=""><form class="form-inline" style="margin-bottom:auto; margin-top:auto" name="form" method="post" action="#" onsubmit= "return doCheck();">
 <input type="text"  name="username" class="input-small input-high input-nav " placeholder="Username" >
  <input type="password" name="password" class="input-small input-high input-nav" placeholder="Password">
  <button type="submit" class="btn">登录</button>
</form>  </li> 
<li class=""> <button type="submit" class="btn" ><a href="register.php" >注册</a></button></li>
<li id="errmsg" ><a style="color:#b94a48"><?php echo $errmsg; ?>		  
<?php
}else{
echo "<li><a href=\"guserinfo.php?n=".$_SESSION["username"]."\"><font color=green>".$_SESSION["username"]."</font></a></li>";
echo "<li ><a href=\"user_info.php?n=".$_SESSION["username"]."\">设置</a></li> 
<li ><a href=\"loginout.php\">注销</a></li>";

}
?>
            <li class="">&nbsp </li>  
			
            </ul></strong>
          </div>
		 
        </div> 
</a></li>	
		
		
      </div>
    </div>


