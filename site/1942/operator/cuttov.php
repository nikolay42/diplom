<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "../name.php"; 
echo $title; ?>
</title> 

	  <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="../js/forma.js"></script>
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny1.js"></script>
	 			 </head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Редактирование товарной позиции
<?php
if(isset($_POST['cuttov']))
{
$cuttov=$_POST['cuttov'];
$res_id=mysql_query("SELECT `linki`, namei, idi, `nametov`, `art`, `prise`, `met`, `ves`, namevendor FROM `image`, vendor where udali!=1 and idi=$cuttov and idv=ves" );
while($chislo=mysql_fetch_row($res_id))
{
$_SESSION['tovcut']=$chislo[2];
$_SESSION['namei']=$chislo[1];
$_SESSION['nametov']=$chislo[3];
$_SESSION['art']=$chislo[4];
$_SESSION['prise']=$chislo[5];
$_SESSION['namevendor']=$chislo[8];

echo " <table> <tr> <td colspan='4' class='reggreen'> <span class='prav'> $chislo[8] </span> $chislo[3]  </td> </tr>
<tr> <td class='prav'> 
	<img src='../images/thumbs/$chislo[0]' alt='' title='' /> 
	</td>
<td class='td' width='500'> $chislo[1]  </td>
 <td width='150'> <table> 
<tr> <td class='kvit' width='75'> Артикул </td> <td width='75'> $chislo[4]</td> </tr>
<tr> <td class='kvit'> Цена</td> <td class='reg'>$chislo[5] руб.</td> </tr>
 </table> </td> 
</td> </tr>
 </table> ";
}
}
?>


</p>
<?php
	require "../dbconnect.php";
$res_id1=mysql_query("SELECT idmod, namemod FROM `model` where udalmod=0 and kkk=1")
or die(mysql_error());
$res_id2=mysql_query("SELECT idv, namevendor FROM `vendor` where udalv=0")
or die(mysql_error());
?> 
<br>
<?php    
  setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());
 require 'config.php'; 
//Подключаем файл конфигурации
require 'processcuttov.php'; 
//Подключаем обработчик 
 if(isset($_FILES['fupload'])) {
 if(preg_match('/[.](jpg)|(JPG)|(gif)|(png)$/', 
//Ставим допустимые форматы изображений для загрузки
$_FILES['fupload']['name'])) {
$filename = $ttt.$_FILES['fupload']['name'];
$source = $_FILES['fupload']['tmp_name'];
$target = $path_to_image_directory . $filename;
move_uploaded_file($source, $target);
 createThumbnail($filename); }
 }  
  
?>

<div align="center">
<form enctype="multipart/form-data" method="post">         
<table> 
<tr> <td colspan="3" class="kvit"> Наименование </td> <td  class="kvit"> Изображение </td></tr>
<tr> <td colspan="3"> <input type="text" size="90"  name="nametov" class="required" title="<br>
Поле обязательно к заполнению" value="<?php echo $_SESSION['nametov']; ?>"> </td> <td colspan="2"> <input type="file" name="fupload" size="50" /> </td> </tr>
<tr> 
<td class="kvit">Категория </td>
<td class="kvit">Производитель </td>
<td class="kvit">Цена </td>
<td class="kvit"> Артикул</td>

</tr>
<tr> 
<td><select name="tip"><center>
	<?php
	while ($tip1=mysql_fetch_row($res_id1))
	{
	echo "<option value='$tip1[0]'>$tip1[1]</option>\n";
	}
	?>
	</select>  </td>
<td>
<select name="idven"><center>
	<?php
	while ($tip2=mysql_fetch_row($res_id2))
	{
	echo "<option value='$tip2[0]'>$tip2[1]</option>\n";
	}
	?>
	</select> 
 </td>
<td><input type="text" size="30"  name="prise" class="required" title="<br> Поле обязательно к заполнению" value="<?php echo $_SESSION['prise']; ?>"> </td>
<td> <input type="text" size="30"  name="art" class="required" title="<br> Поле обязательно к заполнению" value="<?php echo $_SESSION['art']; ?>"></td>

</tr>
</table>
<p class="kvit"> Описание  </p>
<div class="" >  <textarea ROWS=2 COLS=60 name="opis" > <?php echo $_SESSION['namei']; ?>  </textarea> 
 </div> 
   
<div class="but"> <input type="submit" value="Сохранить изменения" />  </div>   
</form>
</div>
 </td>
</tr>
</table>



   </div> 
            </div> 
			<br>


			<center> 
        

 

<br>

 
</body> 
 
</html>