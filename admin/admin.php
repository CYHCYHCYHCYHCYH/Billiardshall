
<?php 

include 'top.php';
	?>


<div class="ny-right">



     <div id="twjs">


<style type="text/css">
td img { width:70px; height:70px;}
</style>

  <h3>MY ACCOUNT</h3>
  <br>
  
 
 
  <table border=1px cellpadding="0" cellspacing="0" width="870" style="margin:0 auto;">

<tr><td>USERMANAGE</td>  <td>PASSWORD</td>  <td>TEL</td>  <td>EMAIL</td>    <td>DELETE</td></tr>


 <?php
 if ($_GET['action']=='del'){

  $sql="delete from users where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('SUCCESS');window.location.href='admin.php';</script>";
}
}

	 $sql="select * from users ";
$result=@mysqli_query($conn,$sql) or exit ("浏览留言失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['yhm'];?></td><td><?php echo $row['mm'];?></td><td><?php echo $row['tel'];?></td><td><?php echo $row['email'];?></td><td><a href="?action=del&id=<?php echo $row['id'];?>">DELETE</a></td></tr>
	<?php
}
?>


</table>


    
  </div>
</div>

<div class="clear"></div>
</div>


<?php 
include 'foot.php';

?>
