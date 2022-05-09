<?php 



if ($_GET['action']=='login'){
	
		$mm=md5($_POST['password']);
	
	 $sql = "select * from users where yhm='{$_POST['username']}' && mm='$mm' && role='{$_POST['role']}'";
	 $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
	if ($rows=!mysqli_fetch_array($check)){
 		echo "<script type='text/javascript'>alert('ACCOUNT ERROR');history.back();</script>";
 	}
  	else{


   if($_POST['role']=="user"){
		       $_SESSION["uname"]=$_POST['username'];
    $_SESSION["role"]=$_POST['role'];
    echo "<script type='text/javascript'>alert('sucess');window.location.href='index.php';</script>"; 
		   
		   }
		   
		   

		   else{
			       $_SESSION["uname"]=$_POST['username'];
    $_SESSION["role"]=$_POST['role'];
    echo "<script type='text/javascript'>alert('sucess');window.location.href='admin/admin.php';</script>"; 
			   
			   }



       
  	}
}
?>

<h3 style=" text-align:center; color:#000; margin-bottom:20px;">LOGIN</h3>
 
  

  
 <form id="form2" name="form1" method="post" action="?action=login">
   <table width="300" border="0">
   
     <tr>
       <td height="29">Username</td>
       <td><input name="username" type="text" /></td>
     </tr>
     <tr>
       <td height="29">ROLE </td>
       <td><select name="role">
                             <option value="user">user</opiton>
          
                             <option value="admin">admin</opiton>

          </select></td>
     </tr>
     <tr>
       <td height="30">PASSWORD</td>
       <td><input name="password" type="password" /></td>
     </tr>
     <tr>
       <td height="35">&nbsp;</td>
       <td><input type="submit" value="LOGIN"/>
       <a href="reg.php"><input type="button" value="REGISTER"/></a></td>
     </tr>
   </table>
 </form>