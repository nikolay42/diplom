<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "name.php"; 
echo $title; ?>
</title> 

 	 <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	


</head> 
 
<body> 
   <?php include "menuuser.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>

<?php 
require "../dbconnect.php";
if(isset($_POST['delete'])) 
{
$plus=$_POST['delete'];
$res14="update userreg set status=1 where idu='$plus'";
if(mysql_query($res14))
{
echo "<p class='prav'> Спасибо, Ваш заказ удален. </p>";
} 
}
?>
<table> 
<tr>
	<td colspan="3" bgcolor="e6e6fa" > <center>

</td>
</tr>
</table>
</td>
     </tr>
</table>



   </div> 
            </div> 
			<br>

<div id='main' class='noifixpng'> 
  
            </div> 
			<center> 
        

 

<br>

 
</body> 
 
</html>