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
Список оказываемых услуг <br>
</p>

<div align="center">

<?php
require "../dbconnect.php";
echo "<center> <table>";
$res101=mysql_query("SELECT `nameusl`, `opisusl`, `stoimusl`, `proz`, `linkusl` FROM `usl` WHERE `udalusl`=0");
$a=1;
while($res_id=mysql_fetch_row($res101))
{
if ($res_id[3]!=0)
{
$proz="процентов от общей суммы заказа";
}
else {
$proz="рублей";
}

echo "  <tr>
<td width='150' class='tz'> <img src='../images/thumbs/$res_id[4]' width='50' height='50'> </td>
<td width='150' class='reggreen'>  $res_id[0]</td>
<td width='50' class='reg'>  $res_id[2]</td>
<td width='150' class='tarivnew'>  $proz </td>
<td width='350' class='tz'> $res_id[1] </td>
<td width='45' class=''><form   method='post' name='closezakr' action='udal.php'>
<INPUT TYPE='hidden' NAME='closezakr' VALUE='$res_id[0]'>
<input type='image' src='../image/delete.png' TITLE='Удалить ' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr> ";

   
}    
echo "</table>";
?>	
            </div> 
<br>
</body> 
 </html>