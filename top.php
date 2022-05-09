<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>TABLE BALL</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
 
<body  >
<div class="top"> 

	<div class="head">

	</div>

<div class="nav">
 <ul>
	
				<ul>
			   <li><a href="index.php">Index</a></li>
	
			
			
			    <?php 
 
include 'connect.php';
 
?>
				   
				   <?php
				                   $yhm=$_SESSION["uname"];
								   
								   
 $sql="select * from users where yhm like '$yhm' order by id desc";
$result=@mysqli_query($conn,$sql) or exit ("浏览留言失败");
$row=mysqli_fetch_array($result);

$uid=$row['id'];
								   
										if(isset($_SESSION["uname"]))
										{
										
												echo ' <li class=last><a href="login_out.php">'.$_SESSION["uname"].' Exit</a><li class=last><a href=member.php>Member</a></li>';

											}
											
									
										
											
										else{

										echo "

										<li class=last><a href=user_login.php>Login</a></li>
										
										<li class=last><a href=member.php>Member</a></li>" ;
										}
										
						?>    
                        	   <li><a href="help.php">Help</a></li>
			
 </ul>
</div>
</div>

                        
             
		
 