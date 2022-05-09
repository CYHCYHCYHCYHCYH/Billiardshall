 <?php 
 include 'top.php';
 
?> 	

<div class="ny-main">
<div class="ny-left">

 <?php 
 include 'm_left.php';
 
?> 	


</div>
<div class="ny-right">
<div class="ny-zjhz">

<br><br><br>

<?Php 
$sql1 = "select * from dingdan where uname like '$yhm' ";
	$result1=@mysqli_query($conn,$sql1) or exit ("查询失败");
	$row1=mysqli_fetch_array($result1)

?>



 <style>
 
 td{ padding:5px;}
 
 </style>
 


    <table border=0 cellpadding="0" cellspacing="0" style="margin:0 auto; width:680px; border-collapse:collapse;" >
<?php
 if ($_GET['action']=='del'){

	$sql="delete from dingdan where id = ".$_GET['id'];
	$res=mysqli_query($conn,$sql);
  if($res){
	echo "<script type='text/javascript'>alert('Sucess');window.location.href='member_cart.php';</script>";
  }
  }
  
		
			
					$sql = "select * from dingdan where uname like '$yhm' ";
		echo '<tr style="line-height:50px;"> <td>Picture</td><td>Table</td> <td>Price</td> <td>Uname</td>  <td>Time</td><td>pay</td>  <td>Cancel</td></tr>';
		$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){
			 
	
			
						echo '
						
						<tr style=" border:1px solid #BBB; padding:10px; margin:10px 0;"> 
                       
           	
						 <td><img src="upload/'.$row['pic'].'" width=80px;height=60px;><td>'.$row['title'].'</td> </td>   <td> '.$row['price'].' </td>      <td>  '.$row['uname'].'  </td> <td>'.$row['time'].'   </td>
						    &nbsp;&nbsp;&nbsp;&nbsp;  <td><a href="upload/pay1.jpg">pay</a></td>
			      <td><a href="?action=del&id='.$row['id'].'">Cancel</a></td>
			               </tr>';
				}
				
			?>
            
 
            
             
 
</table>


</div>

</div>

<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	