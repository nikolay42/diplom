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
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny.js"></script>
	    <script type="text/javascript" src="../js/highslide/highslide-with-html.js"></script>
	 <link rel="stylesheet" type="text/css" href="../js/highslide/highslide.css" />
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
 <p class="pp">
Справочник Страны<br>
</p>
<table width="800" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Название страны</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><form  method="post" enctype="multipart/form-data" id="signup"><input type="text" size="50" value="" onFocus="doClear(this)" onBlur="doDefault(this)" name="namev" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class=""></td>
	    <td width="10">&nbsp;</td>
  </tr>
 <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
<tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Обозначение страны</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="50" value="" onFocus="doClear(this)" onBlur="doDefault(this)" name="obozv" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class=""></td>
	    <td width="10">&nbsp;</td>
  </tr>
 <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
  <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Флаг</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="file" name="filename"  > </td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log">Файл в формате jpeg, png, gif размером не более 128 кб</td>
	    <td width="10">&nbsp;</td>
  </tr>
 <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	      <tr>
    <td colspan="7" class="pp"><input type="submit" name="send" value="Учесть" >
	</form></td>
     </tr> </table>
 
 
 <?php
   require "../dbconnect.php";
   setlocale (LC_ALL, "ru_RU.CP1251");
   if(isset($_POST['send']))
{
if($_FILES["filename"]["size"] > 128000)
   {
     echo ("Размер файла превышает 128 кбайт");
     exit;
   };
if(copy($_FILES["filename"]["tmp_name"],
$_FILES["filename"]["name"])) /* загружаем картинку, если он есть  */
{
   $link=$_FILES["filename"]["name"];
}
$uploads_dir = '../image';
$tmp_name = $_FILES["filename"]["tmp_name"];
        $name = $_FILES["filename"]["name"];
        move_uploaded_file($tmp_name, "$uploads_dir/$name");

$query1="insert into country (`name`,`imagec`) 
values ('".$_POST['namev']."','$link')";
if(mysql_query($query1))
{
echo "Запись учтена, файл загружен ";
}

else
{
echo "<p class='log'></p>Не получилось</p>";   
}

}
                                
?> 

<?php 
require "../dbconnect.php";
$sod1=mysql_query("SELECT count( idc )
FROM country
WHERE udlalc=0");
while($sod_mas1=mysql_fetch_row($sod1))
{
$kolvo=$sod_mas1[0];
}
if ($kolvo>0)
{
echo "<table border='0' align='center' width='700'><tr><td class='table1'> Всего учтено стран &nbsp;<b>$kolvo</b></td></tr> </table>\n";
}
?>
<?php
require "../dbconnect.php";
$res=mysql_query("SELECT `name`, `imagec`, `udlalc`, `idc` FROM country  where udlalc=0 ");
$a=1;
echo "<center> <table>";
while($res_id=mysql_fetch_row($res))
{
echo "  <tr>
<td width='30' class='kvit'> <b> $a </b> </td>
<td width='150' class='kvit'> $res_id[0] </td>
<td width='50' class='pp'> <img src='../image/$res_id[1]' WIDTH='150' HEIGHT='100' /> </td>
<td> <form   method='post' name='udalvс' action='udal.php'>
<INPUT TYPE='hidden' NAME='udalvс' VALUE='$res_id[3]'>
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='30' HEIGHT='30' >
</form> </td>  
";
$a=$a+1;
}   
echo "</table>"; 
?>	
   </div> 
            </div> 
			<br>
<div id='main' class='noifixpng'> 
  
            </div> 
<br>
</body> 
 </html>