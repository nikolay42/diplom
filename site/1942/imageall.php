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
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
		
		
		<p class="pp">
Каталог товаров<br>
</p>
<br>
<div align="center">
 <center>
<?php
require "dbconnect.php";
echo " <center> <table>";
$res101=mysql_query("SELECT idmod, namemod, linkim,	opism  FROM `model` where udalmod=0 and kkk=0");
$a=1;
while($res_id=mysql_fetch_row($res101))
{
echo " <tr>

<td width='150' class='table'> <img src='images/thumbs/$res_id[2]'> </td>
<td width='250' > <span class='gold'> $res_id[1] </span> <br> </td>

 <td width='100' class=''><form   method='post' name='podkat' action='kompl.php'>
<INPUT TYPE='hidden' NAME='podkat' VALUE='$res_id[0]'>
<input type='image' src='image/camera_unmount2.png' TITLE='Смотреть фото ' WIDTH='120' HEIGHT='120' >
</form>
</td>

</tr>
<tr> <td colspan='3' class='table'>$res_id[3]</td> </tr>   ";
$a=$a+1;
}    
echo " </table>";
?>	

            </div>    </div> 
			<center> 
        

 

<br>

 
</body> 
 
</html>