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
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny.js"></script>
</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Редактирование контактной информации<br>
</p>
<br>

<div class="text-left1">  Наименование организации  </div> <div class="tz text-right1"> Текущее наименование - <i> 
<?php 
require "../dbconnect.php";

$namec=mysql_query("select namec from contact where namec!='0' limit 1");
while($sod_mas1=mysql_fetch_row($namec))
{
 echo "<u class='kvit'>$sod_mas1[0]</u>";
};
?>
</i> </div>
<br>
<div class="text-left">Введите новое наименование  </div>
<div class="text-right"> <form method="post" action="contredadd.php"> <input type="text" size="80"   name="name1" class="required" title="Заголовок обязателен!"> 
<input type="submit" name="name" value="Добавить" > </form> </div>
<br> <br> <br>
<div class='line'></div>
<br>
<div class="text-left1">  Адрес организации  </div> <div class="tz text-right1"> Текущий адрес - <i> 
<?php 
require "../dbconnect.php";
$namec=mysql_query("select adres from contact where adres!='0' limit 1");
while($sod_mas1=mysql_fetch_row($namec))
{
 echo "<u class='kvit'>$sod_mas1[0]</u>";
};
?>
</i> </div>
<br>
<div class="text-left">Введите новый адрес  </div>
<div class="text-right"><form method="post" action="contredadd.php"> <input type="text" size="80"   name="adres1" class="required" title="Заголовок обязателен!"> 
<input type="submit" name="adres" value="Добавить" > </form> </div>
<br> <br> <br>
<div class='line'></div>
<br>

<div class="text-left1">  Телефоны организации  </div> <div class="tz text-right1">Текущие телефоны <i> 
<?php 
require "../dbconnect.php";

$chrad = 3;
$i = 0;
$y=0;
$result = mysql_query("SELECT tel from contact where tel!='0' ");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table CELLSPACING='5' >";
while ($y<$chstrok)
{
$m=0;
echo "<tr class='kvit'>";

$namec=mysql_query("select opistel, tel, idc from contact where tel!='0' limit $i, $chrad");
while($sod_mas1=mysql_fetch_row($namec))
{
 echo "
 <td ><u>$sod_mas1[0] </u></td> <td> $sod_mas1[1] </td> <td>
<form   method='post' name='udaltel' action='udaltel.php'> 
<INPUT TYPE='hidden' NAME='udaltel' VALUE='$sod_mas1[2]'> 
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='15' HEIGHT='15' >
</form>
</td> <td>&nbsp; </td>  ";
};
echo "</tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>"
;?>
</i> </div>
<br>
<div class="text-left">Введите описание телефона и его номер  </div>
<div class="text-right"><form method="post" action="contredadd.php"> <input type="text" size="40"   name="opistel" class="required" title="Заголовок обязателен!"> <input type="text" size="40"   name="tel" class="required" title="Заголовок обязателен!"> 
<input type="submit" name="telefon" value="Добавить" > </form> </div>
<br> <br> <br>
<br>
<br>
<br>

<div class="text-left1">  Другие контакты  </div> <div class="tz text-right1">Текущие контакты <i> 
<?php 
require "../dbconnect.php";

$chrad = 2;
$i = 0;
$y=0;
$result = mysql_query("SELECT email from contact where email!='0' ");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table CELLSPACING='5' >";
while ($y<$chstrok)
{
$m=0;
echo "<tr class='kvit'>";

$namec=mysql_query("select opisemail, email, idc from contact where email!='0' limit $i, $chrad");
while($sod_mas1=mysql_fetch_row($namec))
{
 echo "
 <td ><u>$sod_mas1[0] </u></td> <td> $sod_mas1[1] </td> <td>
<form   method='post' name='udalemail' action='udaltel.php'> 
<INPUT TYPE='hidden' NAME='udalemail' VALUE='$sod_mas1[2]'> 
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='15' HEIGHT='15' >
</form>
</td> <td>&nbsp; </td>  ";
};
echo "</tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>"
;?>
</i> </div>
<br>
<div class="text-left">Введите назначение контакта  и его идентификатор  </div>
<div class="text-right"><form method="post" action="contredadd.php"> <input type="text" size="40"   name="opisemail" class="required" title="Заголовок обязателен!">
 <input type="text" size="40"   name="email" class="required" title="Заголовок обязателен!"> 
<input type="submit" name="drugoe" value="Добавить" > </form> </div>
<br> <br> <br>

<br> <br> <br>

   </div>    </div> 
            </div> 
			<br>
<div id='main' class='noifixpng'> 
  
            </div> 
<br>
</body> 
 </html>