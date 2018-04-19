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
  
</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Справочник Производители <br>
</p>

<table width="900" border="0" cellspacing="0" cellpadding="0">
    <tr >
    <td width="30">&nbsp;</td>
	
    <td width="320" class="kvit" >Полное наименование </td>
    <td width="30">&nbsp;</td>
	<td width="320" > </td>
	    <td width="30">&nbsp;</td>
		</tr>
		
			 <tr> 	
	 <td width="30">&nbsp;</td>	
<td width="320"  valign="middle">
<form method="post" id="signup">
<input type="text" size="60"  name="namevendor" class="required" title="<br>
Поле обязательно к заполнению"></td>
    <td width="30" valign="middle">&nbsp; <center> <input type="submit" name="post" value="Учесть" >
	</form></td>
	<td width="320" class="" align="left" valign="middle"> 
	 <?php
require "../dbconnect.php";
if(isset($_POST['post']))
{
$query1="insert into vendor (`namevendor`) 
values ('".$_POST['namevendor']."')";
if(mysql_query($query1) ) /* если запрос успешно произведен */
{
echo "<p class='' width='200'>Производитель добавлен <br>
</p>
";
}
else
{
echo "<p class='prav'>Не получилось</p>
";   
}
 } 
                                
?> 
	
	</td>
	    <td width="30">&nbsp;</td>
  </tr>
   
	<tr>
    <td colspan="7">	 
	 
	
</td>
     </tr>
</table>

<?php 
require "../dbconnect.php";
$sod1=mysql_query("SELECT count( idv )
FROM vendor WHERE udalv=0");
while($sod_mas1=mysql_fetch_row($sod1))
{
$kolvo=$sod_mas1[0];
}
if ($kolvo>0)
{
echo "<table border='0' align='center' width='900'><tr><td class='tz1'> Всего производителей &nbsp;<b>$kolvo</b></td></tr> </table>\n";
}
?>
<?php
require "../dbconnect.php";
$a=1;
$res=mysql_query("SELECT `namevendor`, idv  FROM `vendor` where udalv=0 order by namevendor");
while($res_id=mysql_fetch_row($res))
{
echo " <center> <table> <tr>
<td width='30' class='tz'><b>  $a </b></td>
<td width='250' class='tz'> $res_id[0] </td>
<td width='70' class=''><form   method='post' name='udalvendor' action='udal.php'>
<INPUT TYPE='hidden' NAME='udalvendor' VALUE='$res_id[1]'>
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr> </table>\n";
$a=$a+1;
}    

?>	
<br>
</body> 
 </html>