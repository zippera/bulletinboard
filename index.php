<?php
require_once "nav.php";
?>
<div class="container container-body">
<div class="row">
<div class="span12 columns">

<div>
<table class="table table-bordered table-hover" >
        <thead>
          <tr>
            <th width="600">留言</th>
            <th width="100">作者</th>          
            <th width="200">时间</th>
          </tr>
        </thead>
        <tbody>
		
		<?php
include("conn.php");
$result=mysql_query("SELECT * from message");
$total=mysql_num_rows($result);
if($total>0){
while($row=mysql_fetch_array($result)){
$FID=$row["id"];
$author=$row["author"];
$content=$row["content"]; 
$ftime=$row["ftime"];

?>
 <tr>
            <td><?php echo $content ;?></td>
            <td><?php echo $author ;?></td>
            <td><?php echo $ftime ;?></td>
                  
          </tr>
		<?php
		  }?>
		  </tbody>
      </table>
 
	  </div><hr>
		  
		  <?php
		}
else
{echo"<br>还没有留言";
} 
?>
    

</div>   
</div>	
<!-- 以下是发布区 -->
<?php
$F=$_GET["F"];
$U=$_GET["U"];
$content=$_POST["content"];
if($content!=""){
$author=$U;
session_start();
$author=$_SESSION['username'];
$sql="insert into message (author,ftime,content) values ('$author',now(),'$content')";
mysql_query($sql); 
echo "<script>location='index.php?F=".$F."'</script>"; }
if(isset($_SESSION['username'])){
?>

<hr>
<div class="well" style="background-color:#fff">
<h2 style="color:#46a546">发表新留言</h2><hr>
<form  method="post" action="">
        <fieldset>

 <div class="control-group">
            <label class="control-label" for="textarea">内容：</label>
            <div class="controls">
              <textarea name="content" class="input-largest" id="textarea" rows="3"></textarea>
            </div>
          </div>
          <div >
            <button type="submit" class="btn">提交</button>
            <button class="btn">重置</button>
          </div>
		  </fieldset>
		  </form>
</div>







<?php
}
else if( !isset($_SESSION['username']))
echo "您尚未登录，登录后可发表留言！";
require_once "footer.php";
 ?>
</div>
