<?php 
session_start();


if ($_GET['action']=='login'){
	 $sql = "select * from admin where username='{$_POST['username']}' && password='{$_POST['password']}'&& role='{$_POST['role']}'";
	 $check=@mysqli_query($conn,$sql) or exit (mysqli_error());
	if ($rows=!mysqli_fetch_array($check)){
 		echo "<script type='text/javascript'>alert('account error');history.back();</script>";
 	}
  	else{
        $_SESSION["uname"]=$_POST['username'];
  		echo "<script type='text/javascript'>alert('sucess');window.location.href='admin/admin.php';</script>"; 
  	}
}
?>

<h3 style=" text-align:center; color:#000; margin-bottom:20px;">Admin Login</h3>
 
  
 <form id="form2" name="form1" method="post" action="?action=login">
   <table width="300" border="0">
   
     <tr>
       <td height="29">USERNAME </td>
       <td><input name="username" type="text" /></td>
     </tr>
      <tr>
       <td height="29">ROLE </td>
       <td>
         <SELECT name="role">
            <option value="boss">boss</option>
         
                    <option value="manage">manage</option>
         </SELECT>
       
       
       </td>
     </tr>
     <tr>
       <td height="30">PASSWORD</td>
       <td><input name="password" type="password" /></td>
     </tr>
     <tr>
       <td height="35">&nbsp;</td>
       <td><input type="submit" value="login"/>
       <input type="reset" value="reset"/></td>
     </tr>
   </table>
 </form>