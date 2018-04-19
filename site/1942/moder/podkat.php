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
Добавление подкатегорий товаров <br>
</p>
<?php
	require "../dbconnect.php";
$res_id1=mysql_query("SELECT idmod, namemod FROM `model` where udalmod=0 and kkk=0")
or die(mysql_error());

?> 

<?php    
  setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());
 require 'config.php'; 
//Подключаем файл конфигурации
require 'processpod.php'; 
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
 <p class="kvit"> Категория </p>    
 <div class="log1" width="100"> 
<select name="kat"><center>
	<?php
	while ($tip1=mysql_fetch_row($res_id1))
	{
	echo "<option value='$tip1[0]'>$tip1[1]</option>\n";
	}
	?>
	</select> 
</div> 
 <p class="kvit"> Наименование подкатегории </p>    
 <div class="log1" width="100"> <input type="text" size="60"  name="namemodel" class="required" title="<br>
Поле обязательно к заполнению"></div>  
 <!--<p class="kvit"> Минимальная цена, рублей </p>    
 <div class="log1" width="100"> <input type="text" size="60"  name="prise" class="required" title="<br>
Поле обязательно к заполнению"></div>  -->
 <p class="kvit"> Изображение  </p>  
<div class="log1" width="100"> <input type="file" name="fupload" size="60" />  </div>
<p class="kvit" width="100"> Описание подкатегории  (обязательно) </p>
<div class="log1" width="100">  <textarea ROWS=8 COLS=80 name="opismodel" >



 </textarea> 
 </div> 
   
<div class="but"> <input type="submit" value="Загрузить" />  </div>   
</form>
</div>
  
            </div> 
<br>
</body> 
 </html>