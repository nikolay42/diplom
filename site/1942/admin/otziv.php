<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "../name.php"; 
echo $title; ?>
</title> 

	  <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="../js/forma.js"></script>
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny1.js"></script>
	 			 </head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Отзывы для модерации
</p>
<?php
require "../dbconnect.php";
$otziv = mysql_query("SELECT count(idot) FROM `image`, otziv  where idtovotziv=idi and statotziv=0 ");
while($co=mysql_fetch_row($otziv))
{
$cotz=$co[0];
if ($cotz>0)
{
echo "<p class='kvit'> Всего новых отзывов - $cotz </p> ";
$otziv1= mysql_query("SELECT `zagotziv`, `textotziv`, `dateotziv`, `nameotziv`, `statotziv`, `linki`, idi, `nametov`, `art`, `prise`, `met`, `ves`, namevendor, namemod, idot
 FROM `image`, otziv, vendor, model  where idtovotziv=idi and statotziv=0 and idv=ves and idmod=tip");
while($coooot=mysql_fetch_row($otziv1))
{
echo " <table> <tr> <td class='dashedtext'> <span class='prav'> $coooot[3] </span> <span class='tr'> $coooot[2] </span> <span class='date'> $coooot[13]</span> <span class='table3'>  $coooot[12] $coooot[7] арт. $coooot[8] цена $coooot[9] рублей </span>     </td> 
<td class='reggreen'> <form   method='post' name='plusot' action='udal.php'>
<INPUT TYPE='hidden' NAME='plusot' VALUE='$coooot[14]'>
<input type='image' src='../image/plus1.png' TITLE='Добавить ' WIDTH='30' HEIGHT='30' >
</form>  </td>
<td class='reggreen'> <form   method='post' name='minusot' action='udal.php'>
<INPUT TYPE='hidden' NAME='minusot' VALUE='$coooot[14]'>
<input type='image' src='../image/delete.png' TITLE='Удалить ' WIDTH='30' HEIGHT='30' >
</form> </td>
<td class='reggreen'> <form   method='post' name='otvet' action='addototz.php'>
<INPUT TYPE='hidden' NAME='otvet' VALUE='$coooot[14]'>
<input type='image' src='../image/mail.png' TITLE='Ответить ' WIDTH='30' HEIGHT='30' >
</form> </td>
 </tr> 
<tr> <td class='reggreen' colspan='4'> $coooot[0]  </td>  </tr> 
<tr> <td class='table' colspan='4'> $coooot[1]  </td>  </tr> 
</table> </td> ";
}
}
else {
echo " <p class='table3'> Отзывов для модерации нет</p> ";
}

}
?>



  </td>   </tr>
</table>



   </div> 
            </div> 
			<br>


			<center> 
        

 

<br>

 
</body> 
 
</html>