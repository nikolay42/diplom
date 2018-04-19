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
if(isset($_POST['karta']))
{

$query1="insert into userreg (idkart, idval, teluser, namedolg,
forname, name, otch, namelat, 
 idpol, idstrana, inn, passser, 
 passnom, passvid, passdate, 
 passkod, adressreg, adressregtel, 
adressfakt, adressfakttel, namerab, 
adressdolg,  telrab, keyword,
 dateB, mesob) 
values ('".$_POST['idkart']."','".$_POST['idval']."','".$_POST['teluser']."','".$_POST['namedolg']."','".$_POST['forname']."','".$_POST['name']."',
'".$_POST['otch']."',
'".$_POST['namelat']."',
'".$_POST['idpol']."',
'".$_POST['idstrana']."',
'".$_POST['inn']."',
'".$_POST['passser']."',
'".$_POST['passnom']."',
'".$_POST['passvid']."',
'".$_POST['passdate']."',
'".$_POST['passkod']."',
'".$_POST['adressreg']."',
'".$_POST['adressregtel']."',
'".$_POST['adressfakt']."',
'".$_POST['adressfakttel']."',
'".$_POST['namerab']."',
'".$_POST['adressdolg']."',
'".$_POST['telrab']."',
'".$_POST['keyword']."',
'".$_POST['dateB']."',
'".$_POST['mesob']."')";
if(mysql_query($query1)) /* если запрос успешно произведен */
{
echo "<p class='pp' width='200'>Ваша заявка успешно принята. В скором времени с Вами свяжется сотрудник ресторана для подтверждения бронирования. <br> Спасибо! <br>
</p>
";
}
else
{
echo "<p class='prav'>При обработке заявки произошла ошибка</p>
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