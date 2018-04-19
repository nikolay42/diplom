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

<style type="text/css">
body {
  position: relative;
  margin: 0;
  padding: 0;
  font-family: Georgia, Times, "Times New Roman", serif;
  font-size: 9pt;
  color: #000;
}
.border {
  float: left;
  margin: 10px 0 0 5px;
}
label {
  padding-left: 5px;
}
select {
  width: 130px;
  font-family: Georgia, Times, "Times New Roman", serif;
  font-size: 9pt;
  color: #000;
}
</style>


 	 <link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="../style.css">
	  <link rel="stylesheet" href="../css/jquery.treeview.css" />
<link rel="stylesheet" href="../red-treeview.css" />



	  
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="../js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="../js/forma.js"></script>
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny.js"></script>
	 <script src="../js/jquery-1.3.1.js" type="text/javascript"></script>
	 
	 <script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>
<script src="../js/jquery.treeview.js" type="text/javascript"></script>

	 <script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				persist: "location"
			});
		})
			</script>
	
</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Редактирование разделов новостей сайта<br>
</p>
<br>
<table> <tr> <td width="300" VALIGN="top">
<div class="text-left1"> 
<div id="sidetree">
<div class="treeheader">&nbsp;</div>
<div id="sidetreecontrol"><a href="?#">Свернуть все</a> | <a href="?#">Развернуть все</a></div>

<ul id="tree">

<?php 
require "../dbconnect.php";
$namec=mysql_query("select namer, logor, idr from razdel where udalr!='1' and tipr='1'");
while($sod_mas1=mysql_fetch_row($namec))
{
$kolv=mysql_query("select count(idn) from news where newsrazdel=$sod_mas1[2]");
while($kolv1=mysql_fetch_row($kolv))
{
$kolv2=$kolv1[0];
}
 echo "<li><img src='../image/$sod_mas1[1]' WIDTH='30' HEIGHT='30' />$sod_mas1[0] <u class='reg'> ($kolv2) </u><ul>";
 $namec1=mysql_query("select namer, idr from razdel where udalr!='1' and tipr='2' and podraz=$sod_mas1[2]");
while($sod_mas2=mysql_fetch_row($namec1))
{
$kolvo=mysql_query("select count(idn) from news where newsrazdel=$sod_mas2[1]");
while($kolvo1=mysql_fetch_row($kolvo))
{
$kolvo2=$kolvo1[0];
}
echo "<li>$sod_mas2[0] <u class='kvit'> ($kolvo2) </u> <form   method='post' name='udalpod' action='udaltel.php'>
<INPUT TYPE='hidden' NAME='udalpod' VALUE='$sod_mas2[1]'>
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='15' HEIGHT='15' >
</form></li>
";
}
echo "</ul>";
}
echo "</li>";
?>
	
</ul>
</div>

</div>
</div>
 </td>
<td width="600" VALIGN="top">


<div class="tz text-right1"> Создать раздел <i> 
<?php 
require "../dbconnect.php";

$chrad = 3;
$i = 0;
$y=0;
$result = mysql_query("SELECT namer from razdel where udalr!='1' and tipr='1' ");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table CELLSPACING='5' >";
while ($y<$chstrok)
{
$m=0;
echo "<tr class='kvit'>";
$namec=mysql_query("select namer, logor, idr from razdel where udalr!='1' and tipr='1' limit $i, $chrad");
while($sod_mas1=mysql_fetch_row($namec))
{
echo "
 <td ><u><img src='../image/$sod_mas1[1]' WIDTH='30' HEIGHT='30' /> </u></td> <td> $sod_mas1[0] $kolvo1</td> <td>
<form   method='post' name='udalraz' action='udaltel.php'> 
<INPUT TYPE='hidden' NAME='udalraz' VALUE='$sod_mas1[2]'> 
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='15' HEIGHT='15' >
</form>
</td> <td>&nbsp; </td>  ";
};
echo "</tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>"
;?>
</i> </div>
<br>

<div class="text-right">Выберите логотип раздела и введите его имя  <form action="addrazdel.php" method="post" enctype="multipart/form-data" id="signup"> <input type="file" name="filename"  > <input type="text" size="40"   name="namerazdel" class="required" title="Заголовок обязателен!"> 
<input type="submit" name="addrazdel" value="Добавить" > </form> </div>
<br> <br> <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="text-right1">  Создать подраздел  <div class="text-right"> Выберите родительский раздел и введите имя подраздела<form action="addpodrazdel.php" method="post" > 
  <select id="country" name="rodrazdel">
 	<?php
	require "../dbconnect.php";
$res=mysql_query("SELECT idr, namer FROM `razdel` where tipr='1' and udalr!=1") /*выбираем пользователей из базы кроме пользователя*/
or die(mysql_error());
$chat=mysql_num_rows($res);
			while ($chat=mysql_fetch_row($res))
			{
			echo "<option value='$chat[0]'>$chat[1]</option>\n";
			}
			?>
  </select>
 <input type="text" size="40"   name="namepodrazdel" class="required" title="Заголовок обязателен!"> 
<input type="submit" name="addpodrazdel" value="Добавить" > </form> </div> </div>
<br> <br> <br>
  </td> </tr> </table>





			<br>

<br>
</body> 
 </html>