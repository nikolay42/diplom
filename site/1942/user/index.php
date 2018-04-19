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
   <?php include "menuuser.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
<?php
require "../dbconnect.php";

$zakaz=$_SESSION['usertovar'];
$_SESSION['nomzakprtov']=$zakaz;
$res=mysql_query("SELECT `forname`, `email`, `telrab`, `date`, `status`, `nomzak`, `vsnam`, `sumkol`, `sumprise`, `sumusl`, `summazakaza`, idu FROM `userreg`  where idu=$zakaz and status!=1");
$a=1;
while($res_id=mysql_fetch_row($res))
{
switch ($res_id[4]) {
case 0:
  $status="Открыта";
$dell=" <td class='date1'> Удалить  </td>  ";
$dell2="<td> <form   method='post' name='delete' action='udal.php'>
<INPUT TYPE='hidden' NAME='delete' VALUE='$res_id[11]'>
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='30' HEIGHT='30' >
</form> </td>";
    break;
case 2:
  $status="В обработке";
    break;
	case 3:
  $status="Обработан";
    break;
		case 9:
  $status="Удален";
    break;
}
echo "<center> <table>
<tr>
<td width='130' class='date1'>Статус</td>
<td width='100' class='date1'> Заказ  </td>
<td width='250' class='date1'> Клиент</td>
<td width='50' class='date1'> Всего наименований </td>
<td width='50' class='date1'> Кол-во </td>
<td width='50' class='date1'> Услуги на сумму </td>
<td width='50' class='date1'>  Товары на сумму </td>
<td width='50' class='date1'> Общая сумма </td>
$dell
</tr> 
";
echo "  <tr>
<td width='130' class='kvit'> $status </td>
<td width='100' class='kvit'> № $res_id[5] от <br>  $res_id[3]  </td>
<td width='250' class='kvit'> $res_id[1] <br> $res_id[0] <br> $res_id[2] </td>
<td width='50' class='kvit'> $res_id[6] </td>
<td width='50' class='kvit'> $res_id[7] </td>
<td width='50' class='kvit'> $res_id[9] </td>
<td width='50' class='kvit'> $res_id[8] </td>
<td width='50' class='kvit'> $res_id[10] </td>
$dell2
   
<!--<td> <form   method='post' name='plus' >
<INPUT TYPE='hidden' NAME='plus' VALUE='$res_id[11]'>
<input type='image' src='../image/plus.png' TITLE='В работу' WIDTH='30' HEIGHT='30' >
</form> </td>  -->
</tr> \n";
$a=$a+1;
}   
echo "</table>"; 

?>

<br>

<?
require "../dbconnect.php";
$zakaz=$_SESSION['usertovar'];
$pokaz4=mysql_query("SELECT nomzak FROM `userreg` where idu=$zakaz ");
while($pokaz5=mysql_fetch_row($pokaz4))
{
$zakaznom=$pokaz5[0];
}


$pokaz=mysql_query("SELECT count(`idtov`) FROM `porder`, image, userreg where idtov=idi and nomorder=$zakaznom and kolvo>0 and status!=1 and nomorder=nomzak ");
while($pokaz1=mysql_fetch_row($pokaz))
{
if ($pokaz1[0]>0)
{
$result1=mysql_query("SELECT `idtov`, linki, `kolvo`, `namei`, `nametov`, `art`, `prise`, `namevendor`, `ves`, prise*kolvo, ves*kolvo, idporder, namemod
 FROM `porder`, image, vendor, model, userreg where idtov=idi and  nomorder=$zakaznom and kolvo>0 and idv=ves and idmod=tip and status!=1 and nomorder=nomzak");
echo "<table>";
while($order=mysql_fetch_row($result1))
{
echo " <tr> <td class='prav' > 	<img src='../images/thumbs/$order[1]'/> </a> </td> 
	 <td> <table> <tr> <td colspan='2' class='reggreen'> $order[12] $order[7]  $order[4]</td> </tr> 
<tr> <td class='kvit'> Артикул </td> <td > $order[5]</td> </tr>
<tr> <td class='kvit'> Цена</td> <td >$order[6] руб.</td> </tr>
 </table> 
<td > <span class='pp'> Кол-во </span> <br> <span class='prav'> $order[2] </span></td> 
<td > <span class='pp'>Общая цена </span><br> <span class='prav'> $order[9] рублей</span></td> 
<!--<td class='prav' > <form   method='post'  action='addorder.php'>  
<input type='text' size='5'  name='kolvonew' class='required' title='<br> Поле обязательно к заполнению'></td> <td>  
<INPUT TYPE='hidden' NAME='idt' VALUE='$order[11]'>
<input type='image' name='izmorder' value='Изменить количество' src='../image/izm.png'/>
</form>   </td>
 <td> <form   method='post' name='delete' action='addorder.php'>
<INPUT TYPE='hidden' NAME='delete' VALUE='$order[11]'>
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='30' HEIGHT='30' >
</form> </td>  -->
</tr> ";
}
echo "</table>";
$vsegonam=mysql_query("SELECT count(`idtov`), sum(kolvo), sum(prise*kolvo), sum(ves*kolvo)
 FROM `porder`, image where idtov=idi and nomorder=$zakaznom and kolvo>0  ");
while($vsego=mysql_fetch_row($vsegonam))
{
$_SESSION['vsnam']=$vsego[0];
$_SESSION['sumkol']=$vsego[1];
$_SESSION['sumprise']=$vsego[2];

echo "<p class='log'> Итого товаров <span class='reg'> $vsego[0] </span>  позиций, <span class='reg'> $vsego[1] </span>  наименований на общую сумму 
<span class='reg'> $vsego[2] </span>  рублей </p> ";
}
$result2=mysql_query("SELECT `nameusl`, `opisusl`, `stoimusl`, `proz`, `linkusl`, idusl FROM `porder`, `usl` where nomorder=$zakaznom  and iduslpo=idusl");
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
<td width='100' class=''> <img src='../images/thumbs/$orderusl[4]' width='50' height='50'> </td>
<td width='150' class='reggreen'>  $orderusl[0]</td>
<td width='150' class='reg'>  $orderusl[2] $edst</td>
<td width='150' class='tarivnew'>  $proz рублей </td>
<td width='350' class='tz'> $orderusl[1] </td>
<!--<td width='45' class=''><form   method='post' name='minususl' action='addorder.php'>
<INPUT TYPE='hidden' NAME='minususl' VALUE='$orderusl[5]'>
<input type='image' src='../image/delete.png' TITLE='Удалить услугу ' WIDTH='30' HEIGHT='30' >
</form>
</td> -->
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
echo "<p class='zag2'> Итого заказ на общую сумму  <span class='reg'> $summazakaza </span>  рублей </p>  ";



}
}


?>

<?php 
require "../dbconnect.php";
if(isset($_POST['delete'])) 
{
$plus=$_POST['delete'];
$res14="update userreg set status=1 where idu='$plus'";
if(mysql_query($res14))
{
echo "<p class='prav'> Спасибо, Ваш заказ удален. </p>";
} 
}
?>
<table> 
<tr>
	<td colspan="3" bgcolor="e6e6fa" > <center>

</td>
</tr>
</table>
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