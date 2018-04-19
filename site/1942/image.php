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
<?php
	require "dbconnect.php";
$res_id2=mysql_query("SELECT idv, namevendor FROM `vendor` where udalv=0")
or die(mysql_error());
?> 
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>

<div class="highslide-gallery">
 <? 
require "dbconnect.php";
if(isset($_POST['foto'])) 
{
$_SESSION['foto']=$_POST['foto'];
}
$rad=mysql_query("SELECT idmod, namemod, linkim, opism FROM `model` where udalmod=0 and idmod='$foto'");
while($rad_id=mysql_fetch_row($rad))
{
echo "<p class='gold'>  $rad_id[1]  </p> <p class='tarivnew'> $rad_id[3] </p>  ";
$opis=$rad_id[3];
}
 ?>
<table align="center" cellspacing="2" cellpadding="2" border="0" bgcolor="ffffff" width="910">
<tr>
	<td align="center"> <form method="post" >
<span class="reggreen">Стоимость от </span>
<input type="text" size="20" value="0" name="prot" class="required"  title="Поле обязательно к заполнению" >

<br><br>
</td>
	<td align="center">  
	
<span class="reggreen">Стоимость до </span>
<input type="text" size="20" value="10000" name="prdo" class="required"  title="Поле обязательно к заполнению" >

<br><br>
</td>
	<td align="center">  

<span class="reggreen">Производитель </span>
<select  name='idven' >";
	    <? while ($tip=mysql_fetch_row($res_id2))
			{
	echo "<option value='$tip[0]'>$tip[1]</option>\n";
	}; ?>
</select><br><br>
</td>
<td >
<center>
<input type="submit" name="search" value="   &nbsp;&nbsp;&nbsp;Применить фильтр&nbsp;&nbsp;&nbsp;   ">

</form>
</td>
</tr>
</table>


<?
$foto=$_SESSION['foto'];
require "dbconnect.php";
if(isset($_POST['search'])) 
{

$prot=$_POST['prot'];
$prdo=$_POST['prdo'];
$idven=$_POST['idven'];

$cont = mysql_query("SELECT count(idi) FROM `image`, vendor where udali!=1 and tip='$foto'  
and idv=$idven and prise>=$prot and prise<=$prdo ");
while($contch=mysql_fetch_row($cont))
{
$contch1=$contch[0];
}
if ($contch1>0)
{
echo "<p class='tr'> C такими параметрами найдено <span class='reg'> $contch1 </span>  позиций</p> ";

$chrad = 1;
$i = 0;
$y=0;
$result = mysql_query("SELECT `linki` FROM `image` where tip='$foto'");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table ><tr>";
while ($y<$chstrok)
{
$m=0;
echo "<tr>";
$result1 = mysql_query("SELECT `linki`, namei, idi, `nametov`, `art`, `prise`, `prise`, `prise`, namevendor FROM `image`, vendor where udali!=1 and tip='$foto'  
and idv=$idven and prise>=$prot and prise<=$prdo limit $i, $chrad");
while($chislo=mysql_fetch_row($result1))
{
$idtovotziv=$chislo[2];
$otziv = mysql_query("SELECT count(idot) FROM `image`, otziv  where idtovotziv=idi and statotziv=1 and idtovotziv=$idtovotziv");
while($co=mysql_fetch_row($otziv))
{
$cotz=$co[0];
if ($cotz>0)
{
$cotz1=$cotz;
}
else {
$cotz1="Нет";
}
}

echo " <td colspan='2' class='reggreen'> <span class='prav'> $chislo[8] </span> $chislo[3] <span class='kvit'> ( $cotz1 отзывов)</td>  <td> 
 <form   method='post' name='addotziv' action='addotziv.php'>
<INPUT TYPE='hidden' NAME='addotziv' VALUE='$chislo[2]'>
<input type='image' src='image/lupa.png' TITLE='Смотреть отзывы' WIDTH='60' HEIGHT='60' >
</form> </span>  </td>  
<td> <form   method='post' name='addotziv' action='addotziv.php'>
<INPUT TYPE='hidden' NAME='addotziv' VALUE='$chislo[2]'>
<input type='image' src='image/addotziv.png' TITLE='Добавить отзыв' WIDTH='60' HEIGHT='60' >
</form> </td> </tr> 
<tr> <td class='prav'> <a href='images/full/$chislo[0]' class='highslide' onClick='return hs.expand(this)'>
	<img src='images/thumbs/$chislo[0]' alt=''
		title='Нажмите для увеличения' /> </a>
	<div class='highslide-caption'>  <span class='reg'>$chislo[5] руб. </span> <br> $chislo[1] </div> </td>
<td > $chislo[1]  </td>
 <td> <table> 
<tr> <td class='kvit'> Артикул </td> <td > $chislo[4]</td> </tr>
<tr> <td class='kvit'> Цена</td> <td class='reg'>$chislo[5] руб.</td> </tr>

<tr> <td >   <form   method='post'  action='addorder.php'>  
<input type='text' size='5'  name='kolvo' class='required' title='<br> Поле обязательно к заполнению'></td> <td> 
<INPUT TYPE='hidden' NAME='plus' VALUE='$chislo[2]'>
<input type='submit' name='addorder' value='Добавить в заказ' />
</form>  </td> </tr> </table> </td> 

";
}
echo "</tr> <tr> <td>&nbsp; </td> </tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>";
}
else {
echo "<p class='table3'> Позиций с такими параметрами не найдено </p> ";
}
}

else
{
$chrad = 1;
$i = 0;
$y=0;
$result = mysql_query("SELECT `linki` FROM `image` where tip='$foto'");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table ><tr>";
while ($y<$chstrok)
{
$m=0;
echo "<tr>";
$result1 = mysql_query("SELECT `linki`, namei, idi, `nametov`, `art`, `prise`, `prise`, `prise`, namevendor 
FROM `image`, vendor where udali!=1 and tip='$foto' and ves=idv limit $i, $chrad");
while($chislo=mysql_fetch_row($result1))
{
$idtovotziv=$chislo[2];
$otziv = mysql_query("SELECT count(idot) FROM `image`, otziv  where idtovotziv=idi and statotziv=1 and idtovotziv=$idtovotziv");
while($co=mysql_fetch_row($otziv))
{
$cotz=$co[0];
if ($cotz>0)
{
$cotz1=$cotz;
}
else {
$cotz1="Нет";
}
}

echo " <td colspan='2' class='reggreen'> <span class='prav'> $chislo[8] </span> $chislo[3] <span class='kvit'> ( $cotz1 отзывов)</td>  <td> 
 <form   method='post' name='addotziv' action='addotziv.php'>
<INPUT TYPE='hidden' NAME='addotziv' VALUE='$chislo[2]'>
<input type='image' src='image/lupa.png' TITLE='Смотреть отзывы' WIDTH='60' HEIGHT='60' >
</form> </span>  </td>  
<td> <form   method='post' name='addotziv' action='addotziv.php'>
<INPUT TYPE='hidden' NAME='addotziv' VALUE='$chislo[2]'>
<input type='image' src='image/addotziv.png' TITLE='Добавить отзыв' WIDTH='60' HEIGHT='60' >
</form> </td> </tr> 
<tr> <td class='prav'> <a href='images/full/$chislo[0]' class='highslide' onClick='return hs.expand(this)'>
	<img src='images/thumbs/$chislo[0]' alt=''
		title='Нажмите для увеличения' /> </a>
	<div class='highslide-caption'>  <span class='reg'>$chislo[5] руб. </span> <br> $chislo[1] </div> </td>
<td > $chislo[1]  </td>
 <td> <table> 
<tr> <td class='kvit'> Артикул </td> <td > $chislo[4]</td> </tr>
<tr> <td class='kvit'> Цена</td> <td class='reg'>$chislo[5] руб.</td> </tr>

<tr> <td >   <form   method='post'  action='addorder.php'>  
<input type='text' size='5'  name='kolvo' class='required' title='<br> Поле обязательно к заполнению'></td> <td> 
<INPUT TYPE='hidden' NAME='plus' VALUE='$chislo[2]'>
<input type='submit' name='addorder' value='Добавить в заказ' />
</form>  </td> </tr> </table> </td> 

";
}
echo "</tr> <tr> <td>&nbsp; </td> </tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>";

}
?>
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