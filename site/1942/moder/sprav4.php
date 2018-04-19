<?php session_start();
?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
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
	    <script type="text/javascript" src="../js/highslide/highslide-with-html.js"></script>
	 <link rel="stylesheet" type="text/css" href="../js/highslide/highslide.css" />
	  <script type="text/javascript">
	hs.graphicsDir = '../js/highslide/graphics/';
	hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'draggable-header';
</script>
</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
<p > <table> <tr class="pp"> <td> 
Удаленные архивы  </td> <!--<td> <form   method='post' name='excel' action='excel.php'>
<INPUT TYPE='hidden' NAME='exlel' >
<input type='image' src='../image/excel.png' TITLE='Экспорт списка' WIDTH='30' HEIGHT='30' >
</form>  </td> --> </tr> </table>
</p>

<?php 
require "../dbconnect.php";
$sod1=mysql_query("SELECT count( idU )
FROM `userreg` where status=9");
while($sod_mas1=mysql_fetch_row($sod1))
{
$kolvo=$sod_mas1[0];
}
if ($kolvo>0)
{
echo "<table border='0' align='center' width='700'><tr><td class='table1'> Всего поступило заказов &nbsp;<b>$kolvo</b></td></tr> </table>\n";

$res=mysql_query("SELECT `forname`, `email`, `telrab`, `date`, `status`, `nomzak`, `vsnam`, `sumkol`, `sumprise`, `sumusl`, `summazakaza`, idu FROM `userreg`  where status=9 ");
$a=1;
echo "<center> <table>
<tr>
<td width='30' class='date1'> № пп</td>
<td width='100' class='date1'> Заказ  </td>
<td width='250' class='date1'> Клиент</td>
<td width='50' class='date1'> Всего наименований </td>
<td width='50' class='date1'> Кол-во </td>
<td width='50' class='date1'> Услуги на сумму </td>
<td width='50' class='date1'>  Товары на сумму </td>
<td width='50' class='date1'> Общая сумма </td>

 <td class='date1'> Состав</td> 
 <td class='date1'> Восстановить  </td>  
 <td class='date1'> Удалить  </td>  

</tr> 
";
while($res_id=mysql_fetch_row($res))
{
echo "  <tr>
<td width='30' class='kvit'> <b> $a </b> </td>
<td width='100' class='kvit'> № $res_id[5] от <br>  $res_id[3]  </td>
<td width='250' class='kvit'> $res_id[1] <br> $res_id[0] <br> $res_id[2] </td>
<td width='50' class='kvit'> $res_id[6] </td>
<td width='50' class='kvit'> $res_id[7] </td>
<td width='50' class='kvit'> $res_id[9] </td>
<td width='50' class='kvit'> $res_id[8] </td>
<td width='50' class='kvit'> $res_id[10] </td>

  <td> <form   method='post' name='zakaz' action='zakaz.php'>
<INPUT TYPE='hidden' NAME='zakaz' VALUE='$res_id[5]'>
<input type='image' src='../image/lupa.png' TITLE='Состав заказа' WIDTH='30' HEIGHT='30' >
</form> </td>  
<td> <form   method='post' name='up' action='udal.php'>
<INPUT TYPE='hidden' NAME='up' VALUE='$res_id[11]'>
<input type='image' src='../image/up.png' TITLE='Восстановить' WIDTH='30' HEIGHT='30' >
</form> </td> 
<td> <form   method='post' name='deletnav' action='udal.php'>
<INPUT TYPE='hidden' NAME='deletnav' VALUE='$res_id[11]'>
<input type='image' src='../image/deletnav.png' TITLE='Удалить навсегда' WIDTH='30' HEIGHT='30' >
</form> </td> 

</tr> \n";
$a=$a+1;
}   
echo "</table>"; 
}
else {
echo "<p class='pp'> Удаленных заказов не обнаружено </p> ";
}
?>	
    </div> 
            </div> 
			<br>
<div id='main' class='noifixpng'> 
  
            </div> 
<br>
</body> 
 </html>