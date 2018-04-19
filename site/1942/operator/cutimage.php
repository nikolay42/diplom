<?php
session_start();
require "../dbconnect.php";
if(isset($_POST['cutimage']))
{
$nomimage=$_POST['cutimage'];
$res_id=mysql_query("SELECT idi, linki, namei FROM `image` where idi='$nomimage'");
while($nomimage1=mysql_fetch_row($res_id))
{
$_SESSION['nomimage']=$nomimage1[0];
$_SESSION['linkimage']=$nomimage1[1];
$_SESSION['namei']=$nomimage1[2];
}
}
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "../name.php"; 
echo $title; ?>
</title> 

 	 <link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="../js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="../js/forma.js"></script>
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny1.js"></script>
	 <script type="text/javascript" src="../js/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="../js/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = '../js/highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	//hs.dimmingOpacity = 0.75;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .75,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});

</script>
	 </head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Редактирование изображения
</p>

<br>
<?php    
  setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());
 require 'config.php'; 
//Подключаем файл конфигурации
require 'process.php'; 
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
<div class="highslide-gallery">
<?php 
$a=$_SESSION['linkimage'];
$b=$_SESSION['namei'];
echo "<a href='../images/full/$a' class='highslide' onClick='return hs.expand(this)'>
	<img src='../images/thumbs/$a' alt='Highslide JS'
		title='Нажмите для увеличения' /> </a>
	<div class='highslide-caption'>$b</div>";

?>
</div>
<form method="post" name="cutimage" action="cutnameimage.php">         
<p class="kvit"> Описание изображения (не более 255 знаков) </p>
<div class="log1" width="100">  <textarea ROWS=2 COLS=50 name="opis" >
<?php echo $_SESSION['namei']; ?>  </textarea>  </div> 
   
<div class="but"> <input type="submit" value="Сохранить изменения" name="cutimage"/>  </div>   
</form>

</div>
 

	</td>
</tr>
</table>



   </div> 
            </div> 
			<br>

<div id='main' class='noifixpng'> 
  
            </div> 
			<center> 
        

 

<br>

 
</body> 
 
</html>