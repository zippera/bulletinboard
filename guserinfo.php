<?php require_once "nav.php";
      require_once "conn.php";
      $name=$_GET[n];
	  
	  $result=mysql_query("select * from member where username='$name'");
	  $rs=mysql_fetch_array($result);
?>



<div class="container container-body"	>
  <div class="row show-grid">
     <div class="span12 columns">
	<header>
    <h2>个人基本信息</h2>
	<hr>
    </header>
	
	<div class="row show-grid">
	  
	  <div  class="span12 columns">
	   <p><dt>基本信息</dt></p><hr>
	     <p>&nbsp&nbsp&nbsp&nbsp真实姓名：<?php echo $rs['real_name'];?></p><br>
		 <p>&nbsp&nbsp&nbsp&nbsp性别：<?php echo $rs['sex'];?></p><br>
	  <p><dt>联系方式</dt></p><hr>
		   <p>&nbsp&nbsp&nbsp&nbspemail：<?php echo $rs['email'];?></p><br>
		 <p>&nbsp&nbsp&nbsp&nbspQQ号：<?php echo $rs['qq'];?></p><br>
		 <p>&nbsp&nbsp&nbsp&nbsp手机号：<?php echo $rs['phone'];?></p><br>
	  <p><dt>其他信息</dt></p><hr>
	     <p>&nbsp&nbsp&nbsp&nbsp家乡：<?php echo $rs['home'];?></p><br>
		 <p>&nbsp&nbsp&nbsp&nbsp注册时间：<?php echo $rs['jointime'];?></p><br>
		
		 
	  </div>
	 
	 
	 
	 
	 </div>
  </div>
</div>  
<?php require_once "footer.php";
?>