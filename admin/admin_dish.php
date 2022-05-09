
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

  <h3>Table Manage</h3>


<style type="text/css">
td {font-size:14px;padding:10px;}
h3{ font-size:16px;}
</style>

<br>
<table border=1px cellpadding="0" cellspacing="0" width="95%" style="margin:0 auto;">   

<tr><td>Table Number</td>   <td>Picture</td> <td>Max People</td>  <td>Content</td><td>Price</td><td> USEING STATE</td><td>Modify</td> <td>Delete</td></tr>



 <?php
 if ($_GET['action']=='del'){

  $sql="delete from product where id = ".$_GET['id'];
  $res=mysqli_query($conn,$sql);
if($res){
  echo "<script type='text/javascript'>alert('dellete success');window.location.href='admin_dish.php';</script>";
}
}


	 $sql="select * from product order by id asc ";
$result=@mysqli_query($conn,$sql) or exit ("查询失败");
while($row=mysqli_fetch_array($result)){

	?>
	<tr><td><?php echo $row['title'];?></td><td><img src="../upload/<?php echo $row['pic'];?>" width="120px"></td><td><?php echo $row['uname'];?></td><td><?php echo $row['content'];?></td><td><?php echo $row['price'];?></td><td><?php echo $row['lanmu'];?></td><td><a href="dish_modify.php?id=<?php echo $row[id];?>">Modify</a></td><td><a href="?action=del&id=<?php echo $row[id];?>">Delete</a></td></tr>
	<?php
}
?>
</table>
 <?php 

 
 if ($_GET['action']=='add'){

		
move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);

  $sql="insert into product (title,uname,price,pic,content) values ('{$_POST['title']}','{$_POST['uname']}','{$_POST['price']}','{$_FILES['file']['name']}','{$_POST['content']}')";
  $result=@mysqli_query($conn,$sql) or die (mysqli_error($conn));
  if($result){
    echo "<script>alert('sucess');window.location.href='admin_dish.php';</script>";
   }
}



 
?> 	

    <form action="?action=add" method="post" enctype="multipart/form-data" style="padding:40px 0 0 100px;">
    <table border=1px cellpadding="0" cellspacing="0" width="90%">
                <tr>
                    <td height="28">Table Number：</td>
                    <td><input type="text" name="title" /></td>
                </tr>
         <tr>
                    <td height="25">Max People：</td>
                    <td> <input type="text" name="uname"  /></td>
                </tr>
                <tr>
                    <td height="25">Price：</td>
                    <td> <input type="text" name="price" /></td>
                </tr>
				<tr>
                    <td height="25">Picture：</td>
                    <td><input type="file" name="file" id="file" /> </td>
                </tr>	
              

				<tr>
				 <td height="25">Content：</td>
				<td>
<textarea name="content" style="width:400px;height:200px;"></textarea>
  </td>
			<tr>
               
              
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="Submit" />
                    </td>
                </tr>
 
        </form>

</table>
  

    
    </div>

   </div>
     
 
    <hr/>
   
        
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">
  <p>版权所有 翻版必究</p>      
</div>
</div>

<!--end-Footer-part-->

</body>
</html>
