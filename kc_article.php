 <?php 
 include 'top.php';
 
?> 	

 <br>
	<div class="hzms">


<?php 



if ($_GET['action']=='gwc'){
	if (empty($_SESSION["uname"])){
			echo "<script type='text/javascript'>alert('PLEASE LOGIN FIRST');window.location.href='user_login.php';</script>";
			exit;
		}
		
		if($_POST['state']=='no'){
			echo "<script>alert('sorry the table state is no');history.go(-1);location.reload();</script>";
					exit;	
			}
		
		if($_POST['zs']>$_POST['zds'] or $_POST['zs']==$_POST['zds']){
					echo "<script>alert('The reservation is full, No more reservation');history.go(-1);location.reload();</script>";
					exit;	
			}
		else{
			$sql1 ="insert into dingdan(title,uname,pic,price,uid,pid) values ('{$_POST['title']}','{$_POST['uname']}','{$_POST['pic']}','{$_POST['price']}','{$_POST['uid']}','{$_POST['pid']}')";

		$result=@mysqli_query($conn,$sql1) or die (mysqli_error());
		if($result){
		echo "<script>alert('BOOK SUCESS');window.location.href='member_cart.php';</script>";
			}

			}
		
 
	
}







	 


if(isset($_GET['id'])){


	$sql= "select * from product where id = ".$_GET['id'];
	$check=@mysqli_query($conn,$sql) or exit (mysqli_error());
	$_rows=mysqli_fetch_array($check);
	$title=$_rows['title'];
	
$sql1="select count(id) as zs from dingdan where title like '$title'  ";
$result1=@mysqli_query($conn,$sql1) or exit ("查询失败");
$row1=mysqli_fetch_array($result1);
}


?>



<div id="jtxq">
        <dl>
          <dt><img src="upload/<?php echo $_rows['pic'];?>"></dt>
          <dd>
            <h4> Table Number<?php echo $_rows['title'];?></h4>
            <font>Max People：<?php echo $_rows['uname'];?></font>
            <font>CURRENT  BOOKING People：<?php echo $row1['zs'];?></font>
      
             <font>Price：<?php echo $_rows['price'];?></font>
              <font>Using State：<?php echo $_rows['lanmu'];?></font>
            <font>Content：<?php echo $_rows['content'];?></font>
       
       
         
               <form action="?action=gwc" method="post" enctype="multipart/form-data">
             <input type="hidden" name="title" value="<?php echo $_rows['title'];?>">
                          <input type="hidden" name="uid" value="<?php echo $uid;?>">
                                   <input type="hidden" name="pid" value="<?php echo $_rows['id'];?>">
			 <input type="hidden" name="uname" value="<?php echo $yhm?>"> 
              <input type="hidden" name="zds" value="<?php echo $_rows['uname'];?>"> 
             			 <input type="hidden" name="zs" value="<?php echo $row1['zs'];?>"> 
			  <input type="hidden" name="pic" value="<?php echo $_rows['pic'];?>">
                <input type="hidden" name="state" value="<?php echo $_rows['lanmu'];?>">
              	  <input type="hidden" name="price" value="<?php echo $_rows['price'];?>">
        
            
                 <br>     <br>     <br>
       
       <input type="submit" name="submit" value="BOOK" class="wbtj" />
           </form>  
      
            
            
       
          
          </dd>
        
        </dl>
        
  



</div>

</div>

</div>
<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	