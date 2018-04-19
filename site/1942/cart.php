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
	
</head> 
 
<body> 
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
		<p class="pp">
Корзина<br>
</p>
<div class="highslide-gallery">
<?
require "dbconnect.php";
$idses = session_id();
$pokaz=mysql_query("SELECT count(`idtov`) FROM `porder`, image where idtov=idi and idses='$idses' and kolvo>0 and nomorder=0");
while($pokaz1=mysql_fetch_row($pokaz))
{
if ($pokaz1[0]>0)
{
$result1=mysql_query("SELECT `idtov`, linki, `kolvo`, `namei`, `nametov`, `art`, `prise`, `namevendor`, `ves`, prise*kolvo, ves*kolvo, idporder, namemod
 FROM `porder`, image, vendor, model where idtov=idi and idses='$idses' and kolvo>0 and nomorder=0 and idv=ves and idmod=tip");
echo "<table>";
while($order=mysql_fetch_row($result1))
{
echo " <tr> <td class='prav' > 	<img src='images/thumbs/$order[1]'/> </a> </td> 
	 <td> <table> <tr> <td colspan='2' class='reggreen'> $order[12] $order[7]  $order[4]</td> </tr> 
<tr> <td class='kvit'> Артикул </td> <td > $order[5]</td> </tr>
<tr> <td class='kvit'> Цена</td> <td >$order[6] руб.</td> </tr>
 </table> 
<td > <span class='pp'> Кол-во </span> <br> <span class='prav'> $order[2] </span></td> 
<td > <span class='pp'>Общая цена </span><br> <span class='prav'> $order[9] рублей</span></td> 
<td class='prav' > <form   method='post'  action='addorder.php'>  
<input type='text' size='5'  name='kolvonew' class='required' title='<br> Поле обязательно к заполнению'></td> <td>  
<INPUT TYPE='hidden' NAME='idt' VALUE='$order[11]'>
<input type='image' name='izmorder' value='Изменить количество' src='image/izm.png'/ WIDTH='60' HEIGHT='60'>
</form>   </td>
 <td> <form   method='post' name='delete' action='addorder.php'>
<INPUT TYPE='hidden' NAME='delete' VALUE='$order[11]'>
<input type='image' src='image/delete.png' TITLE='Удалить' WIDTH='60' HEIGHT='60' >
</form> </td> 
</tr> ";
}
echo "</table>";
$vsegonam=mysql_query("SELECT count(`idtov`), sum(kolvo), sum(prise*kolvo), sum(ves*kolvo)
 FROM `porder`, image where idtov=idi and idses='$idses' and kolvo>0 and nomorder=0 ");
while($vsego=mysql_fetch_row($vsegonam))
{
$_SESSION['vsnam']=$vsego[0];
$_SESSION['sumkol']=$vsego[1];
$_SESSION['sumprise']=$vsego[2];

echo "<p class='log'> Итого товаров <span class='reg'> $vsego[0] </span>  позиций, <span class='reg'> $vsego[1] </span>  наименований на общую сумму 
<span class='reg'> $vsego[2] </span>  рублей </p> ";
}
$result2=mysql_query("SELECT `nameusl`, `opisusl`, `stoimusl`, `proz`, `linkusl`, idusl FROM `porder`, `usl` where idses='$idses' and nomorder=0 and iduslpo=idusl");
echo "<table>";
$obsummusl=0;
while($orderusl=mysql_fetch_row($result2))
{
$obssum=$_SESSION['sumprise'];

if ($orderusl[3]!=0)
{
$edst="%";
$proz=($obssum*$orderusl[2])/100;
}
else {
$edst="рублей";
$proz=$orderusl[2];
}
echo "  <table> <tr>
<td width='100' class=''> <img src='images/thumbs/$orderusl[4]' width='50' height='50'> </td>
<td width='150' class='reggreen'>  $orderusl[0]</td>
<td width='150' class='reg'>  $orderusl[2] $edst</td>
<td width='150' class='tarivnew'>  $proz рублей </td>
<td width='350' class='tz'> $orderusl[1] </td>
<td width='45' class=''><form   method='post' name='minususl' action='addorder.php'>
<INPUT TYPE='hidden' NAME='minususl' VALUE='$orderusl[5]'>
<input type='image' src='image/delete.png' TITLE='Удалить услугу ' WIDTH='60' HEIGHT='60' >
</form>
</td>
</tr> </table>";
$obsummusl=$obsummusl+$proz;
}
echo "</table>";
if($obsummusl>0)
{
echo "<p class='log'> Итого услуг на общую сумму  <span class='reg'> $obsummusl </span>  рублей </p>  ";
}
$_SESSION['sumusl']=$obsummusl;
$summazakaza=$_SESSION['sumprise']+$obsummusl;
$_SESSION['summazakaza']=$summazakaza;
echo "<p class='zag2'> Итого Ваш заказ на общую сумму  <span class='reg'> $summazakaza </span>  рублей </p>  ";

$max=mysql_query("SELECT max(`nomzak`) FROM userreg ");
while($max1=mysql_fetch_row($max))
{
$_SESSION['nomzak']=$max1[0]+1;
}

$res101=mysql_query("SELECT `nameusl`, `opisusl`, `stoimusl`, `proz`, `linkusl`, idusl FROM `usl` WHERE `udalusl`=0");
$a=1;
while($usluga=mysql_fetch_row($res101))
{
if ($usluga[3]!=0)
{
$proz="процентов от общей суммы заказа";
}
else {
$proz="рублей";
}
$idusl101=$usluga[5];
$prover=mysql_query("SELECT count(iduslpo)  FROM porder WHERE iduslpo=$idusl101 and nomorder=0");
while($prover1=mysql_fetch_row($prover))
{
$prover101=$prover1[0];
}
if ($prover101==0)
{
echo "<p class='reg'> Добавить услугу </p> ";
echo "  <table> <tr>
<td width='150' class=''> <img src='images/thumbs/$usluga[4]' width='50' height='50'> </td>
<td width='150' class='reggreen'>  $usluga[0]</td>
<td width='50' class='reg'>  $usluga[2]</td>
<td width='150' class='tarivnew'>  $proz </td>
<td width='350' class='tz'> $usluga[1] </td>
<td width='45' class=''><form   method='post' name='addusl' action='addorder.php'>
<INPUT TYPE='hidden' NAME='addusl' VALUE='$usluga[5]'>
<input type='image' src='image/plus1.png' TITLE='Добавить услугу ' WIDTH='60' HEIGHT='60' >
</form>
</td>
</tr> </table>";
 
} 
}    



echo "<table width='100%' border='1' cellspacing='5' cellpadding='5'>
    <tr class='line'>	<td colspan='2'>&nbsp; </td>	</tr> </table>
<table align='center' cellspacing='2' cellpadding='2' border='0' bgcolor='white' width='910'>

<tr>
	<td><center>  </td>
	<td  valign='top' >
	<center> 	<table align='center' cellspacing='2' cellpadding='2' border='0' bgcolor='ffffff'>
	<tr>
	<form  method='post' id='signup' action='addcart.php'>
	<td class='but1'>Фамилия, имя, отчество</td>

	<td class=' '> <input type='text' size='60' name='forname' value=''  class='required' 
	></td>
	<td class='tr'>Русские буквы</td>
</tr>
<tr>
	<td class='but1'>Электронная почта (для доступа в личный кабинет)</td>
	<td class=' '><input type='text' size='60' name='email' class='required'   value='' ></td>
	<td class='tr'>user@mail.ru</td>
</tr>
<tr>
	<td class='but1'>Контактный телефон</td>
	<td class=' '><input type='text' size='60' name='telrab' class='required'  value='' ></td>
	<td class='tr'>Только  цифры</td>
</tr>
<tr>
	<td colspan='3'  > <center> <br><input type='submit' value='Закончить оформление заказа' name='reg'><br>
      </form><br></td>
</tr>";
}
else {
echo "<p class='prav'> Ваша  корзина пуста<br></p>";

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