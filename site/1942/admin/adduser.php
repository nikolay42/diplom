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
		<!-- ��� ����� ��� ����--> 
		<br>

<br> 
<table width="100%" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td valign="top" ><h3> ���������� ����������� </h3></td> <td valign="top"> 
 </td>
  </tr>
  <tr class="line">	<td colspan="2">&nbsp; </td>	</tr> </table>

	 <?php
	require "../dbconnect.php";
$res_id2=mysql_query("SELECT idr, namerol FROM `roli` where udalrol=0")
or die(mysql_error());
?>
<table align="center" cellspacing="2" cellpadding="2" border="0" bgcolor="white" width="910">

<tr>
	<td><center>  </td>
	<td  valign="top" >
	<center> 	<table align="center" cellspacing="2" cellpadding="2" border="0" bgcolor="ffffff">
	<tr>
	<form  method="post" id="signup">
	<td class="but1">�������, ��� � ��������</td>

	<td class=" "> <input type="text" size="40" name="nameuser" value=""  class="required" 
	title="<p class=' '>������ ������� �������</p>"></td>
	<td class="tr">������� �����</td>
</tr>
<tr>
	<td class="but1">������ � �������</td>
	<td class=" ">
	
	<select name="status"><center>
	<?php
	while ($tip=mysql_fetch_row($res_id2))
	{
	echo "<option value='$tip[0]'>$tip[1]</option>\n";
	}
	?>
	</select></td>
		<td class="tr">����� �������</td>
</tr>
<tr>
<tr>
	<td class="but1">�����</td>
	<td class=" "><input type="text" size="40" name="login" class="required"  title="<p class=' '>���� ����������� � ����������</p>"  value="" ></td>
	<td class="tr">�� ����� 6 ��������, �������� � �����</td>
</tr>
<tr>
	<td class="but1">������</td>
	<td class=" "><input type="text" size="40" name="password" class="required"  title="<p class=' '>���� ����������� � ����������</p>" value="" ></td>
	<td class="tr">�� ����� 6 ��������, �������� � �����</td>
</tr>
<tr>
	<td colspan="3"  > <center> <br><input type="submit" value="����������������" name="reg"><br>
      </form><br></td>
</tr>
<tr>
	<td colspan="3" bgcolor="e6e6fa" > <center>
<?php
require "../dbconnect.php";
if(isset($_POST['reg']))
{
$query1="insert into user (nameuser, status, password, login) 
values ('".$_POST['nameuser']."','".$_POST['status']."','".$_POST['password']."','".$_POST['login']."')";
if(mysql_query($query1))
{
echo "<p class=''>������������ ���������������</p>";
}
else
{
echo "<p class=' '></p>�� ����������</p>";   
}
}                                        
?> 
</td>
</tr>
</table>
</td>
     </tr>
</table>
   </div> 
            </div> 
			<br>

<br>
</body> 
 </html>