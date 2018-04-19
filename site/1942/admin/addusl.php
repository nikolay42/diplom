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
Добавление услуг <br>
</p>

<?php    
  setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());
 require 'config.php'; 
//Подключаем файл конфигурации
require 'processaddusl.php'; 
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
<tr> <td  class="kvit" colspan="3"> Наименование </td> </tr>
<tr> <td colspan="3"> <input type="text" size="90"  name="nameusl" class="required" title="<br>
Поле обязательно к заполнению"> </td> </tr>
<tr> 
<td  class="kvit"> Изображение </td> 
<td class="kvit">Стоимость, рублей </td>
<td class="kvit">В процентах </td>
</tr>
<tr>
<td > <input type="file" name="fupload" size="50" /> </td>  
<td><input type="text" size="30"  name="stoimusl" class="required" title="<br> Поле обязательно к заполнению"> </td>
<td>  <input type="checkbox" checked name="proz" value="1">  </td>
</tr>
</table>
<p class="kvit" width="100"> Описание услуги  (обязательно) </p>
<div class="log1" width="100">  <textarea ROWS=8 COLS=80 name="opisusl" >
 </textarea> 
 </div> 
   
<div class="but"> <input type="submit" value="Сохранить" />  </div>   
</form>
</div>
  
            </div> 
<br>
</body> 
 </html>