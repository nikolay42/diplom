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
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
<p class="pp">
Добавление отзыва к  товарной позиции
</p>
<?php
require "dbconnect.php";
if(isset($_POST['addotziv']))
{
$addotziv=$_POST['addotziv'];
$res_id=mysql_query("SELECT `linki`, namei, idi, `nametov`, `art`, `prise`, `met`, `ves`, namevendor FROM `image`, vendor where udali!=1 and idi=$addotziv and idv=ves" );
while($chislo=mysql_fetch_row($res_id))
{
$_SESSION['otzividtov']=$chislo[2];

echo " <table> <tr> <td colspan='4' class='reggreen'> <span class='prav'> $chislo[8] </span> $chislo[3]  </td> </tr>
<tr> <td class='prav'> 
	<img src='images/thumbs/$chislo[0]' alt='' title='' /> 
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

<?
require "dbconnect.php";
$otz=$_SESSION['otzividtov'];
$otziv = mysql_query("SELECT count(idot) FROM `image`, otziv  where idtovotziv=idi and statotziv=1 and idtovotziv=$otz and fatot=0");
while($co=mysql_fetch_row($otziv))
{
$cotz=$co[0];
if ($cotz>0)
{
$cotz1=$cotz;
echo "<p class='kvit'> Всего отзывов - $cotz </p> ";
$otziv1= mysql_query("SELECT `zagotziv`, `textotziv`, `dateotziv`, `nameotziv`, `statotziv`, idot FROM `image`, otziv  where idtovotziv=idi and statotziv=1 and idtovotziv=$otz and fatot=0");
while($coooot=mysql_fetch_row($otziv1))
{
$papa=$coooot[5];
echo " <table> <tr class='dashedtext'>  <td colspan='2'> <span class='prav'> $coooot[3] </span>  $coooot[2] </td>  </tr> 
<tr> <td class='reggreen' colspan='2'> $coooot[0]  </td>  </tr> 
<tr> <td class='table' colspan='2'> $coooot[1]  </td>  </tr> 
";
$otziv2= mysql_query("SELECT `zagotziv`, `textotziv`, `dateotziv`, `nameotziv`, `statotziv` FROM `image`, otziv  where idtovotziv=idi and statotziv=1 and fatot=$papa");
while($otadmin=mysql_fetch_row($otziv2))
{
echo " <tr> <td class=''><img src='image/str.png' TITLE=' ' WIDTH='30' HEIGHT='30' >  </td> <td class='zag2'> $otadmin[0] <span class='prav'> $otadmin[3] </span> $otadmin[2] </td>  </tr> 
<tr><td class=''> </td> <td class='table'> $otadmin[1]  </td>  </tr> 
</table> ";
}

}

}
else {
$cotz1=" <p class='table3'> Отзывов  пока нет, будьте первым! </p> ";
}
}

?>
<br> <br> 
<table> 
<tr>  <td class="reg">Оставить отзыв: <span class="odd">  (Отзыв появится на сайте после модерации) </span> </td>  </tr>
<tr>  <td class="tarivnew"> Имя пользователя </td>  </tr>
<tr> <td class="tarivnew" width="100" > <form  method="post"> <input type="text" size="60"  name="nameotziv" class="required" title="<br>
Поле обязательно к заполнению"></td>  </tr>
<tr>  <td class="tarivnew"> Заголовок </td>  </tr>
<tr> <td class="tarivnew" width="100"> <input type="text" size="60"  name="zagotziv" class="required" title="<br>
Поле обязательно к заполнению"></td>   </tr>
<tr> <td class="tarivnew" width="100"> Содержание отзыва </td> </tr>
<tr> <td class="tarivnew" width="100">  <textarea ROWS=5 COLS=120 name="textotziv" >  </textarea>  </td>  </tr>
<tr> <td class="tarivnew" width="100"> <input type="submit" value="Отправить на модерацию" name="addotziv1"/>  </td>   </tr>
 </form>
<tr> <td class="tarivnew" width="100"> 

<?php
require "dbconnect.php";
if(isset($_POST['addotziv1']))
{
$otz=$_SESSION['otzividtov'];
$query1="insert into otziv (`zagotziv`, `textotziv`, `nameotziv`, `idtovotziv`) 
values ('".$_POST['zagotziv']."','".$_POST['textotziv']."','".$_POST['nameotziv']."',$otz)";
if(mysql_query($query1))
{
echo "<p class=''>Отзыв отправлен на модерацию, спасибо.</p>";
}
else
{
echo "<p class=' '></p>Не получилось</p>";   
}
}                                        
?> 


  </td>   </tr>
</table>
</div>
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