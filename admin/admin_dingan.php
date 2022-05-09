
<?php 
include 'top.php';
 	?>
<div class="ny-right">



     <div id="twjs">


<style type="text/css">
td {padding:10px;}
</style>

<style type="text/css">
td {font-size:14px;padding:10px;}
h3{ font-size:16px;}
</style>

  <h3>BOOKING MANAGE</h3>


<style type="text/css">
td {font-size:14px;padding:10px;}
h3{ font-size:16px;}
</style>

<br>



<table border=1px cellpadding="0" cellspacing="0" width="90%" >   

<tr><td>TABLE </td>  <td>PICTURE</td> <td>PRICE</td>   <td>USERNAME</td>  <td>TIME</td> <td>DELETE</td></tr>



 <?php
 if ($_GET['action']=='del'){

  $sql="delete from dingdan where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('删除成功');window.location.href='admin_dingan.php';</script>";
}
}

	 $sql="select * from dingdan  order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['title'];?></td><td><img src="../upload/<?php echo $row['pic'];?>" width="100"></td><td><?php echo $row['price'];?><td><?php echo $row['uname'];?></td><td><?php echo $row['time'];?></td><td><a href="?action=del&id=<?php echo $row[id];?>">DELETE</a></td></tr>
	<?php
}
?>
</table>
 


  
    </div>
    
    </div>

   </div>
     
 
    <hr/>
   
        
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">
    
</div>
</div>

<!--end-Footer-part-->

</body>
</html>
