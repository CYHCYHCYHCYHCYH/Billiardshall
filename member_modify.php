 <?php 
 include 'top.php';
 if (empty($_SESSION["uname"])){
	echo "<script type='text/javascript'>alert('您未登录，请先登录');window.location.href='user_login.php';</script>";
	exit;
}
?> 	

<div class="ny-main">
<div class="ny-left">

 <?php 
 include 'm_left.php';
 if(isset($_GET['id'])){
    $sql= "select * from users where id = ".$_GET['id'];
    $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
    $_rows=mysqli_fetch_array($check);
    
    $title=$_rows['title'];
 }
 else{

 }



?> 	


</div>
<div class="ny-right">
<div class="ny-zjhz">

 <br> <br>

   

<h3>MODIFY</h3>


<?php 
if ($_GET['action']=='edit'){

				$mm=md5($_POST['password']);


	$sql1="update users  set mm='$mm',tel='{$_POST['tel']}',email='{$_POST['email']}' where id = ".$_GET['id'];
	
    $result1=@mysqli_query($conn,$sql1) or die (mysqli_error($result1));
  if($result1){
    echo "<script>alert('SUCESS');history.go(-1);location.reload();</script>";
   }
}





 ?>

    <form action="?action=edit&id=<?php echo $_GET['id'];?>" method="post"  >
    <table border=1px cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td height="28">USERNAME：</td>
                    <td><?php echo $_rows['yhm'];?></td>
                </tr>
                 <tr>
                    <td height="28">PHOTO：</td>
                    <td><img src="upload/<?php echo $_rows['tx'];?>" width="100px"></td>
                </tr>
                    <tr>
                    <td height="28">PASSWORD：</td>
                    <td><input type="text" name="password" value="<?php echo $_rows['mm'];?>" /></td>
                </tr>
                
                    <tr>
                    <td height="28">Tel：</td>
                    <td><input type="text" name="tel" value="<?php echo $_rows['tel'];?>" /></td>
                </tr>
                
         <tr>
                    <td height="25">Email：</td>
                    <td> <input type="text" name="email" value="<?php echo $_rows['email'];?>" /></td>
                </tr>
			
              

               
              
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submit" value="Modify" />
                    </td>
                </tr>
 
        </form>

</table>

</div>

</div>

<div class="clear"></div>
</div> <?php 
 include 'foot.php';
 
?> 	