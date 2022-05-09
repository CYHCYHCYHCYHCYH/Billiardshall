 <?php 
 include 'top.php';
 
?>
	

	
	
	
 <br>
	<div class="hzms">
	<h3>Table ball</h3>
	

 <?php


	 $sql="select * from product  order by id asc limit 0,8 ";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){
	
	$tname=$row['title'];

$sql1="select count(id) as zs from dingdan where title like '$tname'  ";
$result1=@mysqli_query($conn,$sql1) or exit ("查询失败");
$row1=mysqli_fetch_array($result1);

	?>

	<dl>
      <dd>Table: &nbsp; <?php echo $row['title'];?> &nbsp; State:&nbsp;<?php echo $row['lanmu'];?></dd>
    <dt><a href="kc_article.php?id=<?php echo $row['id'];?>"><img src="upload/<?php echo $row['pic'];?>"></a></dt><dd>MAX:&nbsp<?php echo $row['uname'];?> &nbsp; Current:&nbsp<?php echo $row1['zs'];?>&nbsp;</dd></dl>
	<?php
}
?>

	</div>
	


<div class="clear"></div>
</div>
<?php 
 include 'foot.php';
 
?>
