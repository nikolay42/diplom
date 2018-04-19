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
<?php
if(isset($_POST['cutuser']))
{
$cutcat=$_POST['cutuser'];

$res_id=mysql_query("SELECT idu, nameuser, namerol, password, login FROM user, roli where udaluser=0 and status=idr and idu=$cutcat ");
while($nomnews1=mysql_fetch_row($res_id))
{
$_SESSION['idu']=$nomnews1[0];
$_SESSION['nameuser']=$nomnews1[1];
$_SESSION['password']=$nomnews1[3];
$_SESSION['login']=$nomnews1[4];

}
}
?>
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>

<br> 
<table width="100%" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td valign="top" ><h3> Редактирование данных сотрудников </h3></td> <td valign="top"> 
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
	<td class="but1">Фамилия, имя и отчество</td>

	<td class=" "> <input type="text" size="40" name="nameuser" value="<?php echo $_SESSION['nameuser']; ?>" class="required" 
	title="<p class=' '>Только русский алфавит</p>"></td>
	<td class="tr">Русские буквы</td>
</tr>
<tr>
	<td class="but1">Статус в системе</td>
	<td class=" ">
	
	<select name="status"><center>
	<?php
	while ($tip=mysql_fetch_row($res_id2))
	{
	echo "<option value='$tip[0]'>$tip[1]</option>\n";
	}
	?>
	</select></td>
		<td class="tr">Выбор статуса</td>
</tr>
<tr>
<tr>
	<td class="but1">Логин</td>
	<td class=" "><input type="text" size="40" name="login" class="required"  title="<p class=' '>Поле обязательно к заполнению</p>"  value="<?php echo $_SESSION['login']; ?>" ></td>
	<td class="tr">Не менее 6 символов, латиница и цифры</td>
</tr>
<tr>
	<td class="but1">Пароль</td>
	<td class=" "><input type="text" size="40" name="password" class="required"  title="<p class=' '>Поле обязательно к заполнению</p>" value="<?php echo $_SESSION['password']; ?>" ></td>
	<td class="tr">Не менее 6 символов, латиница и цифры</td>
</tr>
<tr>
	<td colspan="3"  > <center> <br><input type="submit" value="Сохранить изменения" name="reg"><br>
      </form><br></td>
</tr>
<tr>
	<td colspan="3" bgcolor="e6e6fa" > <center>
<?php
require "../dbconnect.php";
if(isset($_POST['reg']))
{
$idu=$_SESSION['idu'];
$query1="update user  set nameuser='".$_POST['nameuser']."', status='".$_POST['status']."', password='".$_POST['password']."', login='".$_POST['login']."' where 
idu=$idu";
if(mysql_query($query1))
{
echo "<p class=''>Данные пользователя изменены</p>";
}
else
{
echo "<p class=' '></p>Не получилось</p>";   
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