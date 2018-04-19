<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "name.php"; 
echo $title; ?>
</title> 

 	 <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="js/forma.js"></script>
     <script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="js/tiny.js"></script>
	 <script type="text/javascript" src="js/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = 'js/highslide/graphics/';
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
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
<?php
	 setlocale (LC_ALL, "ru_RU.CP1251");
 $ttt=date("dmyGis", time());

require "dbconnect.php";
if(isset($_POST['send']))
{

$query1="insert into userreg (`login`,`pass`,`email`,`emailX`,`nameU`,`nameX`,`dateUB`,`dateUBX`,`sexU`,`sexUX`,`adressU`,`adressUX`,
`strana`,`stranaX`,`avatar`,`icq`,`icqX`,`skype`,`skypeX`,`web`,`webX`,`statusU`) 
values ('".$_POST['login']."','".$_POST['pass']."','".$_POST['email']."','".$_POST['emailX']."','".$_POST['name']."','".$_POST['nameX']."',
'".$_POST['dateB']."',
'".$_POST['dateBX']."',
'".$_POST['pol']."',
'".$_POST['polX']."',
'".$_POST['adres']."',
'".$_POST['adresX']."',
'".$_POST['country']."',
'".$_POST['countryX']."',
'$link',
'".$_POST['icq']."',
'".$_POST['icqX']."',
'".$_POST['skype']."',
'".$_POST['skypeX']."',
'".$_POST['web']."',
'".$_POST['webX']."','0')";
$queryforum="insert into users (`name`,`pass`,`email`) 
values ('".$_POST['login']."','".$_POST['pass']."','".$_POST['email']."')"; /*вставляем данные о пользователе в БД*/
if(mysql_query($query1) and mysql_query($queryforum)) /* если запрос успешно произведен */
{
echo "<p class='pp' width='200'>Регистрация успешно завершена. <br>
Можете войти на сайт, иcпользуя логин и пароль</p>
";
}
else
{
echo "<p class='prav'>Заявление успешно принято</p>
 ";   
}
 } 
                                
?> 

   </div> 
            </div> 
			<br>

<div id='main' class='noifixpng'> 
  
            </div> 
			<center> 
        

 

<br>

 
</body> 
 
</html>