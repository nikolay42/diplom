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
Список категорий товаров <br>
</p>

<div align="center">

<?php
require "../dbconnect.php";
echo "";
$res101=mysql_query("SELECT idmod, namemod, linkim,	opism  FROM `model` where udalmod=0 and kkk=0");
$a=1;
while($res_id=mysql_fetch_row($res101))
{
$fat=$res_id[0];
echo "  <center> <table><tr>
<td width='150' class='tz'> <img src='../images/thumbs/$res_id[2]' width='50' height='50'> </td>
<td width='350' class='gold'>  $res_id[1]</td>
<td width='100' class='tz'> 
<div>
<a href='index.htm' onclick='return hs.htmlExpand(this)'>
<img src='../image/23.png' TITLE='Описание' WIDTH='30' HEIGHT='30' border='0'>
</a>
<div class='highslide-maincontent'>
			<p class='' > Описание </p>
			$res_id[3]</div>
</div>


 </td>
<td width='45' class=''>
</td>
<td width='45' class=''><form   method='post' name='closezakr' action='udal.php'>
<INPUT TYPE='hidden' NAME='closezakr' VALUE='$res_id[0]'>
<input type='image' src='../image/delete.png' TITLE='Удалить ' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr>";
$a=$a+1;
$res102=mysql_query("SELECT idmod, namemod, linkim,	opism  FROM `model` where udalmod=0 and kkk=1 and fat=$fat");
while($res_id1=mysql_fetch_row($res102))
{
$fat=$res_id[0];
echo " <center> <table> <tr>
<td width='150' class='tz'> <img src='../images/thumbs/$res_id1[2]' width='50' height='50'> </td>
<td width='250' class='kat'>  - $res_id1[1] </td>
<td width='100' class='tz'> 
<div>
<a href='index.htm' onclick='return hs.htmlExpand(this)'>
<img src='../image/23.png' TITLE='Описание' WIDTH='30' HEIGHT='30' border='0'>
</a>
<div class='highslide-maincontent'>
			<p class='' > Описание </p>
			$res_id1[3]</div>
</div>


 </td>
<td width='45' class=''><form   method='post' name='see' action='tovari.php'>
<INPUT TYPE='hidden' NAME='see' VALUE='$res_id1[0]'>
<input type='image' src='../image/lupa.png' TITLE='Товары подкатегории ' WIDTH='30' HEIGHT='30' >
</form>
</td>
<td width='45' class=''><form   method='post' name='closezakr' action='udal.php'>
<INPUT TYPE='hidden' NAME='closezakr' VALUE='$res_id1[0]'>
<input type='image' src='../image/delete.png' TITLE='Удалить ' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr></table> ";

} 
echo "</table>";
   
}    

?>	
            </div> 
<br>
</body> 
 </html>