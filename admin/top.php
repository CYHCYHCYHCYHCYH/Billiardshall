<!DOCTYPE html>
<html lang="en">
<head>
<title>admin</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="admin.css">
<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
</style>
</head>
<body>


<div class="wap">
   <div class="head">
  <h3>ADMIN</h3> <p> <?Php    
  
    include '../connect.php';  
  
  $yhm=$_SESSION["uname"];
  
   $sql="select * from users where yhm like '$yhm' ";
$result=@mysqli_query($conn,$sql);
$row1=mysqli_fetch_array($result);

echo $row1['department'];
echo "--";
echo $row1['role'];
echo "--";
echo $row1['yhm'];
  

  
   ?> &nbsp;WELCOME TO LOGIN</p>

  </div>
    <div class="clear"></div>
<div class="nav">
  <ul>

    <li ><a href="admin.php"><i class="icon icon-info-sign"></i> <span>USER MANAGE</span></a> </li>

        <li ><a href="admin_dingan.php"><i class="icon icon-info-sign"></i> <span>BOOKING MANAGE</span></a> </li>
    

        <li> <a href="admin_dish.php"><i class="icon icon-signal"></i> <span>TABLE MANAGE
    </span></a> </li>
    



    <li><a href="../login_out.php"><i class="icon icon-file"></i> <span>EXIT</span></a></li>
    
   
  </ul>
		
</div>
<div class="main">