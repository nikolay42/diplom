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
Добавление ответа на отзыв
</p>
<?php
require "../dbconnect.php";
if(isset($_POST['otvet']))
{
$addotziv=$_POST['otvet'];
$res_id=mysql_query("SELECT `zagotziv`, `textotziv`, `dateotziv`, `nameotziv`, `statotziv`, `linki`, idi, `nametov`, `art`, `prise`, `met`, `ves`, namevendor, namemod, idot
 FROM `image`, otziv, vendor, model  where idtovotziv=idi and statotziv=0 and idv=ves and idmod=tip and idot=$addotziv" );
while($coooot=mysql_fetch_row($res_id))
{
$_SESSION['addototz']=$coooot[14];
$_SESSION['tovotz']=$coooot[6];
echo " <table> <tr> <td class='dashedtext'> <span class='prav'> $coooot[3] </span> <span class='tr'> $coooot[2] </span> <span class='date'> $coooot[13]</span> <span class='table3'>  $coooot[12] $coooot[7] арт. $coooot[8] цена $coooot[9] рублей </span>     </td> 
<td class='reggreen'> <form   method='post' name='plusot' action='udal.php'>
<INPUT TYPE='hidden' NAME='plusot' VALUE='$coooot[14]'>
<input type='image' src='../image/plus1.png' TITLE='Добавить ' WIDTH='30' HEIGHT='30' >
</form>  </td>
<td class='reggreen'> <form   method='post' name='minusot' action='udal.php'>
<INPUT TYPE='hidden' NAME='minusot' VALUE='$coooot[14]'>
<input type='image' src='../image/delete.png' TITLE='Удалить ' WIDTH='30' HEIGHT='30' >
</form> </td>
<td class='reggreen'> </td>
 </tr> 
<tr> <td class='reggreen' colspan='4'> $coooot[0]  </td>  </tr> 
<tr> <td class='table' colspan='4'> $coooot[1]  </td>  </tr> 
</table> </td> ";
}
echo "<table> 
<tr>  <td class='reg'>Ответить на отзыв: <span class='odd'> </span> </td>  </tr>
<!--<tr>  <td class='tarivnew'> Имя пользователя </td>  </tr>
<tr> <td class='tarivnew' width='100' >  <input type='text' size='60'  name='nameotziv' class='required' title='<br>
Поле обязательно к заполнению'></td>  </tr>
<tr>  <td class='tarivnew'> Заголовок </td>  </tr>
<tr> <td class='tarivnew' width='100'> <input type='text' size='60'  name='zagotziv' class='required' title='<br>
Поле обязательно к заполнению'></td>   </tr> 
<tr> <td class='tarivnew' width='100'> Содержание отзыва </td> </tr>-->
<tr> <td class='tarivnew' width='100'>  <form  method='post'><textarea ROWS=5 COLS=120 name='textotziv' >  </textarea>  </td>  </tr>
<tr> <td class='tarivnew' width='100'> <input type='submit' value='Ответить' name='addotziv1'/>  </td>   </tr>
 </form>
<tr> <td class='tarivnew' width='100'> 
  </td>   </tr>
</table>";

}
?>


<br> <br> 


<?php
require "../dbconnect.php";
if(isset($_POST['addotziv1']))
{
$otz=$_SESSION['addototz'];
$tovotz=$_SESSION['tovotz'];
$query1="insert into otziv (`zagotziv`, `textotziv`, `nameotziv`, `idtovotziv`, fatot, statotziv) 
values ('Ответ администрации','".$_POST['textotziv']."','Администратор',$tovotz, $otz, 1)";
$resup="update otziv set statotziv=1 where idot='$otz'";
if(mysql_query($query1) and mysql_query($resup))
{
echo "<p class=''>Ответ на отзыв добавлен, спасибо.</p>";
}
else
{
echo "<p class=' '></p>Не получилось</p>";   
}
}                                        
?> 





   </div> 
            </div> 
			<br>


			<center> 
        

 

<br>

 
</body> 
 
</html>