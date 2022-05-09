
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

  <h3>Modify</h3>





<?php 

 if(isset($_GET['id'])){
    $sql= "select * from product where id = ".$_GET['id'];
    $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
    $_rows=mysqli_fetch_array($check);
    

 }
 else{

 }
?>


<?php 
if ($_GET['action']=='edit'){

		


	$sql1="update product set title='{$_POST['title']}',price='{$_POST['price']}',lanmu='{$_POST['state']}',uname='{$_POST['uname']}',content='{$_POST['nr']}' where id = ".$_GET['id'];
	
    $result1=@mysqli_query($conn,$sql1) or die (mysqli_error($result1));
  if($result1){
    echo "<script>alert('Sucess');history.go(-1);location.reload();</script>";
   }
}

 ?>


  <form action="?action=edit&id=<?php echo $_GET['id'];?>" method="post"  >
    <table border=1px cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td height="28">TABLE NUMBER：</td>
                    <td><input type="text" name="title" value="<?php echo $_rows['title'];?>" /></td>
                </tr>
                  <tr>
                    <td height="28">PICTURE：</td>
                    <td><img src="../upload/<?php echo $_rows['pic'];?>" width="120px"> </td>
                </tr>
                 <tr>
                    <td height="28">Max People：</td>
                    <td><input type="text" name="uname" value="<?php echo $_rows['uname'];?>" /></td>
                </tr>
       
                    <tr>
                    <td height="28">PRICE：</td>
                    <td><input type="text" name="price" value="<?php echo $_rows['price'];?>" /></td>
                </tr>
       
         <tr>
                    <td height="28">State：</td>
                    <td> <SELECT name="state">
            <option value="yes">yes</option>
         
                    <option value="no">no</option>
         </SELECT></td>
                </tr>
       
                
         <tr>
                    <td height="25">CONTENT：</td>
                    <td>   <textarea name="nr" cols="70" rows="5"><?php echo $_rows['content'];?></textarea></td>
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
