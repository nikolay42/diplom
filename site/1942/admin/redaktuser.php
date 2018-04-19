<?php session_start();
?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
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
	    <script type="text/javascript" src="../js/highslide/highslide-with-html.js"></script>
	 <link rel="stylesheet" type="text/css" href="../js/highslide/highslide.css" />
	 
	 <link rel="stylesheet" type="text/css" href="../css/style.css">

	  <script type="text/javascript">
	hs.graphicsDir = '../js/highslide/graphics/';
	hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'draggable-header';
</script>

</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>

<br>
	 <?php
	require "../dbconnect.php";

$res_id2=mysql_query("SELECT idr, namerol FROM `roli` where udalrol=0")
or die(mysql_error());
?> 
<table width="100%" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td valign="top" ><h3> Редактирование списка пользователей </h3></td> <td valign="top"> 
	<form   method='post' name='userpr' action='adduser.php'>
<INPUT TYPE='hidden' NAME='userpr' VALUE=''>
<input type='image' src='../image/adduser.png' TITLE='Добавить пользователя' WIDTH='45' HEIGHT='45' >
</form>
	
	
 </td>
  </tr>
  <tr class="line">	<td colspan="2">&nbsp; </td>	</tr> </table>

<table align="center" cellspacing="2" cellpadding="2" border="0" bgcolor="ffffff" width="910">
<tr>
	<td align="center">  
	<form method="post" >
<span class="but1">Статус </span>
<select name="status"><center>
	<?php
	while ($tip=mysql_fetch_row($res_id2))
	{
	echo "<option value='$tip[0]'>$tip[1]</option>\n";
	}
	?>
	</select><br><br>
</td>
	<td align="center">  
	
<span class="but1">ФИО </span>
<input type="text" name="fio"><br><br>
</td>
<td >
<center>
<input type="submit" name="search" value="   &nbsp;&nbsp;&nbsp;Смотреть&nbsp;&nbsp;&nbsp;   ">

</form>
</td>
</tr>
</table>
<?php
require "../dbconnect.php";
if(isset($_POST['search']))
{
$status=$_POST['status'];
$res=mysql_query("SELECT idu, nameuser, namerol, password, login FROM user, roli where udaluser=0 and status=idr and nameuser like ('%".$_POST['fio']."%') and status=$status and idu!=1");

$a=1;
while($res_id=mysql_fetch_row($res))
{
echo " <center> <table> <tr>
<td width='30' class='but1'> <b> $a </b> </td>
<td width='150' class='tz'> $res_id[2] </td>
<td width='200' class='tz'> $res_id[1] </td>
<td width='100' class='tz'> $res_id[3] </td>
<td width='100' class='tz'> $res_id[4] </td>
<td width='45' class=''><form   method='post' name='cutuser' action='cutuser.php'>
<INPUT TYPE='hidden' NAME='cutuser' VALUE='$res_id[0]'>
<input type='image' src='../image/cut.png' TITLE='Редактировать данные пользователя' WIDTH='30' HEIGHT='30' >
</form>
</td>
<td width='45' class=''><form   method='post' name='user' action='udal.php'>
<INPUT TYPE='hidden' NAME='user' VALUE='$res_id[0]'>
<input type='image' src='../image/delete.png' TITLE='Удалить пользователя' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr> </table>\n";
$a=$a+1;
}    
}
else
{
$res=mysql_query("SELECT idu, nameuser,  namerol, password, login  FROM user, roli where udaluser=0 and status=idr and idu!=1");
$a=1;
while($res_id=mysql_fetch_row($res))
{
echo " <center> <table> <tr>
<td width='30' class='but1'> <b> $a </b> </td>
<td width='150' class='tz'> $res_id[2] </td>
<td width='200' class='tz'> $res_id[1] </td>
<td width='100' class='tz'> $res_id[3] </td>
<td width='100' class='tz'> $res_id[4] </td>
<td width='45' class=''><form   method='post' name='cutuser' action='cutuser.php'>
<INPUT TYPE='hidden' NAME='cutuser' VALUE='$res_id[0]'>
<input type='image' src='../image/cut.png' TITLE='Редактировать данные пользователя' WIDTH='30' HEIGHT='30' >
</form>
</td>
<td width='45' class=''><form   method='post' name='user' action='udal.php'>
<INPUT TYPE='hidden' NAME='user' VALUE='$res_id[0]'>
<input type='image' src='../image/delete.png' TITLE='Удалить пользователя' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr> </table>\n";
$a=$a+1;
}    
}
?>	
</td>
	
   </div> 
            </div> 
			<br>

<br>
</body> 
 </html>