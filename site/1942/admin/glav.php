<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "../name.php"; 
echo $title;
?>
</title> 

 	 <link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="../js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="../js/forma.js"></script>
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny.js"></script>
</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Добавление текста на главную страницу сайта  <br>
</p>


<table width="900" border="1" cellspacing="0" cellpadding="0">
<tr >
    <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	<td  class="kvit" colspan="3">Заголовок </td>
	 <td width="50">&nbsp;</td>
	<td width="30">&nbsp;</td>
</tr>	
<tr> 	
	  <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>	
	   <td width="60">&nbsp;</td>
		<td  class="log" ><form method="post" id="signup"> <input type="text" size="120"   name="zagn" class="required" title="Заголовок обязателен!"> 	</td>
		  <td width="60">&nbsp;</td>
	    <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
</tr>
<tr>	 
	<td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	  <td width="60">&nbsp;</td>
	<td  class="kvit">Описание</td>
	 <td width="60">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	<td width="30">&nbsp;</td>
</tr>
<tr>
    <td width="30">&nbsp;</td>
	<td  class="" colspan="5" align="center"><textarea ROWS=10 COLS=120 name="bodyn" class="required" title="<p class='log'> Напишите что-нибудь! </p>"> </textarea></td>
	<td width="30">&nbsp;</td>
</tr>
</table>
<div class="but">
<input type="submit" name="post" value="Добавить" > </form></td>
</div>	 
	 
	 <?php
require "../dbconnect.php";
if(isset($_POST['post']))
{
$query1="insert into glav (`zagindex`,`zapis`) 
values ('".$_POST['zagn']."','".$_POST['bodyn']."')";
if(mysql_query($query1) ) /* если запрос успешно произведен */
{
echo "<p class='but1' >Текст успешно добавлен <br>
</p>
";
}
else
{
echo "<p class='pp'>Не получилось</p>
";   
}
 } 
                                
?> 
	</td>
</tr>
</table>
   </div> 
            </div> 
			<br>
<div id='main' class='noifixpng'> 
  
            </div> 
<br>
</body> 
 </html>