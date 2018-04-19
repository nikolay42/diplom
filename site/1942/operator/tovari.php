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
	  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
	
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
<div align="center">
<div class="highslide-gallery">
<?
require "../dbconnect.php";
if(isset($_POST['see'])) 
{
$_SESSION['see']=$_POST['see'];
$see=$_SESSION['see'];

}
$rad=mysql_query("SELECT idmod, namemod, linkim, opism FROM `model` where udalmod=0 and idmod='$see'");
while($rad_id=mysql_fetch_row($rad))
{
echo " <table> <tr> <td class='pp'> Список товаров подкатегории </td> <td class='gold'>  $rad_id[1]  </td> <td> <!--<form   method='post' name='cutcat' action='cutkat.php'>
<INPUT TYPE='hidden' NAME='cutcat' VALUE='$rad_id[0]'>
<input type='image' src='../image/cut.png' TITLE='Редактировать' WIDTH='40' HEIGHT='40' > </form>  --></td> </tr> 
<tr> <td colspan='3' class='td'> $rad_id[3] </td> </tr> </table> ";
$opis=$rad_id[3];
}

$chrad = 1;
$i = 0;
$y=0;
$result = mysql_query("SELECT `linki` FROM `image` where tip='$see'");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table ><tr>";
while ($y<$chstrok)
{
$m=0;
echo "<tr>";
$result1 = mysql_query("SELECT `linki`, namei, idi, `nametov`, `art`, `prise`, `met`, `ves`, namevendor FROM `image`, vendor where udali!=1 and tip='$see' and idv=ves limit $i, $chrad");
while($chislo=mysql_fetch_row($result1))
{
echo " <td colspan='4' class='reggreen'> <span class='prav'> $chislo[8] </span> $chislo[3]  </td> </tr>
<tr> <td class='prav'> 
	<img src='../images/thumbs/$chislo[0]' alt='' title='' /> 
	</td>
<td class='td' width='500'> $chislo[1]  </td>
 <td width='150'> <table> 
<tr> <td class='kvit' width='75'> Артикул </td> <td width='75'> $chislo[4]</td> </tr>
<tr> <td class='kvit'> Цена</td> <td class='reg'>$chislo[5] руб.</td> </tr>
 </table> </td> 
<td width='50'>  <!-- <form   method='post' name='cuttov' action='cuttov.php'>
<INPUT TYPE='hidden' NAME='cuttov' VALUE='$chislo[2]'>
<input type='image' src='../image/cut.png' TITLE='Редактировать товар' WIDTH='40' HEIGHT='40' > </form> --> </td>

";
}
echo "</tr> <tr> <td>&nbsp; </td> </tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>";

echo "<p class='kvit'> <a href='kalc.php'>  </a> </p>";
?>
            </div> 
<br>
</body> 
 </html>